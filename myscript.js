

$(document).ready(function(){

	$("button").click(function(){
		var username = $("#username").val();
		var password = $("#password").val();


  $.ajax({
  	type:"POST",
  	url:"user-auth.php",
  	data:{username:username, password:password},
  	dataType:'json',
  	success:function(response){
  		var len = response.length;

  		for(var x = 0 ;x < len; x++){
			var result = response[x]['result'];

			if (result == "success") {
				window.location ='home.php';
			}else{
				window.location ='login.php';
			}
        }
  	}
  });

});

});

$(document).ready(function(){
	var table = new DataTable('#userTable');
});

$(document).ready(function(){
	$("#add").click(function(){
		$("#addModal").show();
	})
});

