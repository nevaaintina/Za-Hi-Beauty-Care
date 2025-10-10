<?php

use App\Models\Pricelist; 
Route::get('/', function () {
    $pricelists = Pricelist::all(); 
    
    return view('homepage', compact('pricelists'));
});