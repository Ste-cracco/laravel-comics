<?php

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

Route::get('/', function () {
    $data = [
        'products' => config('comics')
    ];
    return view('home', $data);
});

Route::get('/comics', function () {
    $data = [
        'products' => config('comics')
    ];
    return view('comics.index', $data);
});

Route::get('/comics/singlecomic/{id}', function ($id) {
    $comics = config('comics');

    if($id < count($comics)) {
        $comic = $comics[$id];
        $data = [
            'comic' => $comic
        ];
    return view('comics.show', $data);
    }
    else {
        abort(404); // Stampa pagina 404 
    }
    
})->where('id','[0-9]+');
