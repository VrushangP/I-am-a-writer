<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<title>Icarus Security</title>

	<link rel="stylesheet" href="css/pico.min.css">
	<link rel="import" href="Templates/myheader.html">

	<scripts>
		var content = document.querySelector('link[rel="import"]').import;
	</scripts>

</head>

<body>
	<main class="container">
		<h2>soemth</h2>
		<h1>Hello, world! uodare</h1>
		<form action="" method="post">
			<textarea rows=4 name="decoded_string" id="decoded_string"
				class="block w-full rounded px-2 py-1 border border-gray-400" placeholder="Type decoded string here...">
<?php include('Databases/Database.php');
$db = new Database();
$db->view_table();
?></textarea>
			<input type="submit" value="Open add_tasks.php">
		</form>
	</main>
	<footer class="py-3 my-4">
		<ul class="nav justify-content-center border-bottom pb-3 mb-3">
			<li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
			<li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
			<li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
			<li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
			<li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
		</ul>
		<p class="text-center text-body-secondary">© 2023 Company, Inc</p>
	</footer>
</body>

</html>