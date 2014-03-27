<div class="index-banner">
	  	<div class="wrap">
       	  
			     <article> 
				   	<div class="banner-wrap">
						<div class="cont span_2_of_3">
						   <iframe width="660" height="460" src="//www.youtube.com/embed/3YSrKzrqghk" frameborder="0" allowfullscreen></iframe>
						</div>
						<div class="cont span_1_of_3" style="height:400px; border:1px solid #f5f5f5; padding:20px;">
						<center><h1 style="font-size:24px;">Announcements</h1></center><hr /><br />
						    <marquee  behavior="scroll" direction="up" style=" color:#000000;">
							<?php $announcements = get_announcements();
									if(isset($announcements)) { 
										foreach($announcements as $announcement) { 
										echo strip_tags($announcement['note']).'<br /><br />';
										}
									}?>
							</marquee>
						</div>
						
						
		    		</div>
					<div class="banner">
					     
					</div>
				 </article>
								
				
            </div>
            	 	           	      
   		</div>
   		 <div class="clients">
	  <div class="wrap">
	  	<h2 class="head">Colleges</h2>
		 <ul id="flexiselDemo3">
			<li><b>NIT Raipur</b></li>
			<li><b>BIT Mesra</b></li>
			<li><b>IIIT Bangalore</b></li>
			<li><b>NIT Durgapur</b></li>
		 </ul>
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
	<script type="text/javascript" src="<?php echo SITE_URL; ?>/resources/scripts/jquery.flexisel.js"></script>
     </div>
	</div>	  
    
   </div>  <!-- Site footer -->
