<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title><?= $this->renderSection('title') ?></title>
	<link rel="stylesheet" href="/assets/style.css">
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
	<div class="min-h-screen bg-blue-200">
		<header class="bg-white shadow p-4">
			<div class="container mx-auto flex items-center justify-between">
				<h1 class="text-xl font-bold text-gray-800">E-commerce</h1>
				<a href="<?= base_url('admin') ?>"
					class="text-sm bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition">
					Entrar como administrador
				</a>

			</div>
		</header>


		<main>
			<?= $this->renderSection('content') ?>
		</main>
	</div>

	<footer class="bg-black p-5 text-center text-white">WHevron© 2025</footer>
</body>

</html>