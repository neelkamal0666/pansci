 var SITE_URL = "http://pansci.in";
	var x = document.cookie;
	var p=window.location.pathname.substring(1);
	if(p=='admin/dashboard'){
	if(x==''){
	window.location.href=SITE_URL;
	}
	}
	 function addAnnouncements() {
	 $("#load_section").append('<center><img src="'+SITE_URL+'/resources/images/ajax-loader.gif" /></center>');
	 $('#load_section').load(SITE_URL+'/resources/layout/admin/add_announcements.php').fadeIn("slow");
        return false; // <--- important, prevents the link's href (hash in this example) from executing.
      }
	 
	 function SubmitAnnouncement() {
	 var announcement = $('#announcement').val().trim().replace(/"/gi,'');
	 var dataString = 'announcement='+announcement;
	 var server =SITE_URL+'/resources/ajax_submit/add_announcement.php';
	if(announcement =='') {
	 $("#error_msg").replaceWith('<div id ="error_msg" class="alert alert-danger"><center>Announcement cant be empty.</center></div>');
	} else {
	 $("#load_section").append('<center><img src="'+SITE_URL+'/resources/images/ajax-loader.gif" /></center>');
        $.ajax({
          url: server,
          method: 'POST',
          data: dataString,
          cache: false,
          success: function(msg) {
		 	$("#load_section").replaceWith('<div class="container" id="load_section"><br /><div class="alert alert-success"><center>Announcement Has Been Added Successfully.</center></div></div>');
	window.setTimeout(function(){ 
	window.location.href =SITE_URL+'/admin/dashboard';
	},2000);
		     			}
        });
	}
        return false; // <--- important, prevents the link's href (hash in this example) from executing.
      }

	  function deleteAnnouncement(){
		  var id = $(this).attr('id');
		 var dataString = 'id='+id;
		  var server =SITE_URL+'/resources/ajax_submit/delete_announcement.php';
		 $.ajax({
	          url: server,
        	  method: 'POST',
          	data: dataString,
           	 cache: false,
         	success: function() {
		 	 $("#load_section").replaceWith('<div class="container" id="load_section"><br /><div class="alert alert-success"><center>Announcement Has Been Deleted Successfully.</center></div></div>');
			window.setTimeout(function(){
			window.location.href =SITE_URL+'/dashboard';
			},2000);
         	 }
       		 });
		   return false; // <--- important, prevents the link's href (hash in this example) from executing.
		  }
	

jQuery(document).ready(function() {
        $("#add_announcements").click(addAnnouncements);
		$(".delete").click(deleteAnnouncement);		  
      });
