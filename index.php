<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Lets find a new car</h1>

<?php
function displaySymbol($cars){
    echo $cars."<br>";
    if($cars==0)
    {
    echo '<img src = "download.jpg"/>';
    echo "Volvo";
    }
    else if($cars==1)
    {
    echo '<img src = "download1.jpg"/>';
    echo "Bmw";
    }
    else if($cars==2)
    {
    echo '<img src = "download2.jpg"/>';
    echo "Toyoto";
    }

}
$cars = array("Volvo","BMW","Toyota");
echo "amount of  many elements and number ";
echo count($cars);
shuffle($cars);
array_sum($cars);
for($c = 0; $c<3; $c++)
{
    $cars = rand(0,2);

}

    displaySymbol($cars);
    
while($cars==rand(0,2))
{
    echo " <br /><('.'<)    <('.')>   (>'.')>WINNER";
}

echo " <br /> 3 dancing kirby's 20 dollars  <br /> 6 dancing kirby's 40 dollars <br />9 dancing kirby's 60 dollars <br /> with you car."

?>


</body>
</html>