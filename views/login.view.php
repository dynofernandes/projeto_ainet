<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gestor de Projectos</title>
	<!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet">
	<link href="css/footer.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<?php use Ainet\Support\HtmlHelper;?>
		<form class="form-signin" action="<?=$_SERVER['PHP_SELF']?>" method="post">
			<h2 class="form-signin-heading">Please sign in</h2>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="<?=$user->email?>">
			<?=HtmlHelper::error('email',$errors)?>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required value="<?=$user->password?>">
			<?=HtmlHelper::error('password',$errors)?>
			<div class="checkbox">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Login">Sign in</button>
			</form>
		</div> <!-- /container -->

