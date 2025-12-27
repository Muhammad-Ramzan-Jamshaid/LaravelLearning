<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});
//in this an id is displayed and store in $value variable ,for option we add ? with id , also we can add more than one parameter
// Route::get('/post/{id?}/comment/{comment}', function ( $value = null , $comment){
//     if($value){
//         return "<h1> post id is =" .$value. "</h1><textarea>".$comment."</textarea>";

//     }
//     else{
//         return '<h1> ID is not found </h1>';
//     }
// });

// Route::get('/contact/{id}',function($id = null){
//  if($id){
//     return "<h1>".$id."</h1>";
//  }else{
//     return "Not fund";
//  }
// })->where('id','[@0-9]+');

//whereNumber('$parameter');
//whereAlpha('$paramenter);
//WhereAlphaNumaric('$parameter')

Route::redirect('/about','/');
