<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'nome' => 'Humberto',
            "produtos" => [
                [
                    "nome" => "Camisa", 
                    "descricao" => "Descrição longa do produto para tentar provocar quebra de linha e colocarmos um \"ellipsis\" no bloco necessário com hover com o texto completo para o cliente.",
                    "preco" => 50.00,
                    "variacao" => "Vermelha",
                ],
                [
                    "nome" => "Camisa", 
                    "descricao" => "Descrição do Produto",
                    "preco" => 50.00,
                    "variacao" => "Azul",
                ],
                [
                    "nome" => "Camisa", 
                    "descricao" => "Descrição do Produto",
                    "preco" => 50.00,
                    "variacao" => "Verde",
                ],
                [
                    "nome" => "Camisa", 
                    "descricao" => "Descrição do Produto",
                    "preco" => 50.00,
                    "variacao" => "Roxa",
                ],
                [
                    "nome" => "Camisa", 
                    "descricao" => "Descrição do Produto",
                    "preco" => 50.00,
                    "variacao" => "Branca",
                ],
                [
                    "nome" => "Camisa", 
                    "descricao" => "Descrição do Produto",
                    "preco" => 50.00,
                    "variacao" => "Preta",
                ],
            ],
        ];
        return view('home', $data);
    }
}
