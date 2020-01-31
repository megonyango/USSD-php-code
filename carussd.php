<?php

$phone=$_POST['phoneNumber'];
$text=$_POST['text'];

$data= explode("*",$text);

//MAke,model, year, color, chassis number, +Phone,number plate


if ($text=="")//text= NumberPlate*model*chases number*color*year;
{
    $menu="CON Please enter your car number plate";
}
elseif (count($data)==1)
{
    $menu="CON Please enter your car model";
}
elseif (count($data)==2)
{
    $menu="CON Please enter your chases number";

} elseif (count($data)==3){
    $menu="CON Please enter the color of the car";

} elseif (count($data)==4){

    $menu="CON Please enter the year";


} elseif (count($data)==5){

    $menu="END Congratulations  $data[0] ; You have been registered";


    $connect= mysqli_connect("localhost","root","","");
    $sql="INSERT INTO `details`(`id`, `numberPlate`, `model`, `chases`, `color`, `year`) VALUES 
         (null ,[$data[0]],[$data[1]],[$data[2]],[$data[3]],[$data[4]])";
    mysqli_query($connect,$sql)or die(mysqli_error($connect));
}


header("Content-Type:text/plain");
echo  $menu;

