
function quickSearch(){
	var search = $('#search_for_internship').val();
	
	$.ajax({
		url: "scripts/search.php", 
		type: "POST",
		data: {search:search},
		success: function(result){
			$('.container').css('background','#fff');
			$('.container').html(result);
    }});

}

function registerSuccess(){

      var username = $("#username").val();
      var password = $("#password").val();
      var acc_type = $("#acc_type").val();

      $.ajax({
         url: "scripts/register.php", 
         type: "POST",
         data: {username:username,password:password,acc_type:acc_type},
         success: function(result){
            if(result=="SUCCESS E")
            	$(location).attr("href","employer_home.php");
            else if(result=="SUCCESS S")
            	$(location).attr("href","student_home.php");
            else
            	alert(result);

      }});

}

function loginSuccess(){

      var username = $("#username").val();
      var password = $("#password").val();

      $.ajax({
         url: "scripts/login.php", 
         type: "POST",
         data: {username:username,password:password},
         success: function(result){
            if(result=="INVALID DETAILS")
            	alert(result);
            else{

            	if(result=='S')
            		$(location).attr("href","student_home.php");
            	else
            		$(location).attr("href","employer_home.php");
            }

      }});

}

function applyNow(prop){
	username = prop.getAttribute('data-user');
	internship_id = prop.getAttribute('id');

	$.ajax({
		url: "scripts/apply.php",
		type: "POST",
		data: {username:username,internship_id:internship_id},
		success: function(result){
			alert(result);
		}
	})
}

function post(){
	var title = $("#int_title").val();
	var sdate = $("#start-date").val();
	var adate = $("#apply-by").val();
	var stipend = $("#int_stipend").val();
	var desc = $("#desc").val();
    if(sdate>adate){
	$.ajax({
		url: "scripts/post.php",
		type: "POST",
		data: {title:title,sdate:sdate,adate:adate,stipend:stipend,desc:desc},
		success: function(result){
			alert(result);
			$("#int_title").val()='';
			$("#start-date").val()='';
			$("#apply-by").val()='';
			$("#int_stipend").val()='';
			$("#desc").val()='';
		}
	});}
	else {
		alert("Enter Valid Dates");
	}
}

function apply(){
	$(location).attr("href","login.php");
}

function login(){
	$(location).attr("href","login.php");
}

function register(){
	$(location).attr("href","register.php");
}