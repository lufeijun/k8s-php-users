<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
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

  public function detail()
  {
    $arr = [
      "id"=>1,"name"=>"张三","age"=>12,"email"=>"zhangsan@ooxx.com"
    ];

    return $this->apiResponse( $arr );
  }


}
