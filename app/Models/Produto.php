<?php

namespace App\Models;
use CodeIgniter\Model;

class Produto extends Model
{
	protected $table = "produto";
	protected $dbGroup = "ecommerce";
	protected $allowedFields = [
		'nome',
		'descrição',
		'preço',
		'variação',
	];
}