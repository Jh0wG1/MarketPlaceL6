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

use App\Store;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

use function PHPUnit\Framework\returnSelf;

// Route::get('/', function () {
//   $helloWorld = 'Hello World';

//   return view('welcome',['helloWorld' => $helloWorld]);
// });

// Route::get('/model', function () {  
//   //  $products = \App\Product::all();
//   //  return $products; 

//   // $user = new \App\User();
//   // $user->name = 'Usuario teste';
//   // $user->email='email@teste.com';
//   // $user->password = bcrypt('12345678');
//   // $user->save();

    
//   // return \App\User::all(); -- RETORNA TODOS OS USUARIOS
//   // return \App\User::find(3);--RETORNA O USUARIO COM BASE NO ID
//   // return \App\User::where('name','Kenny Gaylord')->get();
//   // return \App\User::where('name','Kenny Gaylord')->first();
//   // return \App\User::paginate(10); --paginar dados

    
//       //Mass Assignment - Atribuição em Massa

//   //  $user = \App\User::create([
//   //    'name' => 'Jhones Gasparini',
//   //    'email' => 'email12121@email.com',
//   //   'password' => bcrypt('12345678')
//   //  ]);
  

//   //Mass Update
//   // $user = \App\User::find(42);
//   // $user->update([
//   //   'name' => 'Atualizando com  Mass Update'
//   // ]); //Retorna TRUE OR FALSE
  
//   // $user= \App\User::find(4); //busca as informações do user 
//   // return $user->store;

//   // $loja = \App\Store::find(2);
//   // return $loja->product; //Como Atributo
//   // return $loja->products()->where('id',2)->get(); //Como Método

//   //Pegar os produtos de uma categoria
//   // $categoria = \App\Category::find(1);
//   // return $categoria->products;

//   //Criar uma Loja para um Usuário
//   // $user = \App\User::find(10);
//   // $store = $user->store()->create([
//   //     'name' => 'Loja Teste',
//   //     'description' => 'Loja teste de produtos de informatica',
//   //     'mobile_phone' =>'XX-XXXXX-XXXX',
//   //     'mobile_phone' =>'XX-XXXXX-XXXX',
//   //     'slug' => 'notebook-acer',
//   // ]);


//   //Criar um produto para uma loja
//   // $store = \App\Store::find(10);
//   // $products = $store->products()->create([
//   //     'name' =>'Notebook Acer',
//   //     'description'=>'Amd ryzen 9 5600x, 12gb de ram ddr4',
//   //     'body' => 'Qualquer coisa',
//   //     'price' => 4000,
//   //     'slug' => 'notebook-acer',
//   // ]);

//   //Criar uma categoria
//     // \App\Category::create([
//     //   'name' => 'Gamer',
//     //   'description' => 'null',
//     //   'slug' => 'games',
//     // ]);

//     // \App\Category::create([
//     //   'name' => 'Notebooks',
//     //   'description' => 'null',
//     //   'slug' => 'games',
//     // ]);

//     // return \App\Category::all();

//   //Adicionar um Produto para uma categoria ou vice-versa
//   // $product= \App\Product::find(40);
//   // dd($product->categories()->attach([1])); //ADICIONA
//   // dd($product->categories()->detach([1])); //REMOVE
//   // dd($product->categories()->sync([1,2])); 

//   return \App\User::all();

// });



Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){
  
  Route::prefix('stores')->name('stores.')->group(function(){
      
      Route::get('/','StoreController@index')->name('index');
      Route::get('/create','StoreController@create')->name('create');
      Route::post('/store','StoreController@store')->name('store');
      Route::get('/{store}/edit','StoreController@edit')->name('edit');
      Route::post('/update/{store}','StoreController@update')->name('update');
      Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');

  });


  Route::resource('products', 'ProductsController');
  
});

