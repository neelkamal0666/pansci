	<center>
	  <div class="row" style="margin-top:5px;">     
        <div class="col-md-12 col-sm-12">
          <h3>Add A New User</h3>
		
           <div class="input-group">
             <span class="input-group-addon">Choose Center :</span>
            <select name="center" id="center" class="form-control" >
			<option value="Choose Center">Choose center</option>
			<?php
			
			 $conf = '/var/www/html/s.leadroot.com/gateacademy/lib/config.php';
			require_once($conf);
			require_once("../../../lib/common_functions.php");
			 $model = SERVER_PATH.'/lib/redis_models.php';
			 require_once($model);
			 $set =DB_PREFIX."centers";
			 $centers =  array_sort(get_data_from_sets($set),"center",SORT_ASC);
			 foreach ($centers as $center) {
	
			 $center_arr = json_decode($center,true);
			?>
			<option value="<?php echo $center_arr['center']; ?>"><?php echo $center_arr['center']; ?></option>
			<?php }  ?>
			</select>
           </div>
		   <div><br /></div>
		     <div class="input-group">
             <span class="input-group-addon">User Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </span>
             <input type="text" name="name" id="name" class="form-control" placeholder="User Name">
             </div>
		    <div><br /></div>
			
			 <div class="input-group">
             <span class="input-group-addon">User Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </span>
             <input type="text" name="email" id="email" class="form-control" placeholder="Email">
             </div>
		    <div><br /></div>
			
			 <div class="input-group">
             <span class="input-group-addon">User Phone &nbsp;&nbsp;&nbsp;&nbsp; : </span>
             <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
             </div>
		    <div><br /></div>
				<div id="error_msg"></div>
			<div><br /></div>		
		   <button class="btn btn-lg btn-primary" onClick="submitUser()">Add User</button>&nbsp;&nbsp;&nbsp;&nbsp;
		    <button class="btn btn-lg btn-primary" id="cancel" onClick="cancel()">Cancel</button>
		</div>   
		</div>
</center>
      <hr>
	 <script type="text/javascript">
	  function cancel(){
	   $("#load_section").replaceWith('<div  class="col-lg-12" id="load_section"></div>');
	  }
	  </script>
