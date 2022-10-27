<?php

namespace App\Service;

use App\Models\Product;
use Illuminate\Contracts\Session\Session;

class Favorite
{
    const FAVORITE_SESSION_NAME = 'favorite';

    private $session;

    /** @var array|null  */
    private $data = null;

    public function __construct()
    {
        $this->session = session();
    }

    private function loadData()
    {
        if ($this->data === null) {

            $this->data = $this->session->get(self::FAVORITE_SESSION_NAME, []);
        }
    }

    public function getProducts(): array
    {
        $this->loadData();

        $pIds = array_keys($this->data);

        if (count($pIds) === 0) {
            return [];
        }

        return Product::find($pIds);
    }

    public function getProductsData(): array
    {
        $this->loadData();

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
        $this->loadData();

        return count($this->data);
    }

    public function has(int $id): bool
    {
        $this->loadData();

        return array_key_exists($id, $this->data);
    }

    public function add(Product $product)
    {
        $this->loadData();

        $this->data[$product->id] = true;

        $this->save();
    }

    public function remove(Product $product)
    {
        $this->loadData();

        if (isset($this->data[$product->id])) {

            unset($this->data[$product->id]);

            $this->save();
        }
    }

    private function save()
    {
        $this->session->put(self::FAVORITE_SESSION_NAME, $this->data);

        $this->session->save();
    }
}
