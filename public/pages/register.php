<!DOCTYPE html>
<html lang="en-EN">

	<head>

		<title>Sign in - FlagCMS</title>
		<link href="<?php echo htmlentities(SITE_URL,ENT_QUOTES); ?>public/css/style.css" rel="stylesheet">
		<link href="<?php echo htmlentities(SITE_URL,ENT_QUOTES); ?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" >

	</head>

	<body class="body">

	<div class="jumbotron vertical-center">
		<div class="container">

			<div class="vertical-center-row">
			  <form class="form-signin" autocomplete='off' />
				<h2 class="form-signin-heading">Register a <b>FlagCMS</b> account</h2>
				<a id="aMkup" onclick="window.history.back();"><i class="fa fa-chevron-left"></i>&nbsp; Previous page</a>
				<hr><hr><hr>
				<label for="inputEmail" class="sr-only">Email address</label>
				<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" autocomplete='off' />
				<label for="inputPassword" class="sr-only">Password</label>
				<br>
				<input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" autocomplete='off' />
				<hr>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Create account</button>
			  </form>

			</div>
		</div>
	</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	</body>

</html>
