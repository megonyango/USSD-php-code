<?php


#phone
#text=1*200*1*8000

$phone=$_POST['phoneNumber'];
$text=$_POST['text'];

$data= explode("*",$text);


if ($text=="")//text=Meg*567890*1*345
{
    $menu="CON Please enter your fullnames to start registration";
}
elseif (count($data)==1)
{
    $menu="CON Please enter your ID No.";
}
elseif (count($data)==2)
{
    $menu="CON Please select your course\n1.Computer Science\n2.Medicine\n3.Pharmacy";

}
elseif (count($data)==3)
{
    $menu="CON Please enter your KCSE Marks";
}
elseif (count($data)==4){

    $menu="END Thanks you $data[0] for registering with us";

    $courses=["Computer Science","Medicine","Pharmacy"];
    $couse=$courses[$data[2]-1];
    $connect= mysqli_connect("localhost","root","","ussd");
    $sql="INSERT INTO `students`(`id`, `fullname`, `course`, `KCPE`, `idnumber`) VALUES 
                                  (null,'$data[0]','$couse',$data[3],'$data[1]')";
   // echo $couse;
    mysqli_query($connect,$sql)or die(mysqli_error($connect));
}
//MAke,model, year, color, chassis number, +Phone,number plate

header("Content-Type:text/plain");
echo  $menu;


?>