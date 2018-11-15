function validateForm() {
 
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

    var email = document.forms["regForm"]["email address"];           
    if (email.value == "") {               
        alert("Please input your email address");               
        email.focus();                
        return false;           
    }  
    
    var psw = document.forms["regForm"]["psw"];
    if (psw.value == ""|| isNaN(psw.value)) {
        alert("Password should be numeric");
        psw.focus();
        return false;
    }

    var con_password = document.forms["regForm"]["con_password"];
    if (con_password.value == ""|| isNaN(con_password.value)) {
        alert("Password should be numeric");
        con_password.focus();
        return false;
    }

    var number = document.myForm.phonenumber;           
    if (number.value == "" || isNaN(phonenumber.value)) {               
        alert("Phone number should be numeric.");               
        number.focus();               
        return false;           
    }

    if (number.value.length != 11) {               
        alert( "Phone number should be exactly 11 digits.");               
        number.focus();               
        return false;           
    }

    var gender = document.regForm.gender;           
    if (gender.value == "-1") {               
        alert("Please select your gender");               
        return false;           
    }
    else{
    return true;
    }

    var country = document.regForm.country;           
    if (country.value == "-1") {               
        alert("Please select your country");               
        return false;           
    }
    else{
    return true; 
    } 
}