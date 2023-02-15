<?php

use App\Http\Controllers\Admins\RoomController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Ajax Routes
|--------------------------------------------------------------------------
 */

Route::get('admin/rooms/create/ajax/{id}', [RoomController::class, 'getFloors']);