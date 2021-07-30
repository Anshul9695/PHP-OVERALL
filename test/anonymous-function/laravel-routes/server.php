<?php
require_once __DIR__.'/router.php';
Route::get('/home',function(){
	return "welcome to Home page";
});
Route::get('home',function(){
	return "welcome to Home page";
});

Route::get('about',function(){
	return "welcome to About page";
});
?>