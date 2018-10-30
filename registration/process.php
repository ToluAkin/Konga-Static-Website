<?php 
        $name = $_POST['first_name']; 
        $email = $_POST['email_address']; 
        saveToFile($name, $email_address); 
        header('Location:success.html');
    function saveToFile($name, $email_address) {   
        $fileHandler = fopen('record.txt', 'a');   
        $string = $name . ',' . $email_address . "\n";   
        fwrite($fileHandler, $string);   
        fclose($fileHandler); 
}
    function saveToDatabase($name, $email) {   
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
       $sql = "INSERT INTO users (first_name, email_address, created_at)       VALUES ('$name', '$email_address', NOW())";  
        $result = mysqli_query($conn, $sql);
    //Check for errors   
    if (!$result) {     
          die("Error: " . $sql . "<br>" . mysqli_error($conn));  
         }  
    //Close the connection   
    mysqli_close($conn); 
}
?>