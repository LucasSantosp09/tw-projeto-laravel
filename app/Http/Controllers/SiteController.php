<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function sobre()
    {
        $soma = 1+1;
        echo "Conteudo Dinamico Sobre $soma";
    }
    public function contato()
    {
        echo "Conteudo Dinamico Contato";
    }
    public function servicos()
    {
        echo "Conteudo Dinamico Serviços";
    }
    public function servico(int $id )
    {
        $servicos = [
            1 => [
                'nome' => 'Lavage de roupa',
                'descricao' => 'descricao muito longa'
            ],
            2 => [
                'nome' => 'Lavage de corberta',
                'descricao' => 'descricao muito longa'
            ],
            3 => [
                'nome' => 'Lavage de Urso',
                'descricao' => 'descricao muito longa'
            ]
            ];
    
        return view('site.servico',[
            'servico' => $servicos[$id],
            'outro' => 'treinaweb'
        ] );
    }
}
