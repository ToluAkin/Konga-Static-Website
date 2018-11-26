<?php
    session_start();

    $_SESSION['firstname'] = 'Toluwalase';
    $_SESSION['last_name'] = 'Akintoye';
    $_SESSION['email_address'] = 'toluakintoye@gmail.com';
    $_SESSION['password'] = 'aden';
    $_SESSION['confirm_password'] = 'aden';
    $_SESSION['phone_number'] = 08164399420;

    echo "Welcome" . " " .$_SESSION["email_address"]. " ". "<br />";
    echo "Miss" . " " . $_SESSION["firstname"]. " " . $_SESSION["last_name"]."." . "<br />";
    
    echo 'Click the following link to view the next page <br />';
    echo '<a href = "sessions_page2.php">Read More</a>';
?>
<html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
    <style>
        body {
            text-align: center;
            font-family: verdana;
            font-size: 15px;
            width: 100%;
            align-content: center;
            line-height: 50px;
            margin-top: 25px;
        }
        </style>
    </body>
</html>