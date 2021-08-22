<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>PDO OOP</title>

	<style>
		header {
			padding: 2em;

			text-align: center;
		}

	</style>

</head>
<body>
	<h1>Tasks / Todos</h1>

	<ul>
		
		<?php foreach($tasks as $task) : ?>

			<?php if($task->completed) : ?>

				<li><strike><?= $task->description; ?></strike></li>

			<?php else : ?>

				<li><?= $task->description; ?></li>

			<?php endif; ?>

		<?php endforeach; ?>

	</ul>

</body>
</html>