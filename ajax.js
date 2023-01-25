function validForm() {
	var name = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var firstname = document.getElementById("firstname").value;
	var lastname = document.getElementById("lastname").value;
	var email = document.getElementById("email").value;
	if (name == '' || password == '' || firstname == '' || lastname == '' ||email == '') {
		alert("Complete all the required fields");
	} else {
		var username1 = document.getElementById("username_result");
		var password1 = document.getElementById("password_result");
		var firstname1 = document.getElementById("firstname_result");
		var lastname1 = document.getElementById("lastname_result");
		var email1 = document.getElementById("email_result");
		if (username1.innerHTML == 'Must be 4+ letters' || password1.innerHTML == 'Password too short' || firstname1.innerHTML == 'Invalid' || lastname1.innerHTML == 'Invalid' || email1.innerHTML == 'Invalid email') {
			alert("Complete valid information");
		} else {
			document.getElementById("regForm").submit();
		}
	}
}
 
function validate(field, value) {
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	} else { 
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
 
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
			document.getElementById(field).innerHTML = "Validating..";
		} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById(field).innerHTML = xmlhttp.responseText;
		} else {
			document.getElementById(field).innerHTML = "Error Occurred. <a href='signup.php'>Reload Or Try Again</a> the page.";
		}
	}
	xmlhttp.open("GET", "validation.php?field=" + field + "&value=" + value, true);
	xmlhttp.send();
}