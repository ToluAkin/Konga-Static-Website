<?php  
    $serverName = "localhost";   
    $database = "Registration";   
    $username = "root";   
    $dbpassword = "mysql";

    //Open database connection   
    $conn = mysqli_connect($serverName, $username, $dbpassword, $database);

    // Check that connection exists   
    if (!$conn) {       
        die("Connection failed: " . mysqli_connect_error());  
    }

    if (isset($_POST['submit'])){
        $email_address = mysqli_escape_string($conn,$_POST['email_address']);
        $password = mysqli_escape_string($conn,$_POST['pwd']);
                    
       if(empty($email_address) || empty($password)){
            echo "All fields are required";
    }  
    else{
       $sql = "SELECT * FROM  users WHERE email_address = '$email_address' and password ='$password' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
    }
    
    if ($resultCheck > 0)  { 
        echo $resultCheck;
        $row = mysqli_fetch_assoc($result);
        echo $row['first_name'];
        echo $row['last_name'];
        echo $row['email_address'];
        echo $row['password'];
        echo $row['confirm_password'];
        echo $row['phone_number'];

        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email_address = $row['email_address'];
        $password = $row['password'];
        $confirm_password = $row['confirm_password'];
        $phone_number = $row['phone_number'];

        setcookie('first_name', $first_name, time()+3600, "/", "", 0);
        setcookie('last_name', $last_name, time()+3600, "/", "", 0);
        setcookie('email_address', $email_address, time()+3600, "/", "", 0);
        setcookie('password', $password, time()+3600, "/", "", 0);
        setcookie('confirm_password', $confirm_password, time()+3600, "/", "", 0);
        setcookie('phone_number', $phone_number, time()+3600, "/", "", 0);
        header("Location:cookies_page2.php");
    }
    else{
          die("Error: " . $sql . "<br>" . mysqli_error($conn));   
        header("Location:signin.html");
    }
    //Close the connection   
    mysqli_close($conn); 
    
    }
?>