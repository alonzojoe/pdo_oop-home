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
	<nav>
		<li><a href="">Home</a></li>
		<li><a href="/about">About</a></li>
		<li><a href="/about/culture">About Culture</a></li>
		<li><a href="/contact">Contact Us</a></li>



	</nav>

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