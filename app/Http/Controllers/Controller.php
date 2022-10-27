<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function success(array $data = []): JsonResponse
    {
        return response()->json([
            'code' => 0,
            'data' => $data
        ]);
    }

    protected function failed(array $errors = []): JsonResponse
    {
        return response()->json([
            'code' => 1,
            'data' => null,
            'errors' => $errors
        ]);
    }

}
