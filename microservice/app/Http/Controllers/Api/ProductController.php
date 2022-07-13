<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{   
    public function list()
    {
        $products = Product::get();

        if(empty($products)){
            return response()->json([
                'status' => 'error',
                'message' => 'There is no available products'
            ], 404);
        }

        return response()->json($products, 200);
    }
}