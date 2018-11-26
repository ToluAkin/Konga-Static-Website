<html>
    <head>
        <title>Read More page</title>
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
        <?php
            if( isset($_COOKIE["email_address"])){
                echo "Welcome" . " " . $_COOKIE["email_address"] . "<br />";
            }
            else
                echo "Invalid login credentials" . "<br />";

                setcookie("firstname", "Toluwalase", time()+3600, "/","", 0);
                setcookie("lastname", "Akintoye", time()+3600, "/","", 0);
                setcookie("email_address", "toluakintoye@gmail.com", time()+3600, "/","", 0);
                setcookie("pwd", "aden", time()+3600, "/","", 0);
                setcookie("phone", 08164399420, time()+3600, "/", "", 0);
                setcookie("gender", "Female", time()+3600, "/", "", 0);
                setcookie("country", "Nigeria", time()+3600, "/", "", 0);

            echo "My name is" . " " . $_COOKIE["firstname"]. " " . $_COOKIE["lastname"]. "." . "<br />";
        ?>
        <a href="cookies_page3.php">Read More..</a>
        <?php
         echo "Thank you !"
         ?>
    </body>
</html>