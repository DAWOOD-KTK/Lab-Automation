<?php
include 'header.php';
include "backend/db.php";

// Filters
$status = $_GET['status'] ?? '';
$testing_type = $_GET['testing_type'] ?? '';
$search = $_GET['search'] ?? '';

// Build query
$sql = "SELECT * FROM testing_data WHERE 1";

if($status != '') {
    $sql .= " AND send_to = '".mysqli_real_escape_string($conn,$status)."'";
}

if($testing_type != '') {
    $sql .= " AND testing_type = '".mysqli_real_escape_string($conn,$testing_type)."'";
}

if($search != '') {
    $search_val = mysqli_real_escape_string($conn,$search);
    $sql .= " AND (testing_id LIKE '%$search_val%' OR product_id LIKE '%$search_val%' OR product_code LIKE '%$search_val%')";
}

$sql .= " ORDER BY id DESC";
$res = mysqli_query($conn,$sql);

// Summary Counts
$total_count = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM testing_data"))['total'];
$pending_count = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM testing_data WHERE send_to='Pending'"))['total'];
$completed_count = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM testing_data WHERE send_to='CPRI'"))['total'];

?>

<div class="app-body">
    <h1 class="title text-center my-4 p-2" style="background:#6f42c1; color:white; border-radius:10px;">Testing Status Report</h1>

    <!-- Summary Cards -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card text-center bg-primary text-white">
                <div class="card-body">
                    <h3><?php echo $total_count; ?></h3>
                    <p>Total Tests</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center bg-warning text-white">
                <div class="card-body">
                    <h3><?php echo $pending_count; ?></h3>
                    <p>Pending</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center bg-success text-white">
                <div class="card-body">
                    <h3><?php echo $completed_count; ?></h3>
                    <p>Completed (CPRI)</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters & Search -->
    <form method="GET" class="row g-3 mb-3">
        <div class="col-md-3">
            <select name="testing_type" class="form-select">
                <option value="">All Testing Types</option>
                <?php
                $types = mysqli_query($conn,"SELECT DISTINCT testing_type FROM testing_data");
                while($t = mysqli_fetch_assoc($types)){
                    $sel = ($testing_type == $t['testing_type']) ? 'selected' : '';
                    echo "<option value='{$t['testing_type']}' $sel>{$t['testing_type']}</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-md-3">
            <select name="status" class="form-select">
                <option value="">All Status</option>
                <option value="Pending" <?php if($status=='Pending') echo 'selected'; ?>>Pending</option>
                <option value="CPRI" <?php if($status=='CPRI') echo 'selected'; ?>>CPRI Approved</option>
                <option value="Completed" <?php if($status=='Completed') echo 'selected'; ?>>Completed</option>
            </select>
        </div>
        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="Search by Testing ID / Product ID / Product Code" value="<?php echo $search; ?>">
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary w-100">Filter</button>
        </div>
    </form>

    <!-- Table -->
    <div class="table-responsive rounded">
        <table class="table table-hover table-bordered">
            <thead style="background:#6f42c1; color:white;">
                <tr>
                    <th>ID</th>
                    <th>Testing ID</th>
                    <th>Product ID</th>
                    <th>Product Code</th>
                    <th>Testing Code</th>
                    <th>Testing Roll</th>
                    <th>Revision</th>
                    <th>Product Type</th>
                    <th>Testing Type</th>
                    <th>Result</th>
                    <th>Tested By</th>
                    <th>Remarks</th>
                    <th>Send To</th>
                    <th>Locked</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(mysqli_num_rows($res) > 0){
                    while($row = mysqli_fetch_assoc($res)){
                        $locked = ($row['is_locked']==1) ? 'Yes' : 'No';
                        echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['testing_id']}</td>
                            <td>{$row['product_id']}</td>
                            <td>{$row['product_code']}</td>
                            <td>{$row['testing_code']}</td>
                            <td>{$row['testing_roll']}</td>
                            <td>{$row['revision']}</td>
                            <td>{$row['product_type']}</td>
                            <td>{$row['testing_type']}</td>
                            <td>{$row['result_type']}</td>
                            <td>{$row['tested_by']}</td>
                            <td>{$row['remarks']}</td>
                            <td>{$row['send_to']}</td>
                            <td>$locked</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='14' class='text-center'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>
