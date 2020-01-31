<?php

$phone=$_POST['phoneNumber'];
$text=$_POST['text'];

$data= explode("*",$text);

//MAke,model, year, color, chassis number, +Phone,number plate


if ($text=="")//text= Number Plate*model*year*color* chases number
{
    $menu="CON Please enter your car number plate";
}
elseif (count($data)==1)
{
    $menu="CON Please enter your car model";
}
elseif (count($data)==2)
{
    $menu="CON Please enter the color of the car";

} elseif (count($data)==3){

    $menu="CON Please enter your chases model";
} elseif (count($data)==4){

    $menu="CON Please enter the year";



} elseif (count($data)==5){

    $menu="END Congratulations  $data[0] ; You have been registered";
}


header("Content-Type:text/plain");
echo  $menu;

