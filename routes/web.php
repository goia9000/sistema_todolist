<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\PlanoController;
use Illuminate\Support\Facades\Route;

Route::get("/", [SiteController::class, "index"])-> name('home');
Route::get("/planos", [SiteController::class, "planos"])-> name('planos');
Route::get("/empresa", [SiteController::class, "sobreNos"])-> name('sobre-nos');

Route::get("/admin/planos", [PlanoController::class, "index"])-> name('planos.index');
Route::get("/admin/planos/cadastrar", [PlanoController::class, "cadastrar"])-> name('planos.cadastrar');
Route::get("/admin/planos/editar", [PlanoController::class, "editar"])-> name('planos.editar');
Route::get("/admin/planos/visualizar/{id}", [PlanoController::class, "visualizar"])-> name('planos.visualizar');
Route::post("/admin/planos/salvarCadastro", [PlanoController::class,"salvarCadastro"])->name('planos.salvarCadastro');