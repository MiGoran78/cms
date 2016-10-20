<?php

use App\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::resource('posts','PostController@show');
//Route::resource('/contact','PostController@contact');


//Route::get('/post/{id}', 'PostController@index');



//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/about', function () {
//    return "About";
//});
//
//
//Route::get('/post/{id}', function ($id) {
//    return "id = " . $id;
//});
//
//
//
//
//Route::get('admin/posts/example', ['as' => 'admin.home', function () {
//    $url = route('admin.home');
//    return "url: ".$url;
//}]);


//DATABASE Raw SQL Queries
//Route::get('/insert', function(){
//    DB::insert('insert into posts(title, content) value(?, ?)', ['Laravel is awsome...', 'Laravel content...']);
//});


//Route::get('/read', function() {
//
//    $results = DB::select('select * from posts where id=?', [1]);
//
//    return var_dump($results);
//
////    foreach ($results as $post) {
////       return $post->title;
////    }
//});


//Route::get('/update', function(){
//
//    $updated = DB::update('update posts set title = "Update title" where id = ?', [1]);
//    return $updated;
//});


//Route::get('/delete', function (){
//    $deleted = DB::delete('delete from posts where id = ?', [1]);
//    return $deleted;
//});




//-----------------------
// ELOQUENT
//-----------------------

//Route::get('/read', function (){
//
//    $posts = Post::all();
//
//    foreach ($posts as $post) {
//        return $post->title;
//    }
//
//});


//Route::get('/find', function (){
//
//    $post = Post::find(2);
//
//    return $post->title;
//});



//Route::get('/findwhere', function(){
//
//    $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
//    return  $posts;
//});


//Route::get('/findmore', function(){
//
////    $posts = Post::findOrFail(1);
////    return $posts;
//
//    $posts = Post::where('users_count', '<', 50)->firstOrFail();
//    return $posts;
//});



Route::get('/basicinsert', function(){

    $post = new Post;

    $post->title = 'new Eloquent inserttitle';
    $post->content = 'new Eloquent content';

    $post->save();
});


//Route::get('/basicinsert2', function(){
//
//    $post = Post::find(2);
//
//    $post->title = 'new Eloquent insert title 2';
//    $post->content = 'new Eloquent content 2';
//
//    $post->save();
//});



Route::get('/create', function(){

    Post::create(['title'=>'create method', 'content'=>'something...']);
});



//Route::get('/update',function(){
//
//    Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content'=>'new content']);
//
//});



Route::get('/delete', function(){

    $post = Post::find(4);
    $post->delete();
});



//Route::get('/delete2', function(){
//
//    //Post::destroy(3);
//    Post::destroy([4,5]);
//    Post::where('is_admin', 0)->delete();
//});


//Route::get('/softDelete', function(){
//
//    Post::find(2)->delete();
//});



//Route::get('/readSoftDelete', function(){
//
////    $post = Post::find(12);
////    return $post;
////
////    $post = Post::withTrashed()->where('id',1)->get();
////    return $post;
//
//    $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//
//});



//Route::get('/restore', function(){
//
//    Post::withTrashed()->where('is_admin',0)->restore();
//});



Route::get('/forcedelete', function(){

    Post::onlyTrashed()->where('is_admin',1)->forceDelete();
    
});



