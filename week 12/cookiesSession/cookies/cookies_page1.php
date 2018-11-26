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
        <title>Setting Cookies with PHP</title>
    </head>
    <body>
        <?php echo "Set Cookies"."<br />";?>
        <?php echo $_COOKIE["email_address"]. "<br />";?>
        <?php echo $_COOKIE["pwd"]. "<br />";?>
        <a href="cookies_page2.php">Move to Welcome page</a>
    </body>
</html>