function valid() {
	// body...
	var userName = document.forms["form"]["username"].value;
	var password = document.forms["form"]["password"].value;

	var flag = true;
    if(userName===""){
    	document.getElementById('userNameError').innerHTML="Username required";
    	flag = false;
    }
    else{
        document.getElementById('userNameError').innerHTML="";
    }
     if(password===""){
    	document.getElementById('passwordError').innerHTML="Password required";
    	flag = false;
    }
    else{
        document.getElementById('passwordError').innerHTML="";
    }
    return flag;
}
