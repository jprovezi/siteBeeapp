<?php

use App\Http\Controllers\SiteController;
use App\Mail\contatoSite;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'main'])->name('home');
Route::get('/mensagem-enviada', [SiteController::class, 'mensagemForm']);
Route::post('/envio-form',[SiteController::class, 'formulario'])->name('post-form');

Route::get('teste-email', function(){
    $dados = [
        "nome" => "João",
        "email" => "jprovezi@gmail.com",
        "mensagem" => "Mensgem de teste aqui",
    ];
    return new contatoSite("jprovezi@gmail.com","João Provezi", $dados);
});