<?php
session_start();
include "db.php";

$q = isset($_GET['q']) ? mysqli_real_escape_string($conn, $_GET['q']) : "";

$sql = "SELECT * FROM testing_data 
        WHERE testing_id LIKE '%$q%' 
        OR testing_code LIKE '%$q%'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($data = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td class="text-center"><?= $data['id'] ?></td>
            <td class="text-center"><?= $data['testing_id'] ?></td>
            <td class="text-center"><?= $data['product_id'] ?></td>
            <td class="text-center"><?= $data['product_code'] ?></td>
            <td class="text-center"><?= $data['testing_code'] ?></td>
            <td class="text-center"><?= $data['testing_roll'] ?></td>
            <td class="text-center"><?= $data['revision'] ?></td>
            <td class="text-center"><?= $data['product_type'] ?></td>
            <td class="text-center"><?= $data['testing_type'] ?></td>
            <td class="text-center"><?= $data['result_type'] ?></td>
            <td class="text-center"><?= $data['tested_by'] ?></td>
            <td class="text-center"><?= $data['remarks'] ?></td>
            <td class="text-center"><?= $data['send_to'] ?></td>
            <td class="text-center"><?= $data['is_locked'] ?></td>
        </tr>
        <?php
    }
} else {
    echo "<tr><td colspan='14' class='text-center'>No testing record found</td></tr>";
}
?>
