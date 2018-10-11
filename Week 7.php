<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WEEK 7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
//QUIZ ONE
echo "1st quiz <br>";
echo nl2br("My name is Toluwalase.\n I stay in Ibadan. \r\n I studied in Obafemi Awolowo University, Ile-Ife. \r\n I like rice and fried plantain, hot!. \r\n");


//QUIZ TWO
echo "2nd quiz <br>";
$x = 200;
$y = 50;
$z = 100;
$p = $x * $z;
$q = $x - $y;
$r = $x / $y;
echo "The product of x & z is ". $p."<br>";
echo "The subtraction of $x & $y is ". $q."<br>";
echo "The division of $x & $y is ". $r."<br>";

//QUIZ THREE
echo "3rd quiz <br>";
$t = 35;

if ($t < "20") {
    echo "It is really cold today!";
}

elseif ($t > "20" or $t < "30" ) {
    echo "The weather is just perfect.<br> ";
}

elseif ($t > "30" or $t < "40" ) {
    echo "It's so hot today.";
}

else  {
    echo "Am I in the sahara desert?";
}

//QUIZ FOUR
echo "4th quiz <br>";
//Between 100-150
echo "BETWEEN 100-150 <br>";

for ($x = 100; $x <= 150; $x++) { 
    echo "The number is: $x <br>"; 
}

//Between 0-50
echo " BETWEEN 0-50 <br>";

for ($x = 0; $x <= 50; $x++) { 
    echo "The number is: $x <br>"; 
}

//QUIZ FIVE
echo "5th quiz <br>";
$firstname = array("Adeola", "Fiyinfoluwa", "Yewande");

$hobby = array("watching movies", "traveling", "playing games ");

echo "My name is " . $firstname[0] . " and I love " . $hobby[0] .". <br>";
echo "My name is " . $firstname[1] . " and I love " . $hobby[1] .". <br>";
echo "My name is " . $firstname[2] . " and I love " . $hobby[2] .". <br>";

//QUIZ SIX
echo "6th quiz <br>";

function addFunction($a, $b) {           
         $sum = $a + $b;            
         echo "The sum of a and b is : $sum <br>";        
}                 
        addFunction(12, 8);

function productFunction($a, $b) {           
            $product = $a * $b;            
            echo "The product of a and b is : $product <br>";        
   }                 
           productFunction(12, 8);

?>
</body>
</html>>
