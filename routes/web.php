<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfumeController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/datas", [PerfumeController::class, "insertPerfunes"]);
Route::get( "/", [ PerfumeController::class, "getPerfumes" ]);
Route::get( "/new-perfume", [ PerfumeController::class, "newPerfume" ]);
Route::post( "/add-perfume", [ PerfumeController::class, "storePerfume" ]);
Route::get( "/edit-perfume/{id}", [ PerfumeController::class, "editPerfume" ]);
Route::post( "/update-perfume", [ PerfumeController::class, "updatePerfume" ]);
Route::get( "/delete-perfume/{id}", [ PerfumeController::class, "deletePerfume" ]);
