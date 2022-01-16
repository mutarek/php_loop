<?php
$totalemp = ['Rajib','Majib','Kajib'];

for ($i = 1; $i <10; $i++)
{
    echo "I Love PHP <br>";
}

for ($i = 1; $i <10; $i+= 2)
{
    echo "$i <br>";
}

for ($i=0; $i <count($totalemp) ; $i++) { 
    echo $totalemp[$i]."<br>";
}

?>