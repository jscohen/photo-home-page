function validate_un() {
	var ck_name = /^[A-Za-z]{3,8}$/;
	var ck_email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if ((document.signup.user_name.value.search(ck_name)==-1) && (document.signup.user_name.value.search(ck_email)==-1)) {
		$('#unError').html("Please enter a valid user name or email address");
	}
	else {
		$('#unError').html('');
	}
}

function validate_pw () {

	var ck_pw = /^[a-z0-9_-]{6,18}$/;

	if (document.signup.password.value.search(ck_pw)==-1) {
		$('#pwError').html("Please enter a valid password");
	}
	else {
		$('#pwError').html('');
	}
}
