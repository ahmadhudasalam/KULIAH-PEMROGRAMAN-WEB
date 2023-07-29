function login(){
    event.preventDefault();
    
    let username = document.getElementById('uname').value;
    let password = document.getElementById('pass').value;

    if( username == "ahmad2017" && password == "integrity" ){
        location.replace("sukses.html");
        alert("Login Sukses");
    }
    else{
        alert("Login Gagal");
    }
}

