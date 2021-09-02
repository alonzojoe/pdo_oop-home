<?php


App::get('database')->insert('users', [

	'name' => $_POST['name']

]);

/*      echo '<script>
      alert("Data Inserted.");
      window.location.href = "/";
      </script>'; */

header('Location: /');