<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*


Route::get('/hello', function ( ){
    return response('<h1> welcome</h1>')
    ->header('Content-type','text/plain')
    ->header('foo','bar');
    ;
});


Route::get('/post/{id}', function($id){
    ddd($id);
    return response('post' .$id );
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request){
   return  $request->name;
});
*/


Route::get('/', function () {
    return view('listings', [
        'header'=> 'latest listing',
        'listings' =>Listing::all(),
    ]);
});

Route::get('/listings/{id}', function($id){
    return view('listing', [
        'listing' => Listing::find($id),
    ]);
});