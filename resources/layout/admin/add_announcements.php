	<center>
	  <div class="row" style="margin-top:5px;">     
        <div class="col-md-12 col-sm-12">
          <h3>Add A New Announcement</h3>
		
           <div class="input-group">
             <span class="input-group-addon">Announcement Details &nbsp; :</span>
             <input type="text"  name="announcement" id="announcement" maxlength="2048" class="form-control" placeholder="Center Name">
           </div>
		   <div><br /></div>
				<div id="error_msg"></div>
			<div><br /></div>
		   <button class="btn btn-lg btn-primary" onClick="SubmitAnnouncement()">Add Announcement</button>&nbsp;&nbsp;&nbsp;&nbsp;
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
