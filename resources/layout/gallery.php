 <div class="main">
	  <div class="wrap">
	  <div class="clients">
	  
	  	<h2 class="head">Photo Gallery</h2>
		 <ul id="flexiselDemo3">
			<a class="popup-with-zoom-anim" href="#small-dialog1"><li><img src="<?php echo SITE_URL; ?>/resources/images/gallery/562051_384864838198150_1487562686_n.jpg" height="200" width="220" /></li></a>
			<a class="popup-with-zoom-anim" href="#small-dialog1"><li><img src="<?php echo SITE_URL; ?>/resources/images/gallery/524249_384864974864803_785464954_n.jpg" height="200" width="220"/></li></a>
			<a class="popup-with-zoom-anim" href="#small-dialog1"><li><img src="<?php echo SITE_URL; ?>/resources/images/gallery/553357_384865138198120_1051455691_n.jpg" height="200" width="220"/></li></a>
			<a class="popup-with-zoom-anim" href="#small-dialog1"><li><img src="<?php echo SITE_URL; ?>/resources/images/gallery/556485_384865184864782_193856327_n.jpg" height="200" width="220" /></li></a>
			<a class="popup-with-zoom-anim" href="#small-dialog1"><li><img src="<?php echo SITE_URL; ?>/resources/images/gallery/1291231_321395371338808_919514066_o.jpg" height="200" width="220" /></li></a>
			<a class="popup-with-zoom-anim" href="#small-dialog1"><li><img src="<?php echo SITE_URL; ?>/resources/images/gallery/1264497_518589714885732_827330685_o.jpg" height="200" width="220"/></li></a>
			<li><img src="<?php echo SITE_URL; ?>/resources/images/gallery/1263031_518592278218809_445954395_o.jpg" height="200" width="250"/></li>
			<li><img src="<?php echo SITE_URL; ?>/resources/images/gallery/1266182_457812177660369_14670008_o.jpg" height="200" width="250"/></li>
		 </ul>
		 <div id="small-dialog1" class="mfp-hide">
					   <div class="pop_up2">
					   <img src="<?php echo SITE_URL; ?>/resources/images/gallery/524249_384864974864803_785464954_n.jpg" width="550" height="500" />
					   </div>
		</div>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="<?php echo SITE_URL; ?>/resources/js/jquery.flexisel.js"></script>
     
	</div>	  
	  </div>
   </div>  <!-- Site footer -->
