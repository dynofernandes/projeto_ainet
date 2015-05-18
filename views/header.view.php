<!doctype html>
<html>
    <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Gestor de Projectos</title>
	    <!-- Bootstrap core CSS -->
	    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/global.css" rel="stylesheet">
	    <link href="css/navbar.css" rel="stylesheet">
	    <link href="css/carousel.css" rel="stylesheet">
	    <link href="css/footer.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<!-- Static navbar -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Gestor de Projectos</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Projectos</a></li>
							<li><a href="#">Contactos</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<?php if(isset($authenticated)): ?>
							<li><a href="/final_project/logout.php">Sign Out</a></li>
							<?php else: ?>
							<li><a href="/final_project/login.php">Sign In</a></li>
							<?php endif?>
							<li><a href="/final_project/admin-user-list.php">Dashboard</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div><!--/.container-fluid -->
			</nav>
		</div>
