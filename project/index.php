<?php $message = ''; 
    if (isset($_POST['submit'])) {   
        $username = $_POST['username'];  
        $firstname = $_POST['firstname']; 
        $lastname = $_POST['lastname'];
        $email = $_POST['email']; 
        $pswd = $_POST['pswd'];
        $cpswd = $_POST['cpswd'];
        if (empty($username) || empty($firstname) || empty($lastname) || empty($email) || empty($pswd) || empty($cpswd)) {        
            $message = '<p class="error">All fields are required</p>';  
        } 
        elseif (strlen($username) < 3 || strlen($username) > 20) {   
            $message .= '<p class="error">First Name must be between 3 and 20 characters</p>'; 
        } 
        elseif (strlen($firstname) < 3 || strlen($firstname) > 20) {   
            $message .= '<p class="error">First Name must be between 3 and 20 characters</p>'; 
        }
        elseif (strlen($lastname) < 3 || strlen($lastname) > 20) {   
            $message .= '<p class="error">First Name must be between 3 and 20 characters</p>'; 
        }
        elseif (strlen($email) < 10 || strlen($email) > 50) {   
            $message .= '<p class="error">E-mail must be between 10 and 50 characters</p>'; 
        }
        elseif (strlen($pswd) < 10 || strlen($pswd) > 15) {   
            $message .= '<p class="error">First Name must be between 10 and 15 characters</p>'; 
        }
        elseif (strlen($cpswd) < 10 || strlen($cpswd) > 15) {   
            $message .= '<p class="error">First Name must be between 3 and 20 characters</p>'; 
        }
        if (empty($message)) {            
        $message = '<p class="success">All inputs are valid, thank you</p>';       
        }   
    } 
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Green Scrapbook</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap-4.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css">
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
    <nav class="navbar navbar-expand-lg fixed-top ">  
        <a class="navbar-brand" href="index.html">Green Scrapbook</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">     
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <li class="nav-item">
                    <a class="nav-link" data-value="signup" href="signup.html">Sign up</a>        
                </li>  
                <li class="nav-item">
                    <a class="nav-link" data-value="login" href="signin.html">Log in</a>    
                </li>
            </ul>
        </div>
    </nav>
    <br><br><br><br>
    <form method="POST" action="">
        <p class="lead">Please fill  in your information:</p>
        <?php echo $message; ?>
        <br>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Username" >
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <input type="text" class="form-control" id="fname" placeholder="First Name" >
            </div>
            <div class="form-group col-md-6">
            <input type="text" class="form-control" id="lname" placeholder="Last Name" >
            </div>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="Email  Address" >
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="pswd" placeholder="Password" >
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="pswd" placeholder="Confirm Password" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <footer>
        <p>CONTACT US</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
        <p>All rights reserved. &copy; 2018 Green Scrapbook</p>
    </footer>
    <script src="validation.js"></script>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script> 
    </body>
</html>