<?php

namespace App\Models;
use CodeIgniter\Model;

class Produto extends Model
{
	protected $table = "produtos";
	protected $dbGroup = "ecommerce";
	protected $allowedFields = [
		'nome',
		'descricao',
		'preco',
		'imagem',
	];
}