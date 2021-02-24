<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Article;
use App\Category;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

    Route::get('articles', 'API\BlogController@articles');

    Route::get('categories', 'API\BlogController@categories');

    Route::get('tags', 'API\BlogController@tags');

