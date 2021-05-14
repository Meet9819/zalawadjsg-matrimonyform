$('document').ready(function(){

  var email_state = false;
//
var mobile_state = false;


  $('#email').on('blur', function(){
 	var email = $('#email').val();
 	if (email == '') {
 		email_state = false;
 		return;
 	}
 	$.ajax({
      url: 'register.php',
      type: 'post',
      data: {
      	'email_check' : 1,
      	'email' : email,
      },
      success: function(response){
      	if (response == 'taken' ) {

         email_state = true;
          $('#email').parent().removeClass();
          $('#email').parent().addClass("form_success");
          $('#email').siblings("span").text('Email Verified');

      	}else if (response == 'not_taken') {

            email_state = false;
          $('#email').parent().removeClass();
          $('#email').parent().addClass("form_error");
          $('#email').siblings("span").text('Sorry... Email Not Verified');


      	 
      	}
      }
 	});
 });







});