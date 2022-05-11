const form = document.getElementById('form');

error=false;

form.addEventListener('submit', e => {


	validateForm();
  console.log(error)

  if(error){
    e.preventDefault();
  }
  error=false

});

function displayError(ID,Msg){
    document.getElementById(ID).innerHTML = Msg;
    error = true;
}

function displayMessage(ID,Msg){
    document.getElementById(ID).innerHTML = Msg;
}

function validateForm(){
    var username = document.Form.username.value;
    var email = document.Form.email.value;
    var mobileno = document.Form.mobileno.value;
    var gender = document.Form.gender.value;
    var password = document.Form.password.value;
    var password2 = document.Form.password2.value;

    var nameErr = emailErr = mobileErr = genderErr =true;

    if(username == "") {
        displayError("nameErr", "Please enter your name");
        var elem = document.getElementById("username");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");

    } else {
        var regex = /^[a-zA-Z0-9\S]+$/;
        if(regex.test(username) === false) {
            displayError("nameErr", "Please enter a valid name");
            var elem = document.getElementById("username");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        }else{
            displayMessage("nameErr", "");
            nameErr = false;
            var elem = document.getElementById("username");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");


        }
    }

    if (email ==""){
        displayError("emailErr","Please enter your email");
        var element = document.getElementById("email");
        element.classList.add("input-2");
        element.classList.remove("input-1");
    }else{
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false){
            displayError("emailErr","Please enter a valid email")
            var element = document.getElementById("email");
            element.classList.add("input-2");
            element.classList.remove("input-1");
        }else{
            displayMessage("emailErr","")
            emailErr=false;
            var element = document.getElementById("email");
            element.classList.remove("input-2");
            element.classList.add("input-1");

        }
    }

    if (mobileno ==""){
        displayError("mobileErr","Please enter your mobile number.");
        var element = document.getElementById("mobileno");
        element.classList.add("input-2");
        element.classList.remove("input-1");
    }else{
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(mobileno) === false ){
            displayError("mobileErr","Please enter a valid mobile number")
            var element = document.getElementById("mobileno");
            element.classList.add("input-2");
            element.classList.remove("input-1");
        }else{
            displayMessage("mobileErr","")
            mobileErr=false;
            var element = document.getElementById("mobileno");
            element.classList.add("input-1");
            element.classList.remove("input-2");

        }
    }

    if(gender == "") {
        displayError("genderErr", "Please select your gender");
        var elem = document.getElementById("gender");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        displayMessage("genderErr", "");
        genderErr = false;
        var elem = document.getElementById("gender");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }

  	if (password ==""){
    		displayError("passErr", "Password cannot  be blank");
        var elem = document.getElementById("password");
        elem.classList.add("input-2");
        elem.classList.remove("input-1");
  	}else{
      displayMessage("passErr", "");
      passErr =false;
  		var elem = document.getElementById("password");
  		elem.classList.add("input-1");
  		elem.classList.remove("input-2");
	}
  if (password2 ===""){
      displayError("pass2Err", "Password Check cannot be blank");
      var elem = document.getElementById("password2");
      elem.classList.add("input-2");
      elem.classList.remove("input-1");
  }else if(password!=password2){
      displayError("pass2Err", "Password does not match");
      var elem = document.getElementById("password2");
      elem.classList.add("input-2");
      elem.classList.remove("input-1");
  }else{
    displayMessage("pass2Err", "");
    pass2Err =false;
    var elem = document.getElementById("password2");
    elem.classList.add("input-1");
    elem.classList.remove("input-2");
}

}
