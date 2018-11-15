<?php $message = ''; 
    if (isset($_POST['submit'])) {    
        $first_name = $_POST['firstname']; 
        $last_name = $_POST['lastname'];
        $email_address = $_POST['email_address']; 
        $psw = $_POST['psw'];
        $con_password = $_POST['con_password'];
        $phone_number = $_POST['phone_number'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        if (empty($first_name) || empty($last_name) || empty($email_address) || empty($psw) || empty($con_password) || empty($phone_number) || empty($gender) || empty($country)) {        
            $message = '<p class="error">All fields are required</p>';  
        }  
        elseif (strlen($first_name) < 3 || strlen($first_name) > 20) {   
            $message .= '<p class="error">First Name must be between 3 and 20 characters</p>'; 
        }
        elseif (strlen($last_name) < 3 || strlen($last_name) > 20) {   
            $message .= '<p class="error">First Name must be between 3 and 20 characters</p>'; 
        }
        elseif (strlen($email_address) < 10 || strlen($email_address) > 50) {   
            $message .= '<p class="error">E-mail must be between 10 and 50 characters</p>'; 
        }
        elseif (strlen($psw) < 10 || strlen($psw) > 15) {   
            $message .= '<p class="error">First Name must be between 10 and 15 characters</p>'; 
        }
        elseif (strlen($con_password) < 10 || strlen($con_password) > 15) {   
                $message .= '<p class="error">First Name must be between 3 and 20 characters</p>'; 
        }
        elseif (!is_numeric($phone_number)) {    
        $message .= '<p class="error">Phone number should be numeric</p>'; 
        }
        elseif (strlen($phone_number) != 10) {     
        $message .= '<p class="error">Phone number should be 10 digits long</p>'; 
        }
        if (empty($message)) {            
        $message = '<p class="success">All inputs are valid, thank you</p>';       
        }   
    } 
?> 
<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>sign-up form</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="stylesheet.css">
            <style>        
                .error {            
                    color: red;        
                }        
                .success {            
                    color: green;        
                } 
            </style> 
    </head>
    <body>
        <p>Sign-Up Enquiry form</p>
        <?php echo $message; ?>
        <hr>
         <div class= "bg">
                <form method="POST" action="">
                      <label for="first_name">* First name <br></label>
                    <input type ="text" name = "firstname" placeholder = "First name"/>
                    <p></p>
                    <label for="last_name"> * Last name <br> </label> 
                    <input type = "text" name = "lastname" placeholder = "Last name"/>
                    <p></p>
                    <label for="email_address">* E-mail Address<br></label> 
                    <input type = "text" name = "email_address" placeholder = "E-mail Address"/>
                    <p></p>
                    <label for="password">* Password <br></label> 
                    <input type = "password" name = "psw" id = "psw" placeholder = "Password"/>
                    <p></p>
                    <label for="password">* Confirm Password <br></label> 
                    <input type = "password" name = "con_password" id = "con_password" placeholder = "Confirm Password"/>
                    <p></p>
                    <label for="phone_number">* Phone Number <br></label>
                    <input type = "number" name = "phone_number" placeholder = "Phone Number"/>
                    <p></p>
                    <label for="gender">Gender<br></label>
                    <select name="gender" id="gender">
                        <option value="-1" selected>Choose one</option> 
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <p></p>
                    <label for="country">Country:<br></label>
                    <select name="country" id="country" >
                        <option value="-1" selected>Choose one</option> 
                        <option value="nigeria">Nigeria</option>
                        <option value="ghana">Ghana</option>
                        <option value="kenya" >Kenya</option>
                    </select>
                    <p></p>
                    <input type="checkbox">
                    <label for="Terms and Conditions">Accept the terms & conditions to continue</label>
                    <p></p>
                    <button type = "submit" name="submit" class = "btn">submit</button>
            </form>
        </div>
    </body>
</html>