<div class="bg-white rounded-lg shadow hover:shadow-lg transition flex flex-col overflow-hidden">
	<div class="aspect-[2/3] p-4 flex flex-col justify-between">

		<div>
			<h2 class="text-xl font-semibold mb-1"><?= esc($nome) ?> <?= esc($variacao) ?></h2>
			<p class="text-gray-600 text-sm line-clamp-3 mb-2"><?= esc($descricao) ?></p>
		</div>

		<div class="mt-4">
			<p class="text-green-600 font-bold text-base mb-3">R$ <?= number_format($preco, 2, ',', '.') ?></p>
			<button class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-2 px-4 rounded">
				Adicionar ao carrinho
			</button>
		</div>
	</div>
</div>