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

use PhpParser\Node\Stmt\Return_;

Route::get('/', function () {
  $helloWorld = 'Hello World';

  return view('welcome',['helloWorld' => $helloWorld]);
});

Route::get('/model', function () {
  
//  $products = \App\Product::all();
//  return $products; 

// $user = new \App\User();
// $user->name = 'Usuario teste';
// $user->email='email@teste.com';
// $user->password = bcrypt('12345678');
// $user->save();

  
// return \App\User::all(); -- RETORNA TODOS OS USUARIOS
// return \App\User::find(3);--RETORNA O USUARIO COM BASE NO ID
// return \App\User::where('name','Kenny Gaylord')->get();
// return \App\User::where('name','Kenny Gaylord')->first();
// return \App\User::paginate(10); --paginar dados

  
    //Mass Assignment - Atribuição em Massa

//  $user = \App\User::create([
//    'name' => 'Jhones Gasparini',
//    'email' => 'email12121@email.com',
//   'password' => bcrypt('12345678')
//  ]);
  

    //Mass Update
// $user = \App\User::find(42);
// $user->update([
//   'name' => 'Atualizando com  Mass Update'
// ]); //Retorna TRUE OR FALSE

  return \App\User::all();

});
