var valid_un = false;
var valid_pw = false;

function validate_un() {
	var ck_name = /^[A-Za-z]{3,8}$/;
	var ck_email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if ((document.signup.user_name.value.search(ck_name)==-1) && (document.signup.user_name.value.search(ck_email)==-1)) {
		$('#unError').html("Please enter a valid user name or email address");
		valid_un = false;
	}
	else {
		$('#unError').html('');
		valid_un = true;
	}
}

function validate_pw () {

	var ck_pw = /^[a-z0-9_-]{6,18}$/;

	if (document.signup.password.value.search(ck_pw)==-1) {
		$('#pwError').html("Please enter a valid password");
		valid_pw = false;
	}
	else {
		$('#pwError').html('');
		valid_pw = true;
	}
}

$(document).ready(function() {
	$('#submit').click(function(event) {
		if(!valid_un || !valid_pw) {
			event.preventDefault();
			$('#noSubmit').html("Please enter a valid username and password!");
		}
		if(document.signup.user_name.value === "" || document.signup.user_name.value === "null") {
			event.preventDefault();
			$('#noSubmit').html("You must enter a user name");
		}
		else if(document.signup.password.value === "" || document.signup.password.value === "null") {
			event.preventDefault();
			$('#noSubmit').html("You must enter a password");
		}
	});
});