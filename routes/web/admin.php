<?php

use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Route;

// Rota do adminstrdor
route::get('admin/dashboard', [AdminController::class, 'dashboard'])
->middleware(['auth', 'admin'])
->name('admin.dashboard');
