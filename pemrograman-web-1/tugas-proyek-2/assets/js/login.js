function login() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    if (username == "admin" && password == "admin") {
        window.location = "kelola.html";
    } else if (username == "") {
        document.getElementById("username").style = "border: 1px solid red;"
        document.getElementById("password").style = "border: 1px solid red;"
        document.getElementById("warning").innerHTML = "Please Input Username and Password";
        document.getElementById("warning").style = "color:red; font-size: 15px";
    }  else if (password == "") {
        document.getElementById("password").style = "border: 1px solid red;"
        document.getElementById("warning").innerHTML = "Please Input Password";
        document.getElementById("warning").style = "color:red; font-size: 15px";
    }else {
        alert("Login Failed (Wrong Username or Password)");
        document.getElementById("username").value = "";
        document.getElementById("password").value = "";
        document.getElementById("warning").innerHTML = "";
    }
}