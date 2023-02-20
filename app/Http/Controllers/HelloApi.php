<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 class HelloApi extends Controller
{
     public function hello($name){

        return response()->json('hello controller '. $name );
   }
}
