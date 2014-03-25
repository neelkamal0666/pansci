	<center>
	  <div class="row" style="margin-top:5px;">     
        <div class="col-md-12 col-sm-12">
          <h3>Add A New Center</h3>
		
           <div class="input-group">
             <span class="input-group-addon">Center Name &nbsp; :</span>
             <input type="text"  name="center" id="center_name" maxlength="64" class="form-control" placeholder="Center Name">
           </div>
		   <div><br /></div>
		     <div class="input-group">
             <span class="input-group-addon">Address line 1 : </span>
             <input type="text" name="address1" id="address1" maxlength="255"  class="form-control" placeholder="Address line 1">
             </div>
		 <div><br /></div>
		   <div class="input-group">
             <span class="input-group-addon">Address line 2 : </span>
             <input type="text" name="address2" id="address2" maxlength="255"  class="form-control" placeholder="Address line 2">
             </div>
		 <div><br /></div>
		   <div class="input-group">
             <span class="input-group-addon">Address line 3 : </span>
             <input type="text" name="address3" id="address3" maxlength="255"  class="form-control" placeholder="Address line 3">
             </div>
		 <div><br /></div>
		   <div class="input-group">
             <span class="input-group-addon">Address line 4 : </span>
             <input type="text" name="address4" id="address4" maxlength="255"  class="form-control" placeholder="Address line 4">
             </div>
		 <div><br /></div>
		   <div class="input-group">
             <span class="input-group-addon">Center Email &nbsp;&nbsp;: </span>
             <input type="text" name="center_email" id="center_email" maxlength="255"  class="form-control" placeholder="Center Email">
             </div>
		 <div><br /></div>
		   <div class="input-group">
             <span class="input-group-addon">Center Phone : </span>
             <input type="text" name="center_phone" id="center_phone" maxlength="255"  class="form-control" placeholder="Center Phone">
             </div>


		
		    <div><br /></div>
				<div id="error_msg"></div>
			<div><br /></div>
		   <button class="btn btn-lg btn-primary" onClick="SubmitCenter()">Add Center</button>&nbsp;&nbsp;&nbsp;&nbsp;
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
