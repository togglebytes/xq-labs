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

Route::statamic('search', 'blogs.search_blog', [
   'title' => 'Search Result'
]);

Route::statamic('posts', 'posts.index', ['title' => 'Posts']);
Route::statamic('blogs', 'blogs.index', ['title' => 'Blogs']);
Route::statamic('blog', 'blogs.blog', ['title' => 'Blogs']);

//Route::statamic('blogslist', 'blogs.list', ['title' => 'Blogs']);
Route::statamic('blogs/list', 'blogs.all_blogs_list', ['title' => 'Blogs']);

Route::statamic('categories/{slug}', 'blogs.list', ['title' => 'Blog']);

Route::statamic('site.webmanifest', 'partials._manifest', [
    'layout' => null,
    'content_type' => 'application/json'
]);

Route::statamic('/sitemap.xml', 'partials._sitemap', [
    'layout' => null
]);
