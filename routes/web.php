<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    $nama = "Dhani Kusuma Wardana Putra";
    // $data = "Dhani Kusuma Wardana Putra";
    $umur = 19;
    return view('about', ["data" => $nama, "umur" => $umur]);
    // return view ('about', compact('data', 'umur'));
    // return view('about')
    // ->with('data','Dhani Kusuma')
    // ->with('umur','19');
});

Route::get('/siswa', function() {
    $data = [
        ["nama" => "Dhani", "umur" => 19, "id" => "01"],
        ["nama" => "riski", "umur" => 21, "id" => "02"],
        ["nama" => "budi", "umur" => 13, "id" => "03"]
    ];
    return view('siswa.index', ["data" => $data]);
});

Route::get('/siswa/{id}', function($id) {
    // dd($id);
    return view('siswa.show', ['id' => $id]);
});

Route::get('/contact', function() {
    return view('contact');
});