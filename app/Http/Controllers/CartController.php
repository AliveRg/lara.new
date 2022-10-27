<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Service\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CartController extends Controller
{
    public function getProducts(Request $request, Cart $cart): JsonResponse
    {
        return response()->json([ 'products' => $cart->getProductsData() ]);
    }

    public function add(Request $request, Cart $cart): JsonResponse
    {
        if (!($request->has('p_id') && $request->request->getInt('p_id'))) {
            return $this->failed([ 'p_id' => 'invalid value' ]);
        }

        $productId = $request->request->getInt('p_id');

        if (!$product = $this->getProduct($productId)) {
            return $this->failed([ 'p_id' => 'product not found' ]);
        }

        if (!($request->request->has('amount') && $request->request->getInt('amount'))) {
            return $this->failed([ 'amount' => 'invalid value' ]);
        }

        $cart->add($product, $request->get('amount'));

        return $this->success([
            'amount' => $request->get('amount')
        ]);
    }

    public function remove(Request $request, Cart $cart): JsonResponse
    {
        $product = $this->getProduct($request->request->getInt('p_id'));

        if (!$product) {
            return $this->failed([ 'p_id' => 'product not found' ]);
        }

        $cart->remove($product);

        return response()->json([ 'code' => 0 ]);
    }

    private function getProduct(int $id): ?Product
    {
        return Product::find($id);
    }
}
