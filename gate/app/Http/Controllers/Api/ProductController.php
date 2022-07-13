<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Config;

class ProductController extends Controller
{
    public function list()
    {


        $microserviceHost = Config::get('api.microservice_1');
        $microserviceApiKey = Config::get('api.microservice_1_api_key');
        $endpoint = $microserviceHost."products/list?apikey=".$microserviceApiKey;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);

        return response()->json([
            'status' => 'ok',
            'data' => $data
        ], 200);
    }
     public function list2()
    {


        $microserviceHost = Config::get('api.microservice_2');
        $microserviceApiKey = Config::get('api.microservice_2_api_key');
        $endpoint = $microserviceHost."products2/list2?apikey=".$microserviceApiKey;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);

        return response()->json([
            'status' => 'ok',
            'data' => $data,
        ], 200);
    }
}
