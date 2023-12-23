<?php

use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $builder = new CaptchaBuilder();

    $builder->build();

    $captchaPath = $builder->inline();

    $imageBase = base64_encode(QrCode::format('png')->merge(public_path('logoku.jpg'), 0.3, true)->size(150)->errorCorrection('H')->generate('from Rochmad'));

    return view('welcome', compact('captchaPath', 'imageBase'));
});
