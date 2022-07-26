<?php

use App\Tools\Curl\Curl;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return "<h1'>用户体系</h1>";
});


Route::get('/test', function () {
  $url = config('custom.env.ORDER_URL') . "/api/order/list";

  $result = Curl::httpPost( $url );

  echo "<pre>";
  print_r( $result );

});

