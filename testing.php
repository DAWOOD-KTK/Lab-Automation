<?php
include "backend/db.php";
include 'header.php';
?>
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
        <form action="backend/a-testing.php" id="testin_form" method="post">

          <!-- Product Select -->
          <div class="col-sm-10 m-auto mb-3">
            <select class="form-select" name="id" id="product_select" required>
              <option value="">Select Product</option>
              <?php
              $query = mysqli_query($conn,"SELECT id,product_id, product_type FROM products WHERE is_active = 1");
              while($data = mysqli_fetch_assoc($query)){
                  echo "<option value='{$data['id']}'>{$data['id']} - {$data['product_id']} - {$data['product_type']}</option>";
              }
              ?>
            </select>
          </div>

          <!-- Testing Type -->
          <div class="col-sm-10 m-auto mb-3">
            <select class="form-select" name="testing_type" id="testing_type" required>
              <option value="">Testing Type</option>
              <option value="Voltage Test">Voltage Test</option>
              <option value="Current Test">Current Test</option>
              <option value="Insulation Resistance">Insulation Resistance</option>
              <option value="Continuity Test">Continuity Test</option>
            </select>
          </div>

          <!-- Testing Code -->
          <div class="col-sm-10 m-auto mb-3">
            <select class="form-select" name="testing_code" id="testing_code" required>
              <option value="">Testing Code</option>
              <option value="VT">VT</option>
              <option value="CT">CT</option>
              <option value="IR">IR</option>
              <option value="CNT">CNT</option>
            </select>
          </div>

          <!-- Generated Testing ID (readonly) -->
          <div class="col-sm-10 m-auto mb-3">
            <input type="text" class="form-control"   name="testing_id" id="generated_testing_id" placeholder="Testing ID will be auto-generated" readonly>
          </div>

          

          <!-- Tested By -->
          <div class="col-sm-10 m-auto mb-3">
            <input type="text" name="tested_by" class="form-control" placeholder="Tested By" required>
          </div>

   <!-- Result Type -->
<div class="col-sm-10 m-auto mb-3">
    <select id="result_type" name="result_type" class="form-select" required>
        <option value="">Result Type</option>
        <option value="Pass">Pass</option>
        <option value="Fail">Fail</option>
        <option value="Pending">Pending</option>
    </select>
</div>

<!-- Remarks Template Dropdown -->
<div class="col-sm-10 m-auto mb-3">
    <label for="remarks_template" class="form-label">Select Remarks Template</label>
    <select id="remarks_template" class="form-select">
        <option value="">-- Select Remark --</option>
        <!-- These options will be filtered via JS -->
        <option data-result="Pass" value="Voltage Test completed, parameters within limits">VT – Voltage Test (Pass)</option>
        <option data-result="Pass" value="Current Test completed, readings normal">CT – Current Test (Pass)</option>
        <option data-result="Pass" value="Insulation Resistance measured, values acceptable">IR – Insulation Resistance (Pass)</option>
        <option data-result="Pass" value="Continuity Test passed, circuit intact">CNT – Continuity Test (Pass)</option>

        <option data-result="Fail" value="Voltage Test failed, check insulation or connections">VT – Voltage Test (Fail)</option>
        <option data-result="Fail" value="Current Test failed, abnormal readings">CT – Current Test (Fail)</option>
        <option data-result="Fail" value="Insulation Resistance below limit, re-test required">IR – Insulation Resistance (Fail)</option>
        <option data-result="Fail" value="Continuity Test failed, circuit broken">CNT – Continuity Test (Fail)</option>

        <option data-result="Pending" value="Voltage Test pending, yet to perform">VT – Voltage Test (Pending)</option>
        <option data-result="Pending" value="Current Test pending, yet to perform">CT – Current Test (Pending)</option>
        <option data-result="Pending" value="Insulation Resistance pending, yet to perform">IR – Insulation Resistance (Pending)</option>
        <option data-result="Pending" value="Continuity Test pending, yet to perform">CNT – Continuity Test (Pending)</option>
    </select>
</div>

<!-- Remarks Textarea -->
<div class="col-sm-10 m-auto mb-3">
    <label for="remarks" class="form-label">Remarks</label>
    <textarea id="remarks" name="remarks" class="form-control" rows="3" placeholder="Remarks will auto-fill here..."></textarea>
</div>



          <!-- Submit Buttons -->
          <div class="col-sm-10 m-auto mb-3">
            <div class="d-flex gap-2 justify-content-end">
              <button type="reset" class="btn btn-outline-primary">Cancel</button>
              <button type="submit" name="submit" class="btn w-100 btn-primary">Save Testing</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>

<!-- jQuery for AJAX -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$('#testin_form').submit(function(e){
    e.preventDefault(); // prevent normal submit

    $.post('backend/a-testing.php', $(this).serialize(), function(response){
        if(response.status === 'success'){
            Swal.fire({
                icon: 'success',
                title: 'Testing Saved',
                text: response.message,
                timer: 2000,
                showConfirmButton: false
            }).then(() => {
                $('#testin_form')[0].reset();
                $('#generated_testing_id').val('');
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: response.message
            });
        }
    }, 'json');
});
// display testing id
$(document).ready(function(){
    function updateTestingID(){
        let product_id = $('#product_select').val();
        let testing_code = $('#testing_code').val();

        if(product_id && testing_code){
            $.post('backend/generate_testing_id.php', { product_id, testing_code }, function(response){
                $('#generated_testing_id').val(response);
            });
        } else {
            $('#generated_testing_id').val('');
        }
    }

    $('#product_select, #testing_code').on('change', updateTestingID);
});


</script>
