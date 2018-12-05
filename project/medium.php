<?php  
    session_start();
    $serverName = "localhost";   
    $database = "scrapbook";   
    $username = "root";   
    $dbpassword = "mysql";

    //Open database connection   
    $conn = mysqli_connect($serverName, $username, $dbpassword, $database);

    // Check that connection exists   
    if (!$conn) {       
        die("Connection failed: " . mysqli_connect_error());  
    }

    if (isset($_POST['submit'])){
        $username = mysqli_escape_string($conn,$_POST['username']);
        $pswd = mysqli_escape_string($conn,$_POST['pswd']);
                    
       if(empty($username) || empty($pswd)){
            echo "All fields are required";
    }  
    else{
       $sql = "SELECT * FROM  users WHERE username = '$username' and pswd ='$pswd' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
    }
    
    if ($resultCheck > 0)  { 
        echo $resultCheck;
        $row = mysqli_fetch_assoc($result);
        echo $row['username'];
        echo $row['pswd'];

        $username = $row['username'];
        $pswd = $row['pswd'];
        
        $_SESSION['username'] = $username;
        $_SESSION['pswd'] = $pswd;
        header("Location:saved.html");
    }
    else{
          die("Error: " . $sql . "<br>" . mysqli_error($conn));   
        header("Location:signin.html");
    }
    //Close the connection   
    mysqli_close($conn); 
    
    }
?>