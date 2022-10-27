<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Service\Favorite;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class FavoriteController extends Controller
{
    public function getProducts(Request $request, Favorite $favorite): JsonResponse
    {
        return $this->success([ 'products' => $favorite->getProductsData() ]);
    }

    public function add(Request $request, Favorite $favorite): JsonResponse
    {
        if (!($request->has('p_id') && $request->request->getInt('p_id'))) {
            return $this->failed([ 'p_id' => 'invalid value' ]);
        }

        $productId = $request->request->getInt('p_id');

        if (!$product = $this->getProduct($productId)) {
            return $this->failed([ 'p_id' => 'product not found' ]);
        }

        $favorite->add($product);

        return $this->success();
    }

    public function remove(Request $request, Favorite $favorite): JsonResponse
    {
        $product = $this->getProduct($request->request->getInt('p_id'));

        if (!$product) {
            return $this->failed([ 'p_id' => 'product not found' ]);
        }

        $favorite->remove($product);

        return $this->success();
    }

    private function getProduct(int $id): ?Product
    {
        return Product::find($id);
    }
}
