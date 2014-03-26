   <div id="page-wrapper">

		
		 <div class="col-lg-12" id="load_section">
		</div>
		
      
          <div class="col-lg-12">
            <h1>Dashboard <small>Pansci</small></h1>  
				<?php $announcements = get_announcements(); 
				foreach($announcements as $announcement) { ?>
			<div class="row">
			<div class="col-md-9" style="height:72px;"><?php echo strip_tags($announcement['note']);?></div>
			<a data-toggle="modal"  class="delete" id="<?php echo $announcement['id']; ?>" style="cursor:pointer;"> <div class="col-md-2" style="height:72px;">Delete</div></a>
			</div>
					
				<?php }
				?>
		</div>

      
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->
