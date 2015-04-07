<!DOCTYPE html>
<html lang="en-EN">

	<head>
		<title>FlagCMS</title>
		<link href="<?php echo htmlentities(SITE_URL, ENT_QUOTES); ?>public/css/style.css" rel="stylesheet" type="text/css"> <!-- Main style file, importante! -->
		<link href="<?php echo htmlentities(SITE_URL, ENT_QUOTES); ?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	</head>

	<body class="body">

		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" rel="home" href="index.html">FlagCMS</a>
	</div>

	<div class="collapse navbar-collapse">

		<ul class="nav navbar-nav">
			<li><a href="https://github.com/orgs/HackflagORG/people" target="_blank">Team</a></li>
			<li><a href="https://github.com/HackflagORG/Hackflag-CMS" target="_blank">GitHub</a></li>
			<li><a href="https://github.com/HackflagORG/Hackflag-CMS/blob/master/README.md" target="_blank">About</a></li>
			<li><a href="https://hackflag.org" target="_blank">Hackflag</a></li>
		</ul>
		<div class="btn pull-right">
			<a href="<?php echo htmlentities(SITE_URL, ENT_QUOTES); ?>signin.php"><button type="button" class="btn btn-default">Sign in</button></a>
			<a href="<?php echo htmlentities(SITE_URL, ENT_QUOTES); ?>register.php"><button type="button" class="btn btn-primary">Register</button></a>
		</div>

	</div>
	</div>

	<hr>
	<div class="container">
  <div class="jumbotron text-center">
    <h1>FlagCMS</h1>
    <p class="lead">Made with <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> by <a href="https://hackflag.org">Hackflag</a></p>

  </div>
  <hr>

  <div class="row">
    <div class="col-lg-6">
      <h4><span style="font-size:27px" class="glyphicon glyphicon-tint" aria-hidden="true"></span> </h4>
      <p>Design we find slightly so important, which is why we make sure it fits your eye.</p>
      <br>
      <h4><span style="font-size:27px" class="glyphicon glyphicon-flash" aria-hidden="true"></span> </h4>
      <p>We love speed, and power. Which is why we try to make FlagCMS as reliable and as fast of a platform possible.</p>
    </div>

    <div class="col-lg-6">
      <h4><span style="font-size:27px" class="glyphicon glyphicon-globe" aria-hidden="true"></span> </h4>
      <p>We love open source projects! Check us out <a href="https://github.com/HackflagORG/Hackflag-CMS">on GitHub</a></p>
      <br>
      <h4><span style="font-size:27px" class="glyphicon glyphicon-comment" aria-hidden="true"></span> </h4>
      <p>Have any questions? We'll try to get you your answer as fast as possible!</p>
    </div>
  </div>

  <hr>
  <hr>

  <div class="jumbotron text-center">
    <h2>Still not impressed?</h2>
    <p class="lead">Take a look for yourself!</p>
    <p><a class="btn btn-large btn-success" href="<?php echo htmlentities(SITE_URL,ENT_QUOTES); ?>register.php">Register now</a></p>
  </div>

</div> <!-- /container -->

		<!------= Don't touch below this line =------>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="<?php echo htmlentities(SITE_URL,ENT_QUOTES); ?>public/bootstrap/js/bootstrap.min.js"></script>
	</body>

</html>
