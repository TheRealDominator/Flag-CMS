<?php include('../../app/config.php'); ?>
<!DOCTYPE html>
<html lang="en-EN">

  <head>
  
<<<<<<< HEAD
    <title><?php echo htmlspecialchars($siteTitle); ?> - Dashboard</title>
=======
    <title><?php echo SITE_TITLE; ?> - Dashboard</title>
>>>>>>> origin/master
	
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <link href="../css/dboard_design.css" rel="stylesheet" type="text/css" />
    <link href="../css/dboard_style.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
  </head>
  <body class="dbody">
    <div class="wrapper">
      
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
			  <img src="../img/avatar.jpg" class="img-circle" alt="Avatar"/>
            </div>
            <div class="pull-left info">
<<<<<<< HEAD
              <p><?php echo htmlspecialchars($cmsName); ?></p>
=======
              <p><?php echo CMS_NAME; ?></p>
>>>>>>> origin/master

              <a href="#"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="header">Navigation</li>
            <li class="active treeview">
              <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-text-o"></i>
                <span>New post</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-bar-chart"></i>
				<span>Overview</span>
              </a>
            </li>
			<li>
              <a href="#">
                <i class="fa fa-cog"></i>
				<span>Settings</span>
              </a>
            </li>
          </ul>
        </section>
      </aside>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>
<<<<<<< HEAD
            <?php echo htmlspecialchars($cmsName); ?>
=======
            <?php echo CMS_NAME; ?>
>>>>>>> origin/master
            <small>Dashboard</small>
          </h1>
        </section>

    </div>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>

  </body>
</html>
