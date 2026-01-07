<?php
include 'header.php';

include "backend/db.php";

if(!isset($_GET["testing_id"])){

  die("Invalid testing ID");
}
$testing_id = $_GET["testing_id"]?? "";
$query = mysqli_query($conn, "SELECT * FROM testing_data WHERE testing_id = '$testing_id'");
$row = mysqli_fetch_assoc($query);
// echo "<pre>";
// print_r($row);
// ?>

<style>
  .bg{
    background: lightgrey;
  }
</style>

<div class="app-body">
  <div class="container-fluid">
    <div class="card col-md-10 mx-auto">
      <div class="card-head">
        <h1 class="title bg-primary rounded text-center text-white p-1 m-1 testinheading">Products Testing</h1>
        <hr>
      </div>

      <div class="row gx-1">
        <form action="backend/Update-manufacture-test.php" id="testin_form" method="post">

<!-- Hidden DB ID -->
<input type="hidden" name="id" value="<?= $row['id'] ?? '' ?>">

<!-- Testing Type -->
<div class="col-sm-10 m-auto mb-3">
  <input type="text" class="form-control"
    value="<?= $row['testing_type'] ?? '' ?>"
    name="testing_type" readonly>
</div>

<!-- Testing Code -->
<div class="col-sm-10 m-auto mb-3">
  <input type="text" class="form-control"
    value="<?= $row['testing_code'] ?? '' ?>"
    name="testing_code" readonly>
</div>

<!-- Testing ID -->
<div class="col-sm-10 m-auto mb-3">
  <input type="text" class="form-control"
    value="<?= $row['testing_id'] ?? '' ?>"
    name="testing_id" readonly>
</div>

<!-- Tested By -->
<div class="col-sm-10 m-auto mb-3">
  <input type="text" name="tested_by"
    value="<?= $row['tested_by'] ?? '' ?>"
    class="form-control" required>
</div>

<!-- Result Type -->
<div class="col-sm-10 m-auto mb-3">
  <select id="result_type" name="result_type" class="form-select" required>
    <option value="">Result Type</option>
    <option value="Pass" <?=($row['result_type']=='Pass')?'selected':''?>>Pass</option>
    <option value="Fail" <?=($row['result_type']=='Fail')?'selected':''?>>Fail</option>
  </select>
</div>

<!-- Remarks Template -->
<div class="col-sm-10 m-auto mb-3">
  <label class="form-label">Select Remarks Template</label>
  <select id="remarks_template" class="form-select">
    <option value="">-- Select Remark --</option>
    <option data-result="Pass" value="Voltage Test completed, parameters within limits">VT – Voltage Test (Pass)</option>
        <option data-result="Pass" value="Current Test completed, readings normal">CT – Current Test (Pass)</option>
        <option data-result="Pass" value="Insulation Resistance measured, values acceptable">IR – Insulation Resistance (Pass)</option>
        <option data-result="Pass" value="Continuity Test passed, circuit intact">CNT – Continuity Test (Pass)</option>

        <option data-result="Fail" value="Voltage Test failed, check insulation or connections">VT – Voltage Test (Fail)</option>
        <option data-result="Fail" value="Current Test failed, abnormal readings">CT – Current Test (Fail)</option>
        <option data-result="Fail" value="Insulation Resistance below limit, re-test required">IR – Insulation Resistance (Fail)</option>
        <option data-result="Fail" value="Continuity Test failed, circuit broken">CNT – Continuity Test (Fail)</option>
  </select>
</div>

<!-- Remarks -->
<div class="col-sm-10 m-auto mb-3">
  <label class="form-label">Remarks</label>
  <textarea id="remarks" name="remarks"
    class="form-control" rows="3"><?= $row['remarks'] ?? '' ?></textarea>
</div>

<!-- Buttons -->
<div class="col-sm-10 m-auto mb-3 text-end">
  <button type="submit" class="btn btn-primary">Save Testing</button>
</div>

</form>

      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>

<!-- jQuery for AJAX -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$('#testin_form').on('submit', function(e){
    e.preventDefault();

    $.ajax({
        url: 'backend/Update-manufacture-test.php',
        type: 'POST',
        data: $(this).serialize(),
        dataType: 'json',
        success: function(res){
            if(res.status === 'success'){
                Swal.fire({
                    icon: 'success',
                    title: 'Saved',
                    text: res.message,
                    timer: 2000,
                    showConfirmButton: false
                });
            }else{
                Swal.fire('Error', res.message, 'error');
            }
        },
        error: function(){
            Swal.fire('Error', 'Server error', 'error');
        }
    });
});

// Auto-fill remarks
$('#remarks_template').on('change', function(){
    $('#remarks').val($(this).val());
});
</script>



</script>
