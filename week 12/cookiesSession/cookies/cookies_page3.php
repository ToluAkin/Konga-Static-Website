<?php
    setcookie("firstname", "Toluwalase", time()+3600, "/","", 0);
    setcookie("lastname", "Akintoye", time()+3600, "/","", 0);
    setcookie("email_address", "toluakintoye@gmail.com", time()+3600, "/","", 0);
    setcookie("pwd", "aden", time()+3600, "/","", 0);
    setcookie("phone", 08164399420, time()+3600, "/", "", 0);
    setcookie("gender", "Female", time()+3600, "/", "", 0);
    setcookie("country", "Nigeria", time()+3600, "/", "", 0);
?>

<html>
    <head>
        <title>More detailed page </title>
    </head>
    <body>
        <style>
            body {
                text-align: center;
                font-family: verdana;
                font-size: 15px;
                width: 100%;
                align-content: justify;
                line-height: 50px;
                margin-top: 25px;
            }
        </style>
        <?php
            echo "Hello !"."<br />";
            echo "Here are the personal details:". "<br />";
            echo "The first name is ". $_COOKIE["firstname"]. "<br />";
            echo "The last name is ". $_COOKIE["lastname"]. "<br />";
            echo "The provided E-mail address is ". $_COOKIE["email_address"]. "<br />";
            echo "The saved password as provided is ". $_COOKIE["pwd"]. "<br />";
            echo "The phone number is ". $_COOKIE["phone"]. "<br />";
            echo "The gender of this human is ". $_COOKIE["gender"]. "<br />";
            echo "This human is sure to be from ". $_COOKIE["country"]. "<br />";
        ?>
    </body>
</html>