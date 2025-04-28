<?php

use Illuminate\Support\Facades\Route;



// Frontend routes
Route::get("/", \App\Livewire\Frontend\Home::class)->name("serp");
Route::get("/serp/{vin}", \App\Livewire\Frontend\SERP::class)->name("serp");

// Backend routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', \App\Livewire\Backend\Dashboard::class)->name('dashboard');
    Route::get("/dashboard/spareparts", \App\Livewire\Backend\SparePart::class)->name("spareparts");

    Route::get("/logout", function () {
       \Illuminate\Support\Facades\Auth::guard("web")->logout();
       return redirect("/login");
    })->name("logout");

});





