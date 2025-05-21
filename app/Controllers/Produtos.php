<?php

namespace App\Controllers;

use App\Models\Produto;
use CodeIgniter\Controller;

class Produtos extends BaseController
{
	public function index()
	{
		$produtoModel = new Produto();
		$dados['produtos'] = $produtoModel->findAll();

		return view('produtos/index', $dados);
	}

	public function inserir()
	{
		$produtoModel = new Produto();

		$data = $this->request->getPost([
			'nome',
			'descricao',
			'preco',
		]);

		if ($produtoModel->insert($data)) {
			return redirect()->to('/produtos')->with('success', 'Produto cadastrado com sucesso!');
		} else {
			return redirect()->back()->withInput()->with('error', 'Erro ao salvar.');
		}
	}
}
