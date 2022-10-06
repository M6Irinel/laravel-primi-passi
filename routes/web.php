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
    $data = [
        'saluto' => 'Hello World',
        'titolo' => 'Lezione di',
        'date' => '10/06/2022',
        'professori' => [
            'Mauro Famoso',
            'Anna Pasqua'
        ],
        'students' => [
            'Laura Verdi',
            'Carlo Maroni',
            'Marco Rossi',
            'Paolo Gialli',
            'Marta Rosa',
            'Giacomo Caro',
            'Lucia Bella',
            'Viorel Pignolo',
            'Lisa Tasti',
            'Irina Flora'
        ]
    ];
    return view('home', $data);
});
