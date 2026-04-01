function validate(){
    let u = document.getElementById("user").value;
    let p = document.getElementById("pass").value;

    if(u=="" || p==""){
        alert("All fields required");
        return false;
    }
}
