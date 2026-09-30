<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

Route::get('/', fn()=>view('welcome'));
Route::get('/api/invoices',[InvoiceController::class,'index']);
Route::post('/api/invoices',[InvoiceController::class,'store']);
Route::patch('/api/invoices/{invoice}',[InvoiceController::class,'update']);
