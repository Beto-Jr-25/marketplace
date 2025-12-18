<?php

use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;

// Rota do vendedor
route::get('vendor/dashboard', [VendorController::class, 'dashboard'])
->middleware(['auth', 'vendor'])
->name('vendor.dashboard');
