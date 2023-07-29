function verify() {
    let company = document.getElementById("text").value;
    let contact = document.getElementById("text1").value;
    let phone = document.getElementById("text2").value;
    let email = document.getElementById("text3").value;
    let alamat_web = document.getElementById("text4").value;
    let alamat_kantor = document.getElementById("textarea1").value;

    if (company == "" || contact == "" || phone == "" || email == "" || alamat_web == "" || alamat_kantor == "") {
        alert("Please Fill All Form")
        document.getElementById("text").style = "border: 1px solid red;"
        document.getElementById("text1").style = "border: 1px solid red;"
        document.getElementById("text2").style = "border: 1px solid red;"
        document.getElementById("text3").style = "border: 1px solid red;"
        document.getElementById("text4").style = "border: 1px solid red;"
        document.getElementById("textarea1").style = "border: 1px solid red;"
    }
    else {
        alert("Registrasi Berhasil");
        window.location = "kelola.html"
    }
}