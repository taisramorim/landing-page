<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        // Aqui você pode processar o envio, como enviar um email ou salvar em um banco de dados
        return back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
