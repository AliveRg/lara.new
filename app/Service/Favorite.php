<?php

namespace App\Service;

use App\Models\Product;
use Illuminate\Contracts\Session\Session;

class Favorite
{
    const FAVORITE_SESSION_NAME = 'favorite';

    private $session;
    private $data;

    public function __construct(Session $session)
    {
        $this->session = $session;

        $this->data = $session->get(self::FAVORITE_SESSION_NAME, []);
    }

    public function getProducts(): array
    {
        $pIds = array_keys($this->data);

        if (count($pIds) === 0) {
            return [];
        }

        return Product::find($pIds);
    }

    public function getProductsData(): array
    {
        $products = $this->getProducts();

        return array_map(function(Product $product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
            ];
        }, $products);
    }

    public function count(): int
    {
        return count($this->data);
    }

    public function has(int $id): bool
    {
        return array_key_exists($id, $this->data);
    }

    public function add(Product $product)
    {
        $this->data[$product->id] = true;

        $this->save();
    }

    public function remove(Product $product)
    {
        if (isset($this->data[$product->id])) {

            unset($this->data[$product->id]);

            $this->save();
        }
    }

    private function save()
    {
        $this->session->push(self::FAVORITE_SESSION_NAME, $this->data);
    }
}
