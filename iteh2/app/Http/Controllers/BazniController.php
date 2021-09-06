<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BazniController extends Controller
{
   public function sendResponse($result,$message)
   {
       $response=[
           'success'=>true,
           'data'=>$result,
           'message'=>$message,
       ];
       return response()->JSON($response,200);
   }
   
}
