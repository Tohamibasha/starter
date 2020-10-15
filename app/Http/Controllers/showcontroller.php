<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showcontroller extends Controller
{
    /***********************hoe to use middleware for muli controllers*****************************************/
    public function __construct() {

        $this ->  middleware('auth')->except('show');
    }
    public function show (){
        return "show string";
    }
}
