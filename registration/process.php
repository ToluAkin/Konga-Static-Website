<?php 
        $first_name = $_POST['firstname']; 
        $last_name = $_POST['lastname'];
        $email_address = $_POST['email_address']; 
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_passsword'];
        $phone_number = $_POST['phone_number'];
        $gender = $_POST['Gender'];
        $country = $_POST['country'];  
        saveToFile($first_name, $last_name, $email_address, $password, $confirm_password, $phone_number, $gender, $country);
        header('Location:success.html');

    function saveToFile($first_name, $last_name, $email_address, $password, $confirm_password, $phone_number, $gender, $country) {   
        $fileHandler = fopen('record.txt', 'a');   
        $string = $first_name . ',' . $last_name . ',' . $email_address . ',' . $password . ',' . $confirm_password . ',' . $phone_number . ',' . $gender . ',' . $country . "\n";   
        fwrite($fileHandler, $string);   
        fclose($fileHandler); 
    }

    function saveToDatabase($first_name, $last_name, $email_address, $password, $confirm_password, $phone_number, $gender, $country) {   
        $serverName = "localhost";   
        $database = "Registration";   
        $username = "root";   
        $password = "";

    //Open database connection   
    $conn = mysqli_connect($serverName, $username, $password, $database);

    // Check that connection exists   
    if (!$conn) {       
        die("Connection failed: " . mysqli_connect_error());  
     }   

       $sql = "INSERT INTO users (first_name, last_name, email_address, password, confirm_password, phone_number, gender, country, created_at)  VALUES ('$first_name', 'last_name', '$email_address', 'password', 'confirm_password', 'phone_number', 'gender', 'country', NOW())";  
        $result = mysqli_query($conn, $sql);

    //Check for errors   
    if (!$result) {     
          die("Error: " . $sql . "<br>" . mysqli_error($conn));  
        }  

    //Close the connection   
    mysqli_close($conn); 
    }
?>
