<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class MakeController extends Controller
{

    /******************************************* how to return view by controller ****************************/

     public function custumers (){
         $Custumers = ['one' => 'tohami' , 'tow' => 'gn' , 'three' => 'aldaw'];
    return view('welcome',compact('Custumers')) ;
}
}
