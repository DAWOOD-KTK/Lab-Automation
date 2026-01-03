<?php
session_start(); // sirf backend page ke liye
include "db.php";

if(isset($_POST['submit'])){

    $p_code   = $_POST["product_code"] ?? "";
    $rivision = $_POST["rivision"] ?? ""; 
    $m_number = !empty($_POST['manufacturing_no']) 
                ? str_pad($_POST['manufacturing_no'], 4, '0', STR_PAD_LEFT) 
                : "";
    $p_type   = $_POST["product_type"] ?? "";
    $p_name   = $_POST["product_name"] ?? "";

    // Check empty fields
    if(empty($p_code) || empty($rivision) || empty($m_number) || empty($p_type) || empty($p_name)) {
        $alert = [
            'type' => 'warning',
            'title' => 'Missing Fields',
            'text' => 'Please fill all required fields'
        ];
        $redirect = '../add-product.php';
    } else {
        $p_id = $p_code . $rivision . $m_number;

        $query = "INSERT INTO products 
            (product_id, product_code, rivision, manufacturing_no, product_type, product_name)
            VALUES 
            ('$p_id', '$p_code', '$rivision', '$m_number', '$p_type', '$p_name')";

        $res = mysqli_query($conn, $query);

        if($res){
        $_SESSION['alert'] = [
            'type' => 'success',
            'title' => 'Success',
            'text' => 'Product added successfully'
        ];
        $redirect = '../product-list.php';
    } else {
        $_SESSION['alert'] = [
            'type' => 'error',
            'title' => 'Insert Failed',
            'text' => 'Something went wrong'
        ];
        $redirect = '../add-product.php';
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
Swal.fire({
    icon: '<?= $_SESSION['alert']['type'] ?>',
    title: '<?= $_SESSION['alert']['title'] ?>',
    text: '<?= $_SESSION['alert']['text'] ?>',
    confirmButtonColor: '#6f42c1'
}).then(() => {
    window.location.href = '<?= $redirect ?>';
});
</script>
<?php
exit;
}
?>


