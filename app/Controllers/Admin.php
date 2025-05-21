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

    public function inserir()
    {
        $produtoModel = new Produto();

        $data = $this->request->getPost([
            'nome',
            'descricao',
            'preco',
            'variacao',
        ]);

        if ($produtoModel->insert($data)) {
            return redirect()->to('/admin')->with('success', 'Produto cadastrado com sucesso!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Erro ao salvar.');
        }
    }
}
