<?php function main_header($page) { ?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $page; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo SITE_URL; ?>/resources/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- jQuery -->
<script type="text/javascript" src="<?php echo SITE_URL; ?>/resources/scripts/jquery.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="<?php echo SITE_URL; ?>/resources/scripts/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="<?php echo SITE_URL; ?>/resources/css/magnific-popup.css" rel="stylesheet" type="text/css">
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
   <script src="<?php echo SITE_URL; ?>/resources/scripts/jquery.hoverdir.js"></script>
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
      <div class="wrap"> 
          <div class="logo">
			<?php /*?> <a href="index.html"><img src="<?php echo SITE_URL; ?>/resources/images/logo.png" alt=""/></a><?php */?>
			<a href="<?php echo SITE_URL; ?>">PanSci</a>
		  </div>
		  <div class="header-right">
			 <div id='cssmenu'>
				<ul>
				   <li <?php if($page =='Pansci') { ?> class="active"<?php } ?>><a href='<?php echo SITE_URL; ?>'><span>Home</span></a></li> |
				   <li <?php if($page =='Pansci- About') { ?> class="active"<?php } ?>><a href='<?php echo SITE_URL; ?>/about'><span>About</span></a> 
				       <ul>
				         <li class='has-sub'><a href='<?php echo SITE_URL; ?>/about'><span>About Pansci</span></a></li>
				         <li class='has-sub'><a href='<?php echo SITE_URL; ?>/about#NIESBUD'><span>About NIESBUD</span></a></li>
						 <li class='has-sub'><a href='<?php echo SITE_URL; ?>/about#MSME'><span>About MSME</span></a></li>
						 <li class='has-sub'><a href='<?php echo SITE_URL; ?>/about#team'><span>Our Team</span></a></li>
				      </ul>
				   </li> |
				   <li  <?php if($page =='Pansci- Services') { ?> class="active"<?php } ?>><a href='<?php echo SITE_URL; ?>/services'><span>Services</span></a></li> |
				   <li<?php if($page =='Pansci- Gallery') { ?> class="active"<?php } ?>><a href='<?php echo SITE_URL; ?>/gallery'><span>Gallery</span></a></li> |
				   <li<?php if($page =='Pansci- Contact') { ?> class="active"<?php } ?>><a href='<?php echo SITE_URL; ?>/contact'><span>Contact Us</span></a></li>
				</ul>
			 </div>
			 <div class="search_box">
				<form>
				   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			 </div>
		   </div>
		   <div class="clear"></div>
      </div>
    </div>
<?php } ?>
