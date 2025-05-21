<?= $this->extend('layout') ?>

<?= $this->section('title') ?>
Painel Administrativo
<?= $this->endSection() ?>

<?= $this->section('aside') ?>
<a href="<?= base_url('/') ?>">Voltar</a>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="p-5">
	<div class="w-full p-5 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
		<a href="#">
			<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gerenciar Produtos</h5>
		</a>

		<form method="get" action="<?= site_url('/buscar') ?>" class="flex items-center gap-2 mb-6">
			<input
				type="text"
				name="q"
				placeholder="Buscar produto..."
				class="w-full max-w-md px-4 py-2 rounded-lg border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
			<button
				type="submit"
				class="px-4 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
				Buscar
			</button>
		</form>

		<p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Aqui você poderá adicionar, editar e excluir produtos da base de dados!</p>
		<a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
			Adicionar
			<svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
			</svg>
		</a>
	</div>
</div>
<?= $this->endSection() ?>