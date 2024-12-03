<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\PlanoController;
use Illuminate\Support\Facades\Route;

Route::get("/", [SiteController::class, "index"])-> name('home');
Route::get("/planos", [SiteController::class, "planos"])-> name('planos');
Route::get("/empresa", [SiteController::class, "sobreNos"])-> name('sobre-nos');

Route::get("/admin/planos", [PlanoController::class, "index"])-> name('index');
Route::get("/admin/planos/cadastrar", [PlanoController::class, "cadastrar"])-> name('cadastrar');
Route::get("/admin/planos/editar", [PlanoController::class, "editar"])-> name('editar');
Route::get("/admin/planos/visualizar", [PlanoController::class, "visualizar"])-> name('visualizar');