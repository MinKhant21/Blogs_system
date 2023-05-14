<?php

use Illuminate\Support\Facades\Route;

use App\Models\Blog;
Route::get('/', function () {
    // return 'ok';
    return view('blogs',[
        'blogs' => Blog::all()
    ]);
    // return view('blogs');
});

Route::get("/blogs/{blog}",function($slug) {
    // dd($slug);
    
    // dd($blog);
    return view('blog',[
        'blog' => Blog::find($slug)
    ]);
    // return view('blog');
})->where('blog','[A-z\d\-]+');