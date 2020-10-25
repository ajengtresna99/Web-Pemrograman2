<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Merancang Tamplate Sederhana</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/pustaka_ajeng/assets/css/stylebuku.css">

</head>


<body>
	<div id="wrapper">
		<header>
			<hgroup>
				<h1>RentalBuku.net</h1>
				<h2>Membuat Tamplate Sederhana dengan CodeIgniter</h2>
			</hgroup>
			<nav>
				<ul>
					<li><a href='<?php echo base_url().'index.php/web' ?>'>Home</a></li>
					<li><a href='<?php echo base_url().'index.php/web/about' ?>'>About</a></li>
				</ul>
			</nav>
			<div class="clear"></div>

		</header>
	</div>

</body>
</html>