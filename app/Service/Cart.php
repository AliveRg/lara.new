<?php

namespace App\Service;

use App\Models\Product;
use Illuminate\Contracts\Session\Session;

class Cart
{
    const CART_SESSION_NAME = 'cart';

    private $session;
    /** @var array|null */
    private $cartData = null;

    public function __construct()
    {
        $this->session = session();
    }

    private function loadData()
    {
        if ($this->cartData === null) {

            $this->cartData = $this->session->get(self::CART_SESSION_NAME, []);
        }
    }

    public function getProducts(): array
    {
        $this->loadData();

        $pIds = array_keys($this->cartData);

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

    /*
     * Вернет кол-во товаров в корзине
     */
    public function count(): int
    {
        $this->loadData();

        return count($this->cartData);
    }

    /*
     * Проверить есть ли товар в корзине по id
     */
    public function has(int $id): bool
    {
        $this->loadData();

        return array_key_exists($id, $this->cartData);
    }

    /*
     * Получить кол-во товара в корзине по id товара
     */
    public function getAmount(int $id): int
    {
        $this->loadData();

        if ($this->has($id)) {

            return $this->cartData[$id]['amount'];
        }

        return 0;
    }

    public function add(Product $product, int $amount)
    {
        $this->loadData();

        $this->cartData[$product->id] = [
            'amount' => $amount
        ];

        $this->save();
    }

    public function remove(Product $product)
    {
        $this->loadData();

        if (isset($this->cartData[$product->id])) {

            unset($this->cartData[$product->id]);

            $this->save();
        }
    }

    private function save()
    {
        $this->session->push(self::CART_SESSION_NAME, $this->cartData);

        $this->session->save();
    }
}
