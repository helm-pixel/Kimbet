<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/', [AdminController::class, 'home']);

route::get('/home', [AdminController::class, 'index'])->name('home');

route::get('create_room', [AdminController::class, 'create_room']);

route::post('/add_room', [AdminController::class, 'add_room']);

route::get('/view_room', [AdminController::class, 'view_room']);

route::get('/room_delete/{id}', [AdminController::class, 'room_delete']);

route::get('/room_update/{id}', [AdminController::class, 'room_update']);

route::post('/edit_room/{id}', [AdminController::class, 'edit_room']);

route::get('/room_details/{id}', [HomeController::class, 'room_details']);

route::post('/add_booking/{id}', [HomeController::class, 'add_booking']);