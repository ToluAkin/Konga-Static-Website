function validateForm() {
    var name = document.regForm.username;           
    if (name.value == "") {               
        alert("Please input your Username");               
        name.focus();               
        return false;           
    }
    var name = document.regForm.firstname;           
    if (name.value == "") {               
        alert("Please input your first name");               
        name.focus();               
        return false;           
    }

    var name = document.regForm.lastname;           
    if (name.value == "") {               
        alert("Please input your last name");               
        name.focus();               
        return false;           
    } 

    var email = document.forms["regForm"]["email"];           
    if (email.value == "") {               
        alert("Please input your email address");               
        email.focus();                
        return false;           
    }  
    
    var pswd = document.forms["regForm"]["pswd"];
    if (pswd.value == ""|| isNaN(pswd.value)) {
        alert("Password should be numeric");
        psw.focus();
        return false;
    }

    var cpswd = document.forms["regForm"]["cpswd"];
    if (con_password.value == ""|| isNaN(con_password.value)) {
        alert("Password should be numeric");
        con_password.focus();
        return false;
    }

}