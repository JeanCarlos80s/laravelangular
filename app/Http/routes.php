<?php

Route::get('/', function () {
    //return view('welcome');
    $posts = DB::table('posts')
    	->join("users", "users.id", "=", "posts.user_id")
    	->select("users.name", "posts.title")
    	->get();

    return $posts;
});

use App\User;
use App\Post;
Route::get('/users_posts', function(){
	$users = User::all();

	foreach($users as $user){
		echo "<h1>{$user->name}</h2>";
		echo "<ul>";
		foreach($user->posts as $post){
			echo "<li>{$post->title}</li>";
		}
		echo "</ul>";
	}
});

Route::get('user/', 			'UserController@index');
Route::get('user/create', 		'UserController@create');
Route::post('user/', 			'UserController@store');
Route::get('user/{id}', 		'UserController@show');
Route::get('user/{id}/edit', 	'UserController@edit');
Route::put('user/{id}', 		'UserController@update');
Route::delete('user/{id}', 		'UserController@delete');
