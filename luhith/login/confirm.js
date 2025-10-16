function checkPassword() {
	var password = document.getElementById("password").value;
	var confirmPassword = document.getElementById("cpassword").value;
	
	if (password !== confirmPassword) {
		alert("Password Mismatched!");
		return false;
	} else {
		alert("Success");
		return true;
	}
}