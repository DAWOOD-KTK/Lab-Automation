<?php
include "db.php";

$id = $_GET['id'];

$query = "UPDATE products SET is_active = 1 WHERE id = '$id'";
mysqli_query($conn, $query);

header("Location: ../products.php");
exit;
