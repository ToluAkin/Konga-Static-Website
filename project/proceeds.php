<?php 
    $title = $_POST['title'];
    $note = $_POST['note'];  
    saveToDatabase($title, $note);
    saveToFile($title, $note);
    header('Location:save.html');

    function saveToFile($title, $note) {   
        $fileHandler = fopen('entries.txt', 'a');   
        $string = $title . ',' . $note . "\n";   
        fwrite($fileHandler, $string);   
        fclose($fileHandler); 
    }

    function saveToDatabase($title, $note) {   
        $serverName = "localhost";   
        $database = "scrapbook";   
        $dbusername = "root";   
        $dbpassword = "mysql";

    //Open database connection   
    $conn = mysqli_connect($serverName, $dbusername, $dbpassword, $database);

    // Check that connection exists   
    if (!$conn) {       
        die("Connection failed: " . mysqli_connect_error());  
     }   

       $sql = "INSERT INTO notes (title, note, created_at)  
                VALUES ('$title','$note', NOW())";  
        $result = mysqli_query($conn, $sql);

    //Check for errors   
    if (!$result) {     
          die("Error: " . $sql . "<br>" . mysqli_error($conn));  
        }  

    //Close the connection   
    mysqli_close($conn); 
    }
?>