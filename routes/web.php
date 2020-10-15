<?php

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

use App\Http\Controllers\Controller;

Route::get('/', function () {
 return view('welcome')->with(['name' => 'Tohami' , 'age' => 25]);

});

/*
Route::get('/test1', function () {
    return "hello in test 1";
});
/***********************************  normal route *************************************

route::get('normal',function(){
    return "this is normal route";
});

/*********************************** route with requared parmetrs *************************************


route::get('prametrs/{id}',function( ){
return "hello in route with parametrs";

});

/*********************************** route with optional parmetrs *************************************


route::get('prametrs/{id?}',function( ){
    return "hello in route with  optional Hparametrs";

});
/*********************************** route name *************************************

route::get('facebook',function(){
    return "hello in facebook page";
})->name('fa');

/************************************ROUTE namespace*********************************

route::namespace('Front')->group(function(){
    //////////////// all route just access to the methodes in controller in file front///////////
    route::get('getname','GtextController@showname');
});


/******************userote name space************************************************************


route::namespace('Tohami')->group(function(){
  route::get('tohami','TohamiController@Welcome') ;
});

/************************how to use middleware***********************************************
route::get('middleware',function (){
    return "you are use middleware";
})/********  ->middleware('auth)**************




/******************how to use group ['prefix' , 'namesace' , 'middleware']********************

route::group(['prefix'=>'peerfix','namespace' => 'Tohami','middleware' => 'auth'],function(){
    route::get('name','TohamiController@Welcome');
});
route::get('showcontroller','showcontroller@show');

/********************************how to make route resourses **************************

route::resource('information','info');

//php artisan make:controller info --resource
//php artisan route:list   => to start work of your routs



//in controolers files or directory the first litter must be captile

/***************************** use laravel roject in another port ****************************

//*in  terminal php artisan serv --port 8001

route::get('returnview','MakeController@make');

/*
class MakeController extends Controller
{

    /******************************************* how to return view by controller ****************************

    public function make (){
        return view('welcome');
    }


}

*

/*******************************************how to pass data to view ***************************************

route::get('landing',function (){
   return view('Front/landing');
});



/*******************************************how to pass multidata to view ****************************************/

route::get('data',function (){
    return view('welcome') -> with(['name'=>'hammed' , 'age' => 25]);
});
/*

/*******************************************how to pass multidata to view by array ************************************

route::get('multipramarray',function (){
    $data['name'] = 'tohami';
    $data['age'] = 30;
    return view('welcome',$data) ;
});


/*************************************** how to use multi langs **********************************************

//make multi files langs

//in your vewi  =>  <h1>{{__("masseges.WELCOME")}}</h1>




/*********************************8 how to cut and make parts for your project ****************************
route::get('master',function (){
    return view('Front/master') ;
});
//@extends('Front.footer')
//
//@extends('Front.header')

/************************************* if conditions)*****************************************************/

/*
 @if($name == 'tohami')
          <p>yes this is right</p>
  @else
           <p>no this is right</p>

  @endif

*/
/*******************************************foreach *************************************************/

/*
route::get('custumers','MakeController@custumers');


public function custumers (){
    $Custumers = ['one' => 'tohami' , 'tow' => 'gn' , 'three' => 'aldaw'];
    return view('welcome',compact('Custumers')) ;


@foreach($Custumers as $custm)
    <h4>{{$custm}} </h4>

@endforeach

*/

/***************************************** if else if ***********************************************/

/*
 @if($name == 'ahmed')
           <p>{{yes it is ahmed}}</p>
@elseif($name =='gn')
             <p>{{ yes it is gn }}</p>
@else
               <p>{{ name is rong }} </p>
@endif
 */
/****************************************** make database table by terminal **************************/
 // C:\wamp64\www\starter>php artisan migrate



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home') -> middleware('verified');
/***********************  npm install && npm run **************************************/

