
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php
include "db.php";

if(isset($_POST['submit'])){

    $t_id = mysqli_real_escape_string($conn, $_POST['testing_id'] ?? "");
    $P_id = mysqli_real_escape_string($conn, $_POST['product_id'] ?? "");
    $t_type = mysqli_real_escape_string($conn, $_POST['testing_type'] ?? "");
    $t_by = mysqli_real_escape_string($conn, $_POST['tested_by'] ?? "");
    $r_type = mysqli_real_escape_string($conn, $_POST['result_type'] ?? "");
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks'] ?? "");

    // business rule
    $is_locked = ($r_type === 'Pass') ? 1 : 0;
    $send_to = ($r_type === 'Pass') ? 'CPRI' : 'Remanufacture';

    $sql = "
        UPDATE testing_data 
        SET 
            product_id = '$P_id',
            testing_type = '$t_type',
            tested_by = '$t_by',
            result_type = '$r_type',
            remarks = '$remarks',
            is_locked = '$is_locked',
            send_to = '$send_to'
        WHERE testing_id = '$t_id'
    ";

    $res = mysqli_query($conn, $sql);

    if($res){
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Re-Test Updated',
                text: 'Testing record updated successfully'
            }).then(() => {
                window.location.href = '../remanufacture-view.php';
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire('Database Error','".mysqli_error($conn)."','error');
        </script>";
    }
}
?>
