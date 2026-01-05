<?php
session_start();
include "db.php";

if (!isset($_POST['submit'])) {
    header("Location: ../add-product.php");
    exit;
}

$p_code   = mysqli_real_escape_string($conn,$_POST["product_code"] ?? "");
$rivision = mysqli_real_escape_string($conn,$_POST["rivision"] ?? "");
$m_number = !empty($_POST['manufacturing_no'])
            ? str_pad($_POST['manufacturing_no'], 4, '0', STR_PAD_LEFT)
            : "";
$p_type   = mysqli_real_escape_string($conn,$_POST["product_type"] ?? "");
$p_name   = mysqli_real_escape_string($conn,$_POST["product_name"] ?? "");

/* -------- validation -------- */
if (empty($p_code) || empty($rivision) || empty($m_number) || empty($p_type) || empty($p_name)) {

    $_SESSION['alert'] = [
        'type' => 'warning',
        'title' => 'Missing Fields',
        'text' => 'Please fill all required fields'
    ];
    header("Location: ../add-product.php");
    exit;
}

/* -------- image -------- */
$imagename  = $_FILES['image']['name'];
$tmp_image  = $_FILES['image']['tmp_name'];
$type_image = $_FILES['image']['type'];
$image_size = $_FILES['image']['size'];
$max = 5 * 1024 * 1024;

if (!in_array($type_image, ['image/png','image/jpg','image/jpeg'])) {

    $_SESSION['alert'] = [
        'type' => 'error',
        'title' => 'Invalid Image',
        'text' => 'Only PNG, JPG, and JPEG files are allowed'
    ];
    header("Location: ../add-product.php");
    exit;
}

if ($image_size > $max) {

    $_SESSION['alert'] = [
        'type' => 'error',
        'title' => 'Large Image',
        'text' => 'Image must be less than 5MB'
    ];
    header("Location: ../add-product.php");
    exit;
}

/* -------- upload + insert -------- */
$imagename = time().'_'.$imagename;
move_uploaded_file($tmp_image, "../assets/images/".$imagename);

$p_id = $p_code.$rivision.$m_number;

$res = mysqli_query($conn,"
    INSERT INTO products
    (product_id, product_code, rivision, manufacturing_no, product_type, product_name, image)
    VALUES
    ('$p_id','$p_code','$rivision','$m_number','$p_type','$p_name','$imagename')
");

if ($res) {
    $_SESSION['alert'] = [
        'type' => 'success',
        'title' => 'Success',
        'text' => 'Product added successfully'
    ];
    header("Location: ../products-list.php");
    exit;
}

$_SESSION['alert'] = [
    'type' => 'error',
    'title' => 'Insert Failed',
    'text' => 'Something went wrong'
];
header("Location: ../add-product.php");
exit;
