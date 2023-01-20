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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Billy Stanly",
        "email" => "billystanly8899@gmail.com",
        "image" => "therock.jpg",
    ]);
});



Route::get('/blog', function (){ 
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            'author' => 'Billy',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum cupiditate amet asperiores facilis voluptates hic rerum sed excepturi perspiciatis debitis? Dolore in exercitationem id quo impedit, sequi sint reiciendis nulla laborum animi voluptas maxime temporibus ex dolor repellat magni minima aspernatur necessitatibus libero itaque? Id voluptatum laudantium, maiores laborum voluptate vitae reiciendis iusto aperiam, deleniti quae nostrum dolor perspiciatis, excepturi doloribus beatae eius ad nam laboriosam illum quasi impedit asperiores facilis. Quam, nulla. Fugit odio excepturi, totam iure exercitationem eveniet?'
        ],
        [
            "title" => "Judul Post Kedua",
            'author' => 'Stanly',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum cupiditate amet asperiores facilis voluptates hic rerum sed excepturi perspiciatis debitis? Dolore in exercitationem id quo impedit, sequi sint reiciendis nulla laborum animi voluptas maxime temporibus ex dolor repellat magni minima aspernatur necessitatibus libero itaque? Id voluptatum laudantium, maiores laborum voluptate vitae reiciendis iusto aperiam, deleniti quae nostrum dolor perspiciatis, excepturi doloribus beatae eius ad nam laboriosam illum quasi impedit asperiores facilis. Quam, nulla. Fugit odio excepturi, totam iure exercitationem eveniet?'
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        'posts' => $blog_posts
    ]);
});