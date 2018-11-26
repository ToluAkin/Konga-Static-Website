<?php
    session_start();

    $_SESSION['firstname'] = 'Toluwalase';
    $_SESSION['last_name'] = 'Akintoye';
    $_SESSION['email_address'] = 'toluakintoye@gmail.com';
    $_SESSION['password'] = 'aden';
    $_SESSION['confirm_password'] = 'aden';
    $_SESSION['phone_number'] = 08164399420;
    $_SESSION['gender'] = 'Female';
    $_SESSION['country'] = 'Nigeria';

    echo "Welcome Miss " . $_SESSION["firstname"]. " " . $_SESSION["last_name"]."!!!!" . "<br />";
    echo "Apparently, your first name is ". $_SESSION["firstname"]. "<br />";
    echo "Your last name is ". $_SESSION["last_name"]. " " ."according to the details you provided ". "<br />";
    echo "The provided E-mail address is ". $_SESSION["email_address"]. "<br />";
    echo "The saved password as provided is ". $_SESSION["pwd"]. "<br />";
    echo "The phone number is ". $_SESSION["phone"]. "<br />";
    echo "The gender of this human is ". $_SESSION["gender"]. "<br />";
    echo "This human is sure to be from ". $_SESSION["country"]. "<br />";
    echo "Thank you for banking with us. See you soon!!!"
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