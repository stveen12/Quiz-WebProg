<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WriterController;

Route::get('/', [ArticleController::class, 'home'])->name('home');
Route::get('/data-science', [ArticleController::class, 'showDataScienceArticles'])->name('data_science');
Route::get('/network-security', [ArticleController::class, 'showNetworkSecurityArticles'])->name('network_security');
Route::get('/article/{id}', [ArticleController::class, 'showArticleDetail'])->name('article_detail');
Route::get('/writers', [WriterController::class, 'showWriters'])->name('writers');
Route::get('/writer/{id}/articles', [ArticleController::class, 'showWriterArticles'])->name('writer_articles');
Route::get('/about', function () {return view('other/about');})->name('about');
Route::get('/popular', [ArticleController::class, 'showPopularArticles'])->name('popular');