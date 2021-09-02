<?php require ('partials/head.php'); ?>

<h1>Name List</h1>
<u>
	<?php foreach($users as $user) : ?>
		<li><i style="font-size:14px; color: green;" class="fa">&#xf124;</i> <?= $user->name;?></li>
	<?php endforeach; ?>
</u>
<br>

<h1>Submit Your Name</h1>
<form method="POST" action="/names">
	<input name="name"></input>

	<button type="submit">Submit</button>
</form>

<?php require ('partials/footer.php');