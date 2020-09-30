<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
// Use Request de nhan du lieu gui len theo kieu Request
use Illuminate\Http\Request;

// use DB;


// Cach 2:
Route::view('/students/detail-2', 'students.detail');

Route::get('/student-list', function () {
    // Truy van lay danh sach student bang query builder
    $students = DB::table('students')->orderBy('id', 'desc')->get();

    return view('students.list', [
        'students' => $students,
        'error' => null,
    ]);
})->name('student-list');

// Chuc nang login + route POST
Route::get('/login', function () {
    return view('login');
})->name('get-login');

Route::post('/post-login', function (Request $request) {
    // su dung $request->all() hoac $request->input name
    $username = $request->username;

    // Thuc hien truy van theo gia tri vua gui len
    $student = DB::table('students')
        ->where('name', 'like', "%$username%")
        ->first();

    // Neu co student thi se redirect sang student-list
    if ($student) {
        return redirect()->route('student-list');
    }
    // Neu khong thi quay lai man login
    return redirect()->route('get-login');
})->name('post-login');
