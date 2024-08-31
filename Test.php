<?php
date_default_timezone_set('Asia/Kolkata');
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$name = $_POST['name'];
$food = $_POST['food'];
$hour = date("H");

if($hour>=2 && $hour<11)
{
    $greet = "Good Morning";
}
else if($hour>=11 && $hour<16)
{
    $greet = "Good Afternoon";
}
else if($hour>=16 && $hour<21)
{
    $greet = "Good Evening";
}
else
{
    $greet = "Good Night";
}

}

include 'View/Test.view.php';


?>