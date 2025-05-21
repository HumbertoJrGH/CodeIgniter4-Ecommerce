<?= $this->extend('layout') ?>

<?= $this->section('title') ?>
Bem vindo!
<?= $this->endSection() ?>

<?= $this->section('aside') ?>
<a href="<?= base_url('admin') ?>"
	class="px-4 cursor-pointer py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
	Entrar como administrador
</a>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div>
	<div class="p-4 m-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
		<span class="font-medium"><?= count($produtos) ?> produtos encontrados!</span> Crie novos produtos acessando <a href="admin" class="text-bold font-vold">aqui</a>.
	</div>
	<div class="grid grid-cols-5 gap-4 p-8">
		<?php foreach ($produtos as $produto): ?>
			<?= view('partials/product_card', [
				'nome' => $produto['nome'],
				'descricao' => $produto['descrição'],
				'preco' => $produto['preço'],
				'variacao' => $produto['variação'],
			]) ?>
		<?php endforeach; ?>
	</div>
</div>
<?= $this->endSection() ?>