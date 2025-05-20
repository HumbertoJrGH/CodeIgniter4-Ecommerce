<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\RawSql;

class DatabaseTest extends BaseController
{
	public function index()
	{
		try {
			$db = \Config\Database::connect();
			$algo = $db->query("SELECT * FROM ecommerce.produtos;");
			return view("manage_main");
		} catch (\Exception $e) {
			echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
		}
	}
}
