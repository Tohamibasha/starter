<?php

namespace App\Http\Controllers\Tohami;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class TohamiController extends Controller
{

   public function Welcome(){
     return "welcome Controllers hello lap lap lap";
   }
}
