function changeForm(){
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
}

function userLogin(){
    var email = document.getElementById("loginEmail").value;
    var password = document.getElementById("loginPass").value;

    if(email == "" || password == ""){ //if any one of the input field is empty
        loginMsg.innerHTML = "All field is Mandatory!";
    }
    else{ //if every field is not empty
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200) { //js return success status
                if(!this.response){ //if register successfull will show the register successfully message and redirect them to index.php after 1 second
                    loginMsg.innerHTML = "<span class='successMsg'>Login Successfully!</span>";

                    setTimeout(function(){ //redirect them to index.php after 1 second
                        document.location.href = "index.php";
                    },1000);

                }
                else{ //if register not successfull will show the error message for exmaple invalid email format
                    loginMsg.innerHTML = this.response;
                } 
            }
        }

        var data = "email="+email+"&password="+password+"&type=login";

        xmlhttp.open("POST", "users.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);
    }
}

function customerRegister(){
    var name = document.getElementById("cusRegName").value;
    var email = document.getElementById("cusRegEmail").value;
    var phoneNum = document.getElementById("cusRegPhone").value;
    var password = document.getElementById("cusRegPass").value;
    var confirmPassword = document.getElementById("cusRegConPass").value;

    if(name == "" || email == "" || phoneNum == "" || password == "" || confirmPassword == ""){ //if any one of the input field is empty
        customerRegMsg.innerHTML = "All field is Mandatory!";
    }
    else{ //if every field is not empty
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200) { //js return success status
                if(!this.response){ //if register successfull will show the register successfully message and redirect them to index.php after 1 second
                    customerRegMsg.innerHTML = "<span class='successMsg'>Register Successfully!</span>";

                    setTimeout(function(){ //redirect them to index.php after 1 second
                        document.location.href = "index.php";
                    },1000);
                }
                else{ //if register not successfull will show the error message for exmaple invalid email format
                    customerRegMsg.innerHTML = this.response;
                } 
            }
        }

        var data = "name="+name+"&email="+email+"&phoneNum="+phoneNum+"&password="+password+"&confirmPass="+confirmPassword+"&type=register&user=customer";

        xmlhttp.open("POST", "users.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);
    }
}

function merchantRegister(){
    var name = document.getElementById("merRegName").value;
    var email = document.getElementById("merRegEmail").value;
    var phoneNum = document.getElementById("merRegPhone").value;
    var password = document.getElementById("merRegPass").value;
    var confirmPassword = document.getElementById("merRegConPass").value;

    if(name == "" || email == "" || phoneNum == "" || password == "" || confirmPassword == ""){ //if any one of the input field is empty
        merchantRegMsg.innerHTML = "All field is Mandatory!";
    }
    else{ //if every field is not empty
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200) { //js return success status
                if(!this.response){ //if register successfull will show the register successfully message and redirect them to index.php after 1 second
                    merchantRegMsg.innerHTML = "<span class='successMsg'>Register Successfully!</span>";

                    setTimeout(function(){ //redirect them to index.php after 1 second
                        document.location.href = "index.php";
                    },1000);
                }
                else{ //if register not successfull will show the error message for exmaple invalid email format
                    merchantRegMsg.innerHTML = this.response;
                } 
            }
        }

        var data = "name="+name+"&email="+email+"&phoneNum="+phoneNum+"&password="+password+"&confirmPass="+confirmPassword+"&type=register&user=merchant";

        xmlhttp.open("POST", "users.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(data);
    }
}