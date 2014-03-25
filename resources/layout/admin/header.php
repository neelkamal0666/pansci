<?php function main_header($page,$style) { ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pansci - Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo SITE_URL;?>/resources/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo SITE_URL;?>/resources/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/resources/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style=" font-size:24px;" href="<?php echo SITE_URL;?>/admin/dashboard">Pansci Dashboard</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li <?php if($page=='announcements'){  ?> class="active"<?php } ?>><a href="<?php echo SITE_URL;?>/admin/dashboard"> Announcements</a></li>
            <li <?php if($page=='aboutus'){ ?>class="active"<?php } ?>><a href="#">About Us</a></li>
	   		<li <?php if($page=='serices'){ ?>class="active" <?php } ?>><a href="#">Services</a></li>	
	     </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
             <a href="<?php echo SITE_URL; ?>/admin/dashboard">View Announcements</a>
              
            </li>
            <li class="dropdown alerts-dropdown">
             <a href="#" id="add_announcements">Add Announcements</a></li>
             
            </li>
            <li class="dropdown user-dropdown">
             <a href="#" id="add_user">Add Users</a>
             
            </li>
		 <li class="dropdown user-dropdown">
               <a href="<?php echo SITE_URL;  ?>/admin/change-password">Change Password</a>
               </li>

		<li class="dropdown user-dropdown">
               <a href="<?php echo SITE_URL;  ?>/admin/logout">Log Out</a>
               </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

<?php } ?>
