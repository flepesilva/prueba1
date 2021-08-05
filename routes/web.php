<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('login', 'login')->name('login')->middleware('guest');
Route::view('dashboard', 'dashboard')->middleware('auth');

Route::post('login', function(){
    
    $credentials = request()->only('email', 'password'); 

    $remember = request()->filled('remember');
    
    if(Auth::attempt($credentials, $remember)){
        request()->session()->regenerate();

        return redirect('dashboard');
    }
    return redirect('login');
    
});