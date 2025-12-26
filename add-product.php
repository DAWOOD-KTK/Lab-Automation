<?php
include 'header.php';
?>
<style>
      body{
        overflow-y: scroll;
    }
</style>

<div class="app-body">


  <div class="container ">
  <div class="row gx-4 ">
    
        
        <div class="col-sm-10 col-12  ms-5 ">
            <div class="card mb-2 ms-5 mx-auto">
                <div class="card-head">
                    
                <h1 class="title bg-primary rounded text-center text-white p-1 m-1 testinheading">Add Product</h1>
                   
                </div>
            </div>
        </div>
        <form action="backend/a_product.php" method="post">
       
       <div class="col-sm-10 col-12  ms-5 ">
            <div class="card mb-3 ms-5">
                <div class="card-body">
                    <div class="m-0">
                        <input type="text" name="product_code" class="form-control" id="abc" placeholder="Enter Product Code => (2 charactors 2 Numbers)">
                    </div>
                </div>
            </div>
        </div>
       <div class="col-sm-10 col-12  ms-5 ">
            <div class="card mb-3 ms-5">
                <div class="card-body">
                    <div class="m-0">
                        <input type="text" name="rivision" class="form-control" id="abc" placeholder="Enter Rivision => (Charactors and Numbers)">
                    </div>
                </div>
            </div>
        </div>
       <div class="col-sm-10 col-12  ms-5 ">
            <div class="card mb-3 ms-5">
                <div class="card-body">
                    <div class="m-0">
                        <input type="text" name="manufacturing_number" class="form-control" id="abc" placeholder="Enter Manufacturing Number => (4 digits)">
                    </div>
                </div>
            </div>
        </div>
       <div class="col-sm-10 col-12  ms-5 ">
            <div class="card mb-3 ms-5">
                <div class="card-body">
                    <div class="m-0">
                        <input type="text" name="product_name" class="form-control" id="abc" placeholder="Enter Product Name">
                    </div>
                </div>
                 <div class="card-footer text-center">
            
                <button id="btn" type="submit" name="submit" class="btn btn-primary testinheading w-100 m-0 p-2">Submit</button>
               </div>
            </div>
        </div>
      

    </div>
   </div>
</form>
 </div>
<?php
include 'footer.php';
?>