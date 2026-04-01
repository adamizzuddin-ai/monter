<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/collections', function () {
    return view('collections');
})->name('collections');

Route::get('/sale', function () {
    return view('sale');
})->name('sale');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/collections/tropica', function () {
    return view('tropica');
})->name('collections.tropica');

Route::get('/collections/fischer', function () {
    return view('fischer');
})->name('collections.fischer');

Route::get('/collections/monte', function () {
    return view('monte');
})->name('collections.monte');

Route::get('/collections/dune', function () {
    return view('dune');
})->name('collections.dune');

Route::get('/collections/bosque', function () {
    return view('bosque');
})->name('collections.bosque');

Route::match(['get', 'post'], '/admin0129383044', function (Request $request) {
    if ($request->isMethod('post')) {
        $email = $request->input('email');
        $password = $request->input('password');

        $adminEmail = env('ADMIN_EMAIL');
        $adminPassword = env('ADMIN_PASSWORD');

        if ($email === $adminEmail && $password === $adminPassword) {
            Session::put('is_admin_logged_in', true);
            return redirect('/admin0129383044/dashboard');
        }

        return back()->with('error', 'Invalid admin credentials.');
    }

    if (Session::get('is_admin_logged_in')) {
        return redirect('/admin0129383044/dashboard');
    }

    return view('admin.login');
})->name('admin.login');

Route::get('/admin0129383044/dashboard', function () {
    if (!Session::get('is_admin_logged_in')) {
        return redirect('/admin0129383044');
    }

    return view('admin.dashboard');
})->name('admin.dashboard');

Route::post('/admin0129383044/logout', function () {
    Session::forget('is_admin_logged_in');
    return redirect('/admin0129383044');
})->name('admin.logout');