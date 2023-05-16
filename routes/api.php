<?php

use App\Modules\Invoices\Infrastructure\Model\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Infrastructure\Http\Controllers\Api\InvoiceController;
use App\Infrastructure\Http\Controllers\Api\ApprovalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::put('/invoices/{invoice:number}/approve', [ApprovalController::class, 'approve']);
Route::put('/invoices/{invoice:number}/reject', [ApprovalController::class, 'reject']);

Route::get('invoices', [InvoiceController::class,'index']);
