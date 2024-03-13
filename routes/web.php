<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/beranda', function () {
    return view('coy');
});
Route::get('/post.html', function () {
    return view('post');
});
Route::get('/about.html', function () {
    return view('about');
});
Route::get('/contact.html', function () {
    return view('contact');
});
// Route::get('/', function () {
//     return view('articles');
// });
// Route::get('articles/{article}', function ($slug)) {
//     $path = __DIR__ . . "/../resources/articles/{$slug}.html";

//     $article = file_get_contents($path);

//     return view('article',[
//         'article'=>$article
//     ]);
// };
