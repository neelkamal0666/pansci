 var SITE_URL = "http://s.leadroot.com/gateacademy";
	var x = document.cookie;
	var p=window.location.pathname.substring(1);
	if(p=='gateacademy/dashboard' || p== 'gateacademy/emailsettings' || p=='gateacademy/landingpage'){
	if(x==''){
	window.location.href=SITE_URL;
	}
	}
	 function addAnnouncements() {
	 $("#load_section").append('<center><img src="'+SITE_URL+'/resources/images/ajax-loader.gif" /></center>');
	 $('#load_section').load(SITE_URL+'/resources/layout/admin/add_announcements.php').fadeIn("slow");
        return false; // <--- important, prevents the link's href (hash in this example) from executing.
      }
	  function addUser() {
	 $("#load_section").append('<center><img src="'+SITE_URL+'/resources/images/ajax-loader.gif" /></center>');
	 $('#load_section').load(SITE_URL+'/resources/layout/dashboard_layout/add_user.php').fadeIn("slow");
        return false; // <--- important, prevents the link's href (hash in this example) from executing.
      }
	  
	 function SubmitCenter() {
	 var center = $('#center_name').val().trim().replace(/"/gi,'');
	 var address1 = $('#address1').val().trim().replace(/"/gi,'');
	 var address2 = $('#address2').val().trim().replace(/"/gi,'');
	 var address3 = $('#address3').val().trim().replace(/"/gi,'');
	 var address4 = $('#address4').val().trim().replace(/"/gi,'');
	 var address = '';
	if(address1 !=''){
		address = address1;
	}
	if(address2 != ''){
		address = address + ' <br />'+address2;
	}
	if(address3 != ''){
		address = address + ' <br />'+address3;
	}
	if(address4 != ''){
		address = address + ' <br />'+address4;
	}
	var center_email = $('#center_email').val().trim().replace(/"/gi,'');
	var center_phone = $('#center_phone').val().trim();
	if(center.length >128){
		$("#error_msg").replaceWith('<div id="error_msg" class="alert alert-danger"><center>Center name is too long. Only 128 characters are allowed</center></div>');
		return false;
	}
	if(address.length >1024){
		 $("#error_msg").replaceWith('<div id="error_msg"  class="alert alert-danger"><center>Address is too long. Only 1024 characters are allowed.</center></div>');
		return false;
	}
	 var dataString = 'center='+center+'&address=' + address+'&center_email='+center_email+'&center_phone='+center_phone;
	 var server =SITE_URL+'/resources/ajax_submit/add_center.php';
	if(center =='' || address =='' || center_email == '' || center_phone == '') {
	 $("#error_msg").replaceWith('<div id ="error_msg" class="alert alert-danger"><cente>All Fields are Compulsory.</center></div>');
	} else {
	 $("#load_section").append('<center><img src="'+SITE_URL+'/resources/images/ajax-loader.gif" /></center>');
        $.ajax({
          url: server,
          method: 'POST',
          data: dataString,
          cache: false,
          success: function(msg) {
		 	$("#load_section").replaceWith('<div class="container" id="load_section"><br /><div class="alert alert-success"><center>Center Has Been Added Successfully.</center></div></div>');
	window.setTimeout(function(){ 
	window.location.href ='http://s.leadroot.com/gateacademy/dashboard';
	},2000);
		     			}
        });
	}
        return false; // <--- important, prevents the link's href (hash in this example) from executing.
      }

	  function deleteCenter(id){
		  var center = $("#"+id).attr('center');
		  var address =$("#"+id).attr('address');
		  var center_email = $("#"+id).attr('center_email');
                  var center_phone = $("#"+id).attr('center_phone');
		 var dataString = 'center='+center+'&address=' + address+'&center_email='+center_email+'&center_phone='+center_phone;
		  var server =SITE_URL+'/resources/ajax_submit/delete_center.php';
		 $.ajax({
	          url: server,
        	  method: 'POST',
          
           	 data: dataString,
           	 cache: false,
         
        	  success: function() {
		 	 $("#modal_header_delete"+id).replaceWith('<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>   <h4 class="modal-title" id="myModalLabel"></h4></div>');
        
			$("#modal_body_delete"+id).replaceWith('<div class="modal-body"><p class="alert alert-success">Center has been deleted successfully</p></div>');

			$("#modal_footer_delete"+id).replaceWith('<div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>');
			window.setTimeout(function(){
			window.location.href =SITE_URL+'/dashboard';
			},2000);
         	 }
       		 });
		   return false; // <--- important, prevents the link's href (hash in this example) from executing.
		  }
	 function updateCenter(id) {
	 var center = $('#center_name_'+id).val().trim().replace(/"/gi,'');
	  var address1 = $('#address1_'+id).val().trim().replace(/"/gi,'');
         var address2 = $('#address2_'+id).val().trim().replace(/"/gi,'');
         var address3 = $('#address3_'+id).val().trim().replace(/"/gi,'');
         var address4 = $('#address4_'+id).val().trim().replace(/"/gi,'');
         var address = '';
        if(address1 !=''){
                address = address1;
        }
        if(address2 != ''){
                address = address + ' <br />'+address2;
        }
        if(address3 != ''){
                address = address + ' <br />'+address3;
        }
        if(address4 != ''){
                address = address + ' <br />'+address4;
        }
        var center_email = $('#center_email_'+id).val().trim().replace(/"/gi,'');
        var center_phone = $('#center_phone_'+id).val().trim();
	  var center_old = $('#center_old_'+id).val();
          var address_old = $('#address_old_'+id).val();
	  var center_email_old = $('#center_email_old_'+id).val();
          var center_phone_old = $('#center_phone_old_'+id).val();


	 var dataString = 'center='+center+'&address=' + address+'&center_email='+center_email+'&center_phone='+center_phone+'&center_old=' + center_old+'&address_old=' + address_old+'&center_email_old='+center_email_old+'&center_phone_old='+center_phone_old;
	 var server =SITE_URL+'/resources/ajax_submit/update_center.php';
	if(center == ''|| address =='' || center_phone == '' || center_email == '') {
	 $("#error_msg_"+id).replaceWith('<div id="error_msg_'+id+'"><div class="alert alert-danger"><center>All the fields are compulsary.</center></div></div>');
	} else {
        $.ajax({
          url: server,
          method: 'POST',
          data: dataString,
          cache: false,
          success: function(msg) { 
				 $("#modal_header_edit"+id).replaceWith('<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel"></h4></div>');
        
			$("#modal_body_edit"+id).replaceWith('<div class="modal-body"><p class="alert alert-success">Center has been updated successfully.</p></div>');

			$("#modal_footer_edit"+id).replaceWith('<div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>');
			setTimeout(function(){ 
			window.location.href=SITE_URL+'/dashboard';
			},2000);
	     			}
        });
	}
        return false; // <--- important, prevents the link's href (hash in this example) from executing.
      }
function validateEmail(email) {   
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function validateMobile(mobile){
	if(mobile ==''){
		return true;
	}
           if(isNaN(mobile)||mobile.indexOf(" ")!=-1)
           {
             return false; 
           }
           if (mobile.length != 10)
           {
             return false;
           } 
	return true;
}
function submitUser(){
	 var center = $('#center').val();
	 var name = $('#name').val().replace(/"/gi,'');
	 var email = $('#email').val();
	 var phone = $('#phone').val();
	if(name.length > 64){
	 $("#error_msg").replaceWith('<div id="error_msg" class="alert alert-danger"><center>Name is too long. Only 64 characters are allowed.</center></div>');
	return false;
	}
	 var dataString = 'name='+name+'&email=' + email+'&phone=' + phone+'&center=' + center;
	
	if(center == 'Choose Center') {
		 $("#error_msg").replaceWith('<div id ="error_msg" class="alert alert-danger"><center>Please Choose Center.</center></div>');
	} else if(name=='' || email ==''){
		 $("#error_msg").replaceWith('<div id ="error_msg" class="alert alert-danger"><center>All Fields Are Compulsary.</center></div>');
		} else if(validateEmail(email)==false){
		 $("#error_msg").replaceWith('<div id="error_msg" class="alert alert-danger"><center>Invalid Email Address.</center></div>');
		} else if(validateMobile(phone)==false){
			 $("#error_msg").replaceWith('<div id="error_msg" class="alert alert-danger"><center>Invalid Mobile Number.</center></div>');
		} else {
	 $("#load_section").append('<center><img src="'+SITE_URL+'/resources/images/ajax-loader.gif" /></center>');
	 var server =SITE_URL+'/resources/ajax_submit/add_user.php';
        $.ajax({
          url: server,
          method: 'POST',
          data: dataString,
          cache: false,
          success: function(msg) { 
		 	$("#load_section").replaceWith('<div class="col-lg-12" id="load_section"><br /><div class="alert alert-success"><center>User Has Been Added Successfully</center></div></div>');
		     	window.location.href='http://s.leadroot.com/gateacademy/dashboard';		}
        });
		}
        return false; // <--- important, prevents the link's href (hash in this example) from executing.
		}

	function editUser(){
		var id = $(this).attr("index");
		var center_id =$(this).attr("center_id");
		var name = $(this).attr("name").replace(/"/gi,'');
		var email = $(this).attr("email");
		var phone =$(this).attr("phone");
		$("#user"+center_id+id).replaceWith('<tr class="success" id="user'+center_id+id+'"><td><input type="text" class="form-control" maxlength="64" id ="user_name_'+center_id+id+'" value ="'+name+'" /></td><td><input type="text" class="form-control" id="user_email_'+center_id+id+'" value="'+email+'" /></td><td><input type ="text" class="form-control" id="user_phone_'+center_id+id+'" value ="'+phone+'" maxlength="10" /> </td><td colspan="2"><button class="btn btn-primary" onclick="updateUserData('+id+','+center_id+')">Update</button></td></tr>');
		return false;
	}
		function deleteUser(){
		var id = $(this).attr("index");
		var center_id =$(this).attr("center_id");
		var name = $(this).attr("name");
		var center =$("#center_name"+center_id).val();
		var email = $(this).attr("email");
		var phone =$(this).attr("phone");
		var dataString ='name='+name+'&email='+email+'&phone='+phone+'&center='+center+'&id='+id;
		var server = SITE_URL+'/resources/ajax_submit/delete_user_data.php';
		$.ajax({
          		url: server,
          		method: 'POST',
          		data: dataString,
          		cache: false,
          		success: function(msg) { 
		 		$("#user"+center_id+id).replaceWith('<tr class="success" id = "user'+center_id+id+'"><td colspan="5">User deleted sucessfully</td></tr>');
		     			}
        	});
		return false;
	}

	function updateUserData(id,center_id){
		var name = $("#user_name_"+center_id+id).val().trim().replace(/"/gi,'');
		var email =$("#user_email_"+center_id+id).val();
		var phone =$("#user_phone_"+center_id+id).val();
		var center =$("#center_name"+center_id).val();
		var dataString ='name='+name+'&email='+email+'&phone='+phone+'&center='+center+'&id='+id;	
		if(name==''){
		 $("#error_msg"+id+center_id).replaceWith('<td id="error_msg'+id+center_id+'" colspan="5" class="alert alert-danger"><center>Name cant be empty.</center></td>');
		} else if(validateEmail(email)==false){
		 $("#error_msg"+id+center_id).replaceWith('<td id="error_msg'+id+center_id+'" colspan="5" class="alert alert-danger"><center>Invalid Email Address.</center></td>');
		} else if(validateMobile(phone)==false){
			 $("#error_msg"+id+center_id).replaceWith('<td id="error_msg'+id+center_id+'" colspan="5" class="alert alert-danger"><center>Invalid Mobile Number.</center></td>');
		} else {
		var server = SITE_URL+'/resources/ajax_submit/update_user_data.php';
		$.ajax({
          		url: server,
          		method: 'POST',
          		data: dataString,
          		cache: false,
          		success: function(msg) { 
		 		$("#user"+center_id+id).replaceWith('<tr class="success" id = "user'+center_id+id+'"><td>'+name+'</td><td>'+email+'</td><td>'+phone+'</td><td><a href="#" class="edit_user" name ="'+name+'" email ="'+email+'" phone ="'+phone+'" index = "'+id+'" center_id="'+center_id+'"> Edit</a></td><td><a href="#" class="delete_user" name =+name+"" email ="'+email+'" phone ="'+phone+'" index = "' +id+'" center_id ="'+center_id+'">Delete</a></td></tr>');
				$("#error_msg"+id+center_id).remove();
		     			}
        	});
		}
        	return false; // <--- important, prevents the link's href (hash in this example) from executing.
	}
	function submitEmailSubject(){
	var email_subject =$("#email_subject").val().replace(/"/gi,'');
	var student_subject =$("#student_email_subject").val().replace(/"/gi,'');
	var dataString='email_subject='+email_subject+'&student_email_subject='+student_subject;
	var server =SITE_URL+'/resources/ajax_submit/update_email_subject.php';
	if(email_subject == '' || email_subject== ' ') {
		 $("#error_msg").replaceWith('<div id="error_msg"><div class="alert alert-danger"><center>Subject Cant Be Empty.</center></div></div>');
	} else {
	  $.ajax({
          url: server,
          method: 'POST',
          data: dataString,
          cache: false,
          success: function(msg) { 
		 	$("#email_settings").replaceWith(' <div class="col-lg-12" id="email_settings"><br /><div class="alert alert-info">Email Subject : '+email_subject+'<button class="btn btn-primary" onclick="editEmailSubject(&#39;'+email_subject+'&#39;,&#39;'+student_subject+'&#39;)" style="float:right";>Edit</button></div></div><div class="col-lg-12" id="student_email_settings"><br /><div class="alert alert-info">Email Subject : '+student_subject+'<button class="btn btn-primary" onclick="editEmailSubject(&#39;'+email_subject+'&#39;,&#39;'+student_subject+'&#39;)" style="float:right";>Edit</button></div></div>');
		     			}
        });
	}
        return false; // <--- important, prevents the link's href (hash in this example) from executing.
	}
	function editEmailSubject(subject,student_subject){
		$("#email_settings").replaceWith('<div class="col-lg-12" id="email_settings"><br /><center><h3>Add The Subject of The Email</h3><br /><div class="input-group"><span class="input-group-addon">Subject of Counselor  Email :</span><input type="text"  name="email_subject" id="email_subject" class="form-control" value="'+subject+'"></div><br /><div class="input-group"><span class="input-group-addon">Subject of Student Email :</span><input type="text"  name="student_email_subject" id="student_email_subject" class="form-control" value="'+student_subject+'"></div><div><br /></div><div id="error_msg"></div><div><br /></div> <button class="btn btn-lg btn-primary" onClick="submitEmailSubject()">Save</button></center></div>');
		$("#student_email_settings").remove();
		}
	function submitCenterFieldName(){
	var field_name =$("#center_field_name").val().trim().replace(/"/gi,'');
	var dataString='field_name='+field_name;
	var server =SITE_URL+'/resources/ajax_submit/update_center_field_name.php';
	if(field_name == '' || field_name== ' ') {
		 $("#error_msg").replaceWith('<div id="error_msg"><div class="alert alert-danger"><center>Field Name Cant Be Empty.</center></div></div>');
	} else {
	  $.ajax({
          url: server,
          method: 'POST',
          data: dataString,
          cache: false,
          success: function(msg) { 
		 	$("#landingpage_settings").replaceWith('<div class="col-lg-12" id="landingpage_settings"><br /><div class="alert alert-info">Landing Page Center Field Name : '+field_name+'<button class="btn btn-primary" onclick="editCenterFieldName(&#39;'+field_name+'&#39;)" style="float:right";>Edit</button></div></div>');
		     			}
        });
	}
        return false; // <--- important, prevents the link's href (hash in this example) from executing.
	}
	function editCenterFieldName(field_name){
			$("#landingpage_settings").replaceWith('<div class="col-lg-12" id="landingpage_settings"><br /><center><h3>Add The Center Field Name of Your Landing Page</h3><br /><div class="input-group"><span class="input-group-addon">Center Field Name  :</span><input type="text"  name="center_field_name" id="center_field_name" class="form-control" value="'+field_name+'"></div><div><br /></div><div id="error_msg"></div><div><br /></div> <button class="btn btn-lg btn-primary" onClick="submitCenterFieldName()">Save</button></center></div>');
		}

 function changePassword(){
        var new_password =$("#new_password").val().trim();
        var new_password1 =$("#new_password1").val().trim();
        var dataString='new_password='+new_password;
        var server =SITE_URL+'/resources/ajax_submit/change_password.php';
        if(new_password != new_password1) {
                 $("#error_msg").replaceWith('<div id="error_msg"><div class="alert alert-danger"><center>Retyped password didn&#39;t match.</center></div></div>');
        } else if(new_password == '') {
                 $("#error_msg").replaceWith('<div id="error_msg"><div class="alert alert-danger"><center>Password cant be empty.</center></div></div>');
        } else {

          $.ajax({
          url: server,
          method: 'POST',
          data: dataString,
          cache: false,
          success: function(msg) {
                        $("#password_settings").replaceWith('<div class="alert alert-info"><center>Password Changed Successfully.</center></div>');
                                        }
        });
        }
        return false; // <--- important, prevents the link's href (hash in this example) from executing.
        }

	   function updateApiKeys(){
        var access_key =$("#access_key").val().trim();
        var secret_key =$("#secret_key").val().trim();
        var dataString='access_key='+access_key+'&secret_key='+secret_key;
        var server =SITE_URL+'/resources/ajax_submit/update_api_keys.php';
        if(access_key == '' || secret_key == '') {
                 $("#error_msg").replaceWith('<div id="error_msg"><div class="alert alert-danger"><center>All Fields Are Compulsary.</center></div></div>');
        } else {

          $.ajax({
          url: server,
          method: 'POST',
          data: dataString,
          cache: false,
          success: function(msg) {
                        $("#api_settings").replaceWith('<div class="alert alert-info"><center>API Keys Updated Successfully.</center></div>');
                                        }
        });
        }
        return false; // <--- important, prevents the link's href (hash in this example) from executing.

        }


jQuery(document).ready(function() {
        $("#add_announcements").click(addAnnouncements);
	$("#add_user").click(addUser);		  
	$(".edit_user").click(editUser);
	$(".delete_user").click(deleteUser);
      });
