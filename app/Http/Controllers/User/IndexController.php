<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Tools\Curl\Curl;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  //
  public function list()
  {
    $arr = [
      ["id"=>1,"name"=>"张三","age"=>12,"email"=>"zhangsan@ooxx.com"],
      ["id"=>2,"name"=>"李四","age"=>12,"email"=>"zhangsan@ooxx.com"],
      ["id"=>3,"name"=>"王五","age"=>12,"email"=>"zhangsan@ooxx.com"],
    ];
    return $this->apiResponse( $arr );
  }

  public function listWithOrder()
  {
    $users = [
      ["id"=>1,"name"=>"张三","age"=>12,"email"=>"zhangsan@ooxx.com"],
      ["id"=>2,"name"=>"李四","age"=>12,"email"=>"zhangsan@ooxx.com"],
      ["id"=>3,"name"=>"王五","age"=>12,"email"=>"zhangsan@ooxx.com"],
    ];

    $url = config('custom.env.ORDER_URL') . "/api/order/list";

    $orders = Curl::httpPost( $url );

    return $this->apiResponse( [
      'users' => $users,
      'orders' => $orders,
    ] );
  }

  public function detail()
  {
    $arr = [
      "id"=>1,"name"=>"张三","age"=>12,"email"=>"zhangsan@ooxx.com"
    ];

    return $this->apiResponse( $arr );
  }

  public function detailWithOrder()
  {
    $user = [
      "id"=>1,"name"=>"张三","age"=>12,"email"=>"zhangsan@ooxx.com"
    ];

    $url = config('custom.env.ORDER_URL') . "/api/order/detail";
    $order = Curl::httpPost( $url );

    return $this->apiResponse( [
      'user' => $user,
      'order' => $order,
    ] );
  }


}
