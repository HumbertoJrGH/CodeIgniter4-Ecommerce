<?php

namespace App\Controllers;

use App\Models\Produto;

class Admin extends BaseController
{
    public function index(): string
    {
        $model = new Produto();
        $produtos = $model->findAll();

        return view('admin/index', ["produtos" => $produtos]);
    }

    public function buscar()
    {
        $termo = $this->request->getGet("q");

        $model = new Produto();
        $produtos = $model->like("nome", $termo)->findAll();

        return view("admin/index", ["produtos" => $produtos]);
    }
}
