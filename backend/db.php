<?php
$host = "localhost";
$user="root";
$pasword= "";
$databass ="Lab_automation";

$conn = mysqli_connect($host,$user,$pasword,$databass);

if (!$conn) {
    echo mysqli_erorr();
}





?>