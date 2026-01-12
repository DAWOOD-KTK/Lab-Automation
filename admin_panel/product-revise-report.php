<?php
include 'header.php';
include "backend/db.php";

// Filter values
$product_type = $_GET['product_type'] ?? '';
$status = $_GET['status'] ?? '';
$search = $_GET['search'] ?? '';

// Build query
$sql = "SELECT * FROM products WHERE 1";

if($product_type != '') {
    $sql .= " AND product_type = '".mysqli_real_escape_string($conn,$product_type)."'";
}

if($status != '') {
    $status_val = ($status == 'active') ? 1 : 0;
    $sql .= " AND is_active = $status_val";
}

if($search != '') {
    $search_val = mysqli_real_escape_string($conn,$search);
    $sql .= " AND (product_id LIKE '%$search_val%' OR product_name LIKE '%$search_val%')";
}

$sql .= " ORDER BY id DESC";

$res = mysqli_query($conn,$sql);

// Summary Counts
$count_all = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM products"))['total'];
$count_active = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM products WHERE is_active=1"))['total'];
$count_inactive = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM products WHERE is_active=0"))['total'];

?>

<div class="app-body">
    <h1 class="title text-center my-4 p-2" style="background:#6f42c1; color:white; border-radius:10px;">Product-wise Report</h1>

    <!-- Summary Cards -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card text-center bg-primary text-white">
                <div class="card-body">
                    <h3><?php echo $count_all; ?></h3>
                    <p>Total Products</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center bg-success text-white">
                <div class="card-body">
                    <h3><?php echo $count_active; ?></h3>
                    <p>Active Products</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center bg-danger text-white">
                <div class="card-body">
                    <h3><?php echo $count_inactive; ?></h3>
                    <p>Inactive Products</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters & Search -->
    <form method="GET" class="row g-3 mb-3">
        <div class="col-md-3">
            <select name="product_type" class="form-select">
                <option value="">All Types</option>
                <?php
                $types = mysqli_query($conn,"SELECT DISTINCT product_type FROM products");
                while($t = mysqli_fetch_assoc($types)){
                    $sel = ($product_type == $t['product_type']) ? 'selected' : '';
                    echo "<option value='{$t['product_type']}' $sel>{$t['product_type']}</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-md-3">
            <select name="status" class="form-select">
                <option value="">All Status</option>
                <option value="active" <?php if($status=='active') echo 'selected'; ?>>Active</option>
                <option value="inactive" <?php if($status=='inactive') echo 'selected'; ?>>Inactive</option>
            </select>
        </div>
        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="Search by Product ID or Name" value="<?php echo $search; ?>">
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
                    <th>Product ID</th>
                    <th>Product Code</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Revision</th>
                    <th>Manufacturing No</th>
                    <th>Status</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(mysqli_num_rows($res) > 0){
                    while($row = mysqli_fetch_assoc($res)){
                        $status_text = ($row['is_active']==1)? 'Active' : 'Inactive';
                        echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['product_id']}</td>
                            <td>{$row['product_code']}</td>
                            <td>{$row['product_name']}</td>
                            <td>{$row['product_type']}</td>
                            <td>{$row['rivision']}</td>
                            <td>{$row['manufacturing_no']}</td>
                            <td>$status_text</td>
                            <td><img src='assets/images/{$row['image']}' style='width:50px;height:50px;border-radius:5px;'></td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='9' class='text-center'>No products found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>
