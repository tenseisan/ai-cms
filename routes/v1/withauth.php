<?php 

Route::group(['prefix' => 'manga', 'as' => 'manga.'], function () {
	Route::post('store', ['as' => 'store', 'uses' => 'MangaController@store']);
	Route::put('update', ['as' => 'update', 'uses' => 'MangaController@update']);
	Route::delete('delete', ['as' => 'delete', 'uses' => 'MangaController@delete']);
	Route::post('favorite', ['as' => 'favorite', 'uses' => 'MangaController@toggleFavorite']);
	Route::post('bookmark', ['as' => 'bookmark', 'uses' => 'MangaController@toggleBookmark']);
});

Route::get('lang/get/select', ['as' => 'lang.get.select', 'uses' => 'MangaController@lang']);
Route::get('category/get/select', ['as' => 'category.get.select', 'uses' => 'CategoryController@getSelect']);

Route::post('comment/store', ['as' => 'comment.store', 'uses' => 'CommentController@store']);

Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
	Route::get('/', ['as' => 'get', 'uses' => 'CategoryController@get']);
	Route::post('store', ['as' => 'store', 'uses' => 'CategoryController@store']);
	Route::put('update', ['as' => 'update', 'uses' => 'CategoryController@update']);
	Route::delete('delete', ['as' => 'delete', 'uses' => 'CategoryController@delete']);
});

Route::group(['prefix' => 'tag', 'as' => 'tag.'], function () {
	Route::get('/', ['as' => 'get', 'uses' => 'TagController@get']);
	Route::post('detail', ['as' => 'detail', 'uses' => 'TagController@edit']);
	Route::put('update', ['as' => 'update', 'uses' => 'TagController@update']);
	Route::get('get/select', ['as' => 'get.select', 'uses' => 'TagController@tags']);
	Route::post('store', ['as' => 'store', 'uses' => 'TagController@store']);
	Route::delete('delete', ['as' => 'delete', 'uses' => 'TagController@delete']);
});

Route::group(['prefix' => 'chapter', 'as' => 'chapter.'], function () {
	Route::get('/', ['as' => 'get', 'uses' => 'ChapterController@get']);
	Route::post('store', ['as' => 'store', 'uses' => 'ChapterController@store']);
	Route::post('update', ['as' => 'update', 'uses' => 'ChapterController@update']);
	Route::post('order', ['as' => 'order', 'uses' => 'ChapterController@order']);
	Route::delete('delete', ['as' => 'delete', 'uses' => 'ChapterController@delete']);
	Route::get('pages/{chapter_id?}', ['as' => 'pages', 'uses' => 'PageController@getPages']);
});

Route::group(['prefix' => 'page', 'as' => 'page.'], function () {
	Route::delete('delete', ['as' => 'delete', 'uses' => 'PageController@delete']);
	Route::post('move', ['as' => 'move', 'uses' => 'PageController@move']);
});

Route::group(['prefix' => 'download', 'as' => 'download.'], function () {
	Route::post('/', ['uses' => 'DownloadController@download', 'as' => 'download']);
	Route::post('list', ['uses' => 'DownloadController@listPage', 'as' => 'download.list']);
});

Route::group(['prefix' => 'upload', 'as' => 'upload.'], function () {
	Route::post('page', ['uses' => 'UploadController@page', 'as' => 'page']);
});

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
	Route::post('profile/store', ['uses' => 'UserController@profileStore', 'as' => 'profile.store']);
	Route::post('setting/store', ['uses' => 'UserController@settingStore', 'as' => 'setting.store']);
});
