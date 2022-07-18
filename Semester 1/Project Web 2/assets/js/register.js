function verify() {
    let nama = document.getElementById("nama").value;
    let username = document.getElementById("username").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let repassword = document.getElementById("repassword").value;

    if (nama == "" || username == "" || email == "" || password == "" || repassword == "") {
        alert("Please Fill All Form")
        document.getElementById("nama").style = "border: 1px solid red;"
        document.getElementById("username").style = "border: 1px solid red;"
        document.getElementById("email").style = "border: 1px solid red;"
        document.getElementById("password").style = "border: 1px solid red;"
        document.getElementById("repassword").style = "border: 1px solid red;"
    }
    else {
        alert("Register Berhasil");
        window.location = "login.html"
    }
}

//     if (nama = ""){
//         return nama;
//     } else {
//         alert("Please Input Your Name");
//     }
//     if (username = ""){
//         return username;
//     } else {
//         alert("Please Input Your Name");
//     }
//     if (email = ""){
//         return email;
//     } else {
//         alert("Please Input Your Name");
//     }
//     if (password = ""){
//         return password;
//     } else {
//         alert("Please Input Your Password");
//     }
//     if (repassword = ""){
//         return repassword;
//     } else {
//         alert("Please Rewrite Your Password");
//     }
//     if (agreeTerms = ""){
//         return agreeTerms;
//     } else {
//         alert("Please Sign the Agreement");
//     }

//     // if (nama == true && username == true && email == true && password == true && repassword == true && agreeTerms == true){
//     //     window.location = "login.html"
//     // } else if (nama == false) {
//     //     document.getElementById("nama").style = "border: 1px solid red;"
//     //     document.getElementById("nama").innerHTML = "Please Input Your Name";
//     //     document.getElementById("nama1").style = "color:red; font-size: 15px";
//     // } else if (username == false) {
//     //     document.getElementById("username").style = "border: 1px solid red;"
//     //     document.getElementById("username1").innerHTML = "Please Input Username";
//     //     document.getElementById("username1").style = "color:red; font-size: 15px";
//     // } else if (email == false) {
//     //     document.getElementById("email").style = "border: 1px solid red;"
//     //     document.getElementById("email1").innerHTML = "Please Input Email";
//     //     document.getElementById("email1").style = "color:red; font-size: 15px";
//     // } else if (password == false) {
//     //     document.getElementById("password").style = "border: 1px solid red;"
//     //     document.getElementById("password1").innerHTML = "Please Input Password";
//     //     document.getElementById("password1").style = "color:red; font-size: 15px";
//     // } else if (repassword == false) {
//     //     document.getElementById("repassword").style = "border: 1px solid red;"
//     //     document.getElementById("repassword1").innerHTML = "Please Repeat";
//     //     document.getElementById("repassword1").style = "color:red; font-size: 15px";
//     // } else {
//     //     document.getElementById("agreeTerms").style = "border: 1px solid red;"
//     //     document.getElementById("agreeTerms1").innerHTML = "Please Sign the Agreement";
//     //     document.getElementById("agreeTerms1").style = "color:red; font-size: 15px";
//     // }
// }
