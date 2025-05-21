<?= $this->extend('layout') ?>

<?= $this->section('title') ?>
Bem vindo!
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="grid grid-cols-5 gap-4 p-8">
	<?php foreach ($produtos as $produto): ?>
		<?= view('partials/product_card', [
			'nome' => $produto['nome'],
			'descricao' => $produto['descricao'],
			'preco' => $produto['preco'],
			'variacao' => $produto['variacao'],
		]) ?>
	<?php endforeach; ?>
</div>
<?= $this->endSection() ?>