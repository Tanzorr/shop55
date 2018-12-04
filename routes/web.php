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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin middleware start
Route::group(['prefix' => 'admin', 'middleware'=> ['auth' => 'admin']], function () {

    Route::get('/','AdminController@index');
    Route::get('profile','AdminController@profile');
    Route::get('/addProduct','AdminController@addProduct');
    Route::post('/saveProduct','AdminController@saveProduct');

    Route::view('products','admin.products',[
        'data'=> App\products::all()
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

});