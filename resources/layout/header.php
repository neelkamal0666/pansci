<?php
function main_header($page,$title){ ?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="resources/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- jQuery -->
<script type="text/javascript" src="resources/js/jquery.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="resources/js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="resources/css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
   <script src="resources/js/jquery.hoverdir.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir({
					hoverDelay : 50,
					inverse : true
				}); } );

			});
    </script>
</head>
<body>
  <div class="header">	
      <div class="wrap" style="background-color:#31333E;"> 
          <div class="logo">
			 <a href="<?php echo SITE_URL; ?>" style="font-size:24px; color:#FFFFFF; font-weight:bold;">Pantheon Scientifics</a>
		  </div>
		  <div class="header-right">
			 <div id='cssmenu'>
				<ul>
				   <li <?php if($page=='home') { ?> class="active"<?php } ?>><a href='<?php echo SITE_URL; ?>'><span>Home</span></a></li> |
				   <li <?php if($page=='about') { ?> class="active"<?php } ?>><a href='<?php echo SITE_URL; ?>/about'><span>About</span></a> 
				       <ul>
				         <li class='has-sub'><a href='<?php echo SITE_URL; ?>/about'><span>About Us</span></a></li>
						 <li class='has-sub'><a href='<?php echo SITE_URL; ?>/about#team'><span>Our Team</span></a></li>
				      </ul>
				   </li> |
				   <li <?php if($page=='services') { ?> class="active"<?php } ?> ><a href='<?php echo SITE_URL; ?>/services'><span>Services</span></a>
				   <ul>
				         <li class='has-sub'><a href='<?php echo SITE_URL; ?>/services#edp'><span>EDP</span></a></li>
						 <li class='has-sub'><a href='<?php echo SITE_URL; ?>/services#vigyaan'><span>Vigyaan</span></a></li>
				      </ul>
				   </li> |
				   <li <?php if($page=='gallery') { ?> class="active"<?php } ?>><a href='<?php echo SITE_URL; ?>/gallery'><span>Gallery</span></a>
				    <ul>
				         <li class='has-sub'><a href='<?php echo SITE_URL; ?>/videos'><span>Videos</span></a></li>
						 <li class='has-sub'><a href='<?php echo SITE_URL; ?>/gallery#images'><span>Images</span></a></li>
				      </ul>
				   </li> |
				   <li <?php if($page=='contact') { ?> class="active"<?php } ?> style="width:130px;"><a href='<?php echo SITE_URL; ?>/contact'><span>Contact Us</span></a></li>
				</ul>

			 </div>
			
		   </div>
		   <div class="clear"></div>
      </div>
    </div>
<?php
}
?>