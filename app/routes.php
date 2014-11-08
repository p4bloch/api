<?php

Route::resource('posts', 'PostsController');
Route::resource('authors', 'AuthorsController');
Route::resource('posts.comments', 'PostCommentController');

Route::resource('posts.author', 'PostAuthorController');
Route::resource('authors.posts', 'AuthorPostController');