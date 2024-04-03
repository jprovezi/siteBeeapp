<?php

use App\Http\Controllers\SiteController;
use App\Mail\contatoSite;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'main'])->name('home');
Route::post('/envio-form',[SiteController::class, 'formulario'])->name('envio-form');

Route::get('teste-email', function(){
    $dados = [
        "nome" => "João",
        "email" => "jprovezi@gmail.com",
        "mensagem" => "Mensgem de teste aqui",
    ];
    return new contatoSite("jprovezi@gmail.com",$dados);
});

route::get('mensagem-enviada', function(){
    return view('site.mensagemEnviada');
})->name('mensagem-enviada');