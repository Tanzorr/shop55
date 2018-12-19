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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test',function(){
    $cart = new Darryldecode\Cart\Cart(23);
 dd($cart);

});

Route::get('cart', 'cartController@index');
Route::get('cart/add/{id}', 'cartController@addItem');

Route::view('/','front.index');
Auth::routes();

Route::view('products','front.products',['data'=>App\products::with('cats')->get(),'catByUser'=>'All Products']);

Route::get('products/{cat}','ProductsController@proCat');

Route::get('search', 'ProductsController@search');

Route::get('productsCat', 'ProductsController@productsCat');
//start inbox
Route::view('inbox', 'myaccount.inbox', [
    'data' => App\inbox::all()
]);

//update inbox
Route::get('updateInbox','profilleController@updateInbox');

//user middleware
 Route::group(['middleware'=>'auth'],function(){
     Route::view('myaccount','myaccaunt.index');
 });


Route::get('/home', 'HomeController@index')->name('home');

//admin middleware start
Route::group(['prefix' => 'admin', 'middleware'=> ['auth' => 'admin']], function () {

    Route::get('/','AdminController@index');
    Route::get('profile','AdminController@profile');
    Route::get('/addProduct','AdminController@addProduct');
    Route::post('/saveProduct','AdminController@saveProduct');

    Route::view('products', 'admin.products', [
        'data' => App\products::with('cats')->get()
    ]);

    //edit product
    Route::get('editProduct/{id}', function ($id){
        return view('admin.editProduct',[
            'data'=> App\products::where('id',$id)->get()
        ]);
    });

    //cahange image
    Route::view('/changeImage/{id}','admin.changeImage');
    Route::post('/uploadPP','AdminController@uploadPP');

    //category

    Route::view('addCategory','admin.addCategory');
    Route::view('cats','admin.cats',['data'=>App\Cats::all()]);

    Route::post('saveCategory','AdminController@saveCategory');

    Route::view('users','admin.users',[
        'data'=> App\User::all()
    ]);

    Route::get('banUser','AdminController@banUser');

});
