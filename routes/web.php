<?php

/**
 * プログラム名		：web.php
 * プログラム説明	：contactappのルート情報を記載しているプログラム
 * 作成日時			：2023/1/14
 * 作成者			：大木
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ContactListController;
use App\Http\Controllers\ContactDetailController;

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
    return view('contactForm');
});

// お問い合わせ登録用ルート
Route::get('/sendContact', function () {
    return redirect('/');
});
Route::post('/sendContact', [ContactFormController::class, 'create']);

// お礼画面のレイアウト調整用のルート、最終的には消す
Route::get('/kari', function () {
    return view('/sendSuccessfully');
});

// お問い合わせ一覧用ルート
Route::get('/contactList', [ContactListController::class, 'index']);

// お問い合わせ詳細用ルート
Route::get('/contactDetail', [ContactDetailController::class, 'index']);
