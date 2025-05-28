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
				value="<?= old('nome') ?>"
				required>
		</div>

		<div class="mb-4">
			<label class="block mb-1 font-medium text-gray-700">Variação</label>
			<input type="text" name="variacao"
				class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
				value="<?= old('variacao') ?>"
				required>
		</div>

		<div class="mb-4">
			<label class="block mb-1 font-medium text-gray-700">Descrição</label>
			<textarea name="descricao"
				class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
				<?= old('descricao') ?>
			</textarea>
		</div>

		<div class="mb-4">
			<label class="block mb-1 font-medium text-gray-700">Preço</label>
			<input type="number" name="preco" step="0.01"
				class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
				value="<?= old('preco') ?>"
				required>
		</div>

		<button type="submit"
			class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">
			Salvar
		</button>
	</form>
</div>