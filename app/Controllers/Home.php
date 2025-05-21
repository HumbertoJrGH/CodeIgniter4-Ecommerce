<?php

namespace App\Controllers;

use App\Models\Produto;

class Home extends BaseController
{
    public function index(): string
    {
        $produtos = [];
        try {
            $model = new Produto();
            $produtos = $model->findAll();
        } catch (\Exception $e) {
            // Log the error message
            exit($e->getMessage());
            // log_message('error', 'Error fetching products: ' . $e->getMessage());
        }
        $data = [
            "nome" => "Usuário",
            "produtos" => $produtos
        ];
        return view('home', $data);
    }

    public function buscar()
    {
        $termo = $this->request->getGet("q");

        $model = new Produto();
        $produtos = $model->like("nome", $termo)->findAll();

        return view("home", ["produtos" => $produtos]);
    }
}
