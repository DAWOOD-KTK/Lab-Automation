<?php
include 'header.php';
include "backend/db.php";

// Filters
$from_date = $_GET['from_date'] ?? '';
$to_date   = $_GET['to_date'] ?? '';
$search    = $_GET['search'] ?? '';

// Build main query
$sql = "SELECT * FROM testing_data WHERE send_to='CPRI'"; // Only CPRI-approved

if(!empty($from_date) && !empty($to_date)){
    $sql .= " AND DATE(created_at) BETWEEN '$from_date' AND '$to_date'";
}

if(!empty($search)){
    $search_val = mysqli_real_escape_string($conn, $search);
    $sql .= " AND (testing_id LIKE '%$search_val%' OR product_id LIKE '%$search_val%' OR product_code LIKE '%$search_val%')";
}

$sql .= " ORDER BY created_at DESC";
$res = mysqli_query($conn, $sql);
if(!$res){
    die("Query failed: " . mysqli_error($conn));
}

// Summary counts
$date_filter = '';
if(!empty($from_date) && !empty($to_date)){
    $date_filter = " AND DATE(created_at) BETWEEN '$from_date' AND '$to_date'";
}

$total_count = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM testing_data WHERE send_to='CPRI' $date_filter"))['total'];

?>

<div class="app-body">
    <h1 class="title text-center my-4 p-2" style="background:#6f42c1; color:white; border-radius:10px;">Total approved to CPRI</h1>

    <!-- Summary Card -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="card text-center bg-success text-white">
                <div class="card-body">
                    <h3><?php echo $total_count; ?></h3>
                    <p>Total approved to CPRI </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters & Search -->
    <form method="GET" class="row g-3 mb-3">
        <div class="col-md-3">
            <input type="date" name="from_date" class="form-control" value="<?php echo $from_date; ?>" placeholder="From Date">
        </div>
        <div class="col-md-3">
            <input type="date" name="to_date" class="form-control" value="<?php echo $to_date; ?>" placeholder="To Date">
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
            <thead style="background:#198754; color:white;">
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
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(mysqli_num_rows($res) > 0){
                    while($data = mysqli_fetch_assoc($res)){
                        echo "<tr>
                            <td>{$data['id']}</td>
                            <td>{$data['testing_id']}</td>
                            <td>{$data['product_id']}</td>
                            <td>{$data['product_code']}</td>
                            <td>{$data['testing_code']}</td>
                            <td>{$data['testing_roll']}</td>
                            <td>{$data['revision']}</td>
                            <td>{$data['product_type']}</td>
                            <td>{$data['testing_type']}</td>
                            <td>{$data['result_type']}</td>
                            <td>{$data['tested_by']}</td>
                            <td>{$data['remarks']}</td>
                            <td>{$data['send_to']}</td>
                            <td>{$data['is_locked']}</td>
                            <td>{$data['created_at']}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='15' class='text-center'>No CPRI-approved records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>
