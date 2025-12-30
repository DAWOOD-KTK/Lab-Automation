

<?php
include 'header.php';

include "backend/db.php";

$id = $_GET["id"];
// if(!$id){
//     die("Invalid Product ID");
// }
$query = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
$data = mysqli_fetch_assoc($query);

// if(!$query){
//     die("Query failed: " . mysqli_error($conn));
// }

// $data = mysqli_fetch_assoc($query);

// if(!$data){
//     die("Product not found");
// }

 
// $query= "SELECT   * FROM  `products` WHERE id = $id";
// $res = mysqli_query($conn,$query);
// $data = mysqli_fetch_assoc($res);


// echo print_r($data);


?>


<div class="app-body">
<div class="container-fluid">
    <div class="card col-md-8  mx-auto ">
        <div class="card-head">
            <h1 class="title bg-primary rounded text-center text-white p-1 m-1 testinheading " >CREATE USER</h1>
            <hr>
        </div>
        <div class="card-body ">
   <form action="update.php" method="POST">

                    <input type="hidden" name="id" value="<?= $data['id'] ?>">

                   
                 
                         <select class="form-select mb-3" name="rivision" required>
                 <option value="R1" <?= ($data['rivision']=='R1')?'selected':'' ?>>R1</option>
                 <option value="R2" <?= ($data['rivision']=='R2')?'selected':'' ?>>R2</option>
                 <option value="R3" <?= ($data['rivision']=='R3')?'selected':'' ?>>R3</option>
                 </select>        
                     
                     
                <select class="form-select mb-3" name="product_type"disabled>
                 <option disabled>Product Type</option>
                 <option value="Switchgear" <?= ($data['product_type']=='Switchgear')?'selected':'' ?>>Switchgear</option>
                 <option value="Fuse" <?= ($data['product_type']=='Fuse')?'selected':'' ?>>Fuse</option>
                 <option value="Capacitor" <?= ($data['product_type']=='Capacitor')?'selected':'' ?>>Capacitor</option>
                 <option value="Resistor" <?= ($data['product_type']=='Resistor')?'selected':'' ?>>Resistor</option>
                 </select>

        <select class="form-select mb-3" name="product_name" disabled>

          <option selected disabled>Enter Product Name</option>
        
          
          <optgroup label="Switchgear">
            <option value="11kV Indoor Switchgear Panel"<?= ($data['product_name']=='11kV Indoor Switchgear Panel')?'selected':'' ?>>
                11kV Indoor Switchgear Panel
              </option>
            <option value="11kV Outdoor Switchgear Panel"<?= ($data['product_name']=='11kV Indoor Switchgear Panel')?'selected':'' ?>>11kV Outdoor Switchgear Panel</option>
            <option value="33kV Indoor Switchgear Panel"<?= ($data['product_name']=='33kV Indoor Switchgear Panel')?'selected':'' ?>>33kV Indoor Switchgear Panel</option>
            <option value="33kV Outdoor Switchgear Panel"<?= ($data['product_name']=='33kV Outdoor Switchgear Panel')?'selected':'' ?>>33kV Outdoor Switchgear Panel</option>
            <option value="LT Switchgear Panel (415V)"<?= ($data['product_name']=='LT Switchgear Panel (415V)')?'selected':'' ?>>LT Switchgear Panel (415V)</option>
          </optgroup>
         
          <optgroup label="Fuses">
            <option value="HRC Fuse 32A"<?= ($data['product_name']=='HRC Fuse 32A')?'selected':'' ?>>HRC Fuse 32A</option>
            <option value="Drop-Out Fuse"<?= ($data['product_name']=='Drop-Out Fuse')?'selected':'' ?>>Drop-Out Fuse</option>
            <option value="Kit-Kat Fuse"<?= ($data['product_name']=='Kit-Kat Fuse')?'selected':'' ?>>Kit-Kat Fuse</option>
            <option value="Cartridge Fuse 32A"<?= ($data['product_name']=='Cartridge Fuse 32A')?'selected':'' ?>>Cartridge Fuse 32A</option>
            <option value="Thermal Fuse"<?= ($data['product_name']=='Thermal Fuse')?'selected':'' ?>>Thermal Fuse</option>
          </optgroup>

          <optgroup label="Capacitors">
            <option value="Power Capacitor 440V 25 kVAR"<?= ($data['product_name']=='Power Capacitor 440V 25 kVAR')?'selected':'' ?>>Power Capacitor 440V 25 kVAR</option>
            <option  value="Three Phase Power Capacitor"<?= ($data['product_name']=='Three Phase Power Capacitor')?'selected':'' ?>>Three Phase Power Capacitor</option>
            <option  value="Oil Filled Power Capacitor"<?= ($data['product_name']=='Oil Filled Power Capacitor')?'selected':'' ?>>Oil Filled Power Capacitor</option>
            <option value="APFC Panel"<?= ($data['product_name']==' APFC Panel')?'selected':'' ?>>APFC Panel</option>
            <option  value="LT Capacitor Bank Panel"<?= ($data['product_name']=='LT Capacitor Bank Panel')?'selected':'' ?>>LT Capacitor Bank Panel</option>
            <option  value="HT Capacitor Bank"<?= ($data['product_name']=='HT Capacitor Bank')?'selected':'' ?>>HT Capacitor Bank</option>
          </optgroup>

          <optgroup label="Resistors">
            <option value="Wire Wound Resistor 100Ω"<?= ($data['product_name']=='Wire Wound Resistor 100Ω')?'selected':'' ?>>Wire Wound Resistor 100Ω</option>
            <option value="Carbon Film Resistor 1kΩ"<?= ($data['product_name']=='Carbon Film Resistor 1kΩ')?'selected':'' ?>>Carbon Film Resistor 1kΩ</option>
            <option value="High Power Resistor 100W"<?= ($data['product_name']=='High Power Resistor 100W')?'selected':'' ?>>High Power Resistor 100W</option>
            <option value="Cement Resistor 5W"<?= ($data['product_name']=='Cement Resistor 5W')?'selected':'' ?>>Cement Resistor 5W</option>
            <option value="Precision Resistor 0.1%"<?= ($data['product_name']=='Precision Resistor 0.1%')?'selected':'' ?>>Precision Resistor 0.1%</option>
          </optgroup>

        </select>
     
  
 <div class="card-footer text-center">
        <button id="btn" type="submit" name="submit" class="btn btn-primary w-100 m-0 p-2 testinheading">Update</button>
    </div>
   

    </form>
    </div>
   </div>
 </div>
<?php
include 'footer.php';
?>
