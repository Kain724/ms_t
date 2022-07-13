<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

// Public routes
Route::get('/ping', function () {
    return 'pong';
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);





// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/products/list', [\App\Http\Controllers\Api\ProductController::class, 'list']);

    Route::get('/products2/list2', [\App\Http\Controllers\Api\ProductController::class, 'list2']);

    Route::post('/logout', [AuthController::class, 'logout']);

    // Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);

});

// Route::middleware('auth:sanctum')->get("/refresh", [AuthController::class, 'refresh']);
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
