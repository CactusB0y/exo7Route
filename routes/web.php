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

Route::get('/', function () {
    $fronts = [
        (object)["nom" => 'martin', 'fonction' => 'mon best', 'photo' => 'img/lol.jpg' ],
        (object)["nom" => 'marcelin', 'fonction' => 'bg', 'photo' => 'img/lol.jpg' ],
        (object)["nom" => 'albert', 'fonction' => 'tornade', 'photo' => 'img/lol.jpg' ],
        (object)["nom" => 'amir', 'fonction' => 'bg du bled', 'photo' => 'img/lol.jpg' ],
        (object)["nom" => 'assma', 'fonction' => 'a demain', 'photo' => 'img/lol.jpg' ],
    ];
    $backs = [
        (object)["nom" => 'jar jar', 'fonction' => 'inutile', 'photo' => 'img/lol.jpg' ],
        (object)["nom" => 'eren', 'fonction' => 'ouvre boite', 'photo' => 'img/lol.jpg' ],
        (object)["nom" => 'kakashi', 'fonction' => 'bakayaro', 'photo' => 'img/lol.jpg' ],
        (object)["nom" => 'yuamete kudasai', 'fonction' => 'pls senpai', 'photo' => 'img/lol.jpg' ]
    ];
    $i = 0;
    $o = 0;
    return view('welcome',compact('fronts','backs','i','o'));
});

Route::get('/info', function () {
    return view('infos/contact/info');
});

Route::get('/partenariat', function () {
    return view('infos/contact/partenariat');
});

Route::get('/sav', function () {
    return view('infos/contact/sav');
});

Route::get('/front', function () {
    $fronts = [
        (object)["nom" => 'martin', 'fonction' => 'mon best', 'photo' => 'img/lol.jpg' ],
        (object)["nom" => 'marcelin', 'fonction' => 'bg', 'photo' => 'img/lol.jpg' ],
        (object)["nom" => 'albert', 'fonction' => 'tornade', 'photo' => 'img/lol.jpg' ],
        (object)["nom" => 'amir', 'fonction' => 'bg du bled', 'photo' => 'img/lol.jpg' ],
        (object)["nom" => 'assma', 'fonction' => 'a demain', 'photo' => 'img/lol.jpg' ],
    ];
    return view('team/web/dev/frontend',compact('fronts'));
});

Route::get('/back', function () {
    $backs = [
        (object)["nom" => 'jar jar', 'fonction' => 'inutile', 'photo' => 'img/lol.jpg' ],
        (object)["nom" => 'eren', 'fonction' => 'ouvre boite', 'photo' => 'img/lol.jpg' ],
        (object)["nom" => 'kakashi', 'fonction' => 'bakayaro', 'photo' => 'img/lol.jpg' ],
        (object)["nom" => 'yuamete kudasai', 'fonction' => 'pls senpai', 'photo' => 'img/lol.jpg' ]
    ];
    return view('team/web/dev/backend',compact('backs'));
});
