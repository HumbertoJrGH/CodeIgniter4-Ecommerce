<?= $this->extend('layout') ?>

<?= $this->section('title') ?>
Painel Administrativo
<?= $this->endSection() ?>

<?= $this->section('aside') ?>
<a href="<?= base_url('/') ?>" class="px-4 cursor-pointer py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
	Voltar
</a>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="p-5">
	<div class="w-full p-5 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
		<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gerenciar Produtos</h5>

		<form method="get" action="<?= site_url('/admin/buscar') ?>" class="flex items-center gap-2 mb-6">
			<input
				type="text"
				name="q"
				placeholder="Buscar produto..."
				class="w-full text-white max-w-md px-4 py-2 rounded-lg border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
			<button
				type="submit"
				class="px-4 cursor-pointer py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
				Buscar
			</button>
		</form>

		<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Aqui você poderá adicionar, editar e excluir produtos da base de dados!</p>
		<div x-data="{ aberto: false }" class="mb-6">

			<!-- Botão -->
			<button
				@click="aberto = !aberto"
				class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
				<span x-show="!aberto">Adicionar Produto</span>
				<span x-show="aberto">Fechar</span>
			</button>

			<div
				x-show="aberto"
				x-transition
				class="mt-4 p-4 border rounded-lg bg-gray-100 shadow-sm">
				<form method="post" action="<?= site_url('admin/inserir') ?>">
					<?= csrf_field() ?>

					<div class="mb-4">
						<label class="block mb-1 font-medium text-gray-700">Nome</label>
						<input type="text" name="nome"
							class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
							required>
					</div>

					<div class="mb-4">
						<label class="block mb-1 font-medium text-gray-700">Variação</label>
						<input type="text" name="variacao"
							class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
							required>
					</div>

					<div class="mb-4">
						<label class="block mb-1 font-medium text-gray-700">Descrição</label>
						<textarea name="descricao"
							class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"></textarea>
					</div>

					<div class="mb-4">
						<label class="block mb-1 font-medium text-gray-700">Preço</label>
						<input type="number" name="preco" step="0.01"
							class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
							required>
					</div>

					<button type="submit"
						class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">
						Salvar
					</button>
				</form>
			</div>
		</div>



		<div class="flex gap-3 flex-col overflow-hidden">
			<?php foreach ($produtos as $produto): ?>
				<div class="bg-white rounded-lg shadow hover:shadow-lg transition">
					<div class="p-3 flex items-center justify-between gap-3">
						<div class="w-1/5">
							<?= $produto['nome'] ?>
						</div>
						<div class="w-1/5">
							<?= $produto['descrição'] ?>
						</div>
						<div class="w-1/5">
							<?= $produto['preço'] ?>
						</div>
						<div class="w-1/5">
							<?= $produto['variação'] ?>
						</div>
						<div class="w-1/5 text-end">
							<button class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-2 px-4 rounded">
								Editar
							</button>
						</div>

					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<?= $this->endSection() ?>