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
    $category = App\Category::all();
    $page = App\Page::all();

    return view('welcome', compact('page', 'category'));
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('category/{Category_id}','CategoryController@getCategory')->name('categories.show');


Route::get('page/{slug}', function ($slug){
    $page = App\Page::where('slug', '=', $slug)->firstOrFail();
    return view('page', compact('page'));
});

Route::get('item/{slug}', function ($slug){
    $item = App\Post::where('slug', '=', $slug)->firstOrFail();
    return view('item', compact('item'));
}
);
