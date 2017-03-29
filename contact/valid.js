
$('#contact-form').submit(function(e){
    e.preventDefault();
    console.log("Validating");
    validateform(e);
});

function validateform(e) {
	var valid;	
    valid=verify();
     if(valid)
     {
         console.log("valid");
         jQuery.ajax({
		url: "mail/email.php",		   data:'userName='+$("#userName").val()+'&userEmail='+$("#userEmail").val()+'&content='+$("#content").val()+
            '&phone='+$("#icon_telephone").val(),
		type: "POST",
		success:function(data){
            console.log(data);
		$(".form-wrapper").html(data);
		},
		error:function (data){
          $(".form-wrapper").html(data);
        }
		});
     }
    
   function verify()
    {
        var valid=true;
    if(!$("#userName").val()) {
		$("#userName-info").html("(required)");
		$("#userName").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#userEmail").val()) {
		$("#userEmail-info").html("(required)");
		$("#userEmail").css('background-color','#FFFFDF');
		valid = false;
	}
    if(!$("#icon_telephone").val()) {
		$("#phone-info").html("(required)");
		$("#icon_telephone").css('background-color','#FFFFDF');
		valid = false;
	}
    if(!$("#content").val()) {
		$("#msg-info").html("(required)");
		$("#content").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#userEmail-info").html("(Email is invalid)");
		valid = false;
	}
   
    if(!$("#icon_telephone").val().match( /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/)) {
		$("#phone-info").html("(phone number is not invalid)");
		valid = false;
	}
   
	return valid;
    }
}
