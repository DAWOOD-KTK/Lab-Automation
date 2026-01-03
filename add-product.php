<?php
include 'header.php';
?>

<div class="app-body">
    <div class="container-fluid">
        <div class="card col-md-8 mx-auto">
            <div class="card-head">
                <h1 class="title bg-primary rounded text-center text-white p-1 m-1 testinheading">CREATE PRODUCT</h1>
                <hr>
            </div>
            <div class="card-body">
                <form action="backend/a_product.php" method="post">
                    <select class="form-select mb-3" name="product_code" required>
                        <option selected disabled>Product Code</option>
                        <option value="SG">SG</option>
                        <option value="FS">FS</option>
                        <option value="RS">RS</option>
                        <option value="CP">CP</option>
                    </select>

                    <select class="form-select mb-3" name="rivision" required>
                        <option selected disabled>Rivision</option>
                        <option value="R1">R1->Minor change</option>
                        <option value="R2">R2->Improvement / update</option>
                        <option value="R3">R3->Further modification</option>
                    </select>

                    <input type="text" name="manufacturing_no" class="form-control mb-3" placeholder="Enter Manufacturing Number (e.g., 0015)" required>

                    <select class="form-select mb-3" name="product_type" required>
                        <option selected disabled>Product Type</option>
                        <option value="Switchgear">Switchgear</option>
                        <option value="Fuse">Fuse</option>
                        <option value="Capacitor">Capacitor</option>
                        <option value="Resistor">Resistor</option>
                    </select>

                    <select class="form-select mb-3" name="product_name" required>
                        <option selected disabled>Enter Product Name</option>
                        <optgroup label="Switchgear">
                            <option value="11kV Indoor Switchgear Panel">11kV Indoor Switchgear Panel</option>
                            <option value="11kV Outdoor Switchgear Panel">11kV Outdoor Switchgear Panel</option>
                            <option value="33kV Indoor Switchgear Panel">33kV Indoor Switchgear Panel</option>
                            <option value="33kV Outdoor Switchgear Panel">33kV Outdoor Switchgear Panel</option>
                            <option value="LT Switchgear Panel (415V)">LT Switchgear Panel (415V)</option>
                        </optgroup>
                        <optgroup label="Fuses">
                            <option value="HRC Fuse 32A">HRC Fuse 32A</option>
                            <option value="Drop-Out Fuse">Drop-Out Fuse</option>
                            <option value="Kit-Kat Fuse">Kit-Kat Fuse</option>
                            <option value="Cartridge Fuse 32A">Cartridge Fuse 32A</option>
                            <option value="Thermal Fuse">Thermal Fuse</option>
                        </optgroup>
                        <optgroup label="Capacitors">
                            <option value="Power Capacitor 440V 25 kVAR">Power Capacitor 440V 25 kVAR</option>
                            <option value="Three Phase Power Capacitor">Three Phase Power Capacitor</option>
                            <option value="Oil Filled Power Capacitor">Oil Filled Power Capacitor</option>
                            <option value="APFC Panel">APFC Panel</option>
                            <option value="LT Capacitor Bank Panel">LT Capacitor Bank Panel</option>
                            <option value="HT Capacitor Bank">HT Capacitor Bank</option>
                        </optgroup>
                        <optgroup label="Resistors">
                            <option value="Wire Wound Resistor 100Ω">Wire Wound Resistor 100Ω</option>
                            <option value="Carbon Film Resistor 1kΩ">Carbon Film Resistor 1kΩ</option>
                            <option value="High Power Resistor 100W">High Power Resistor 100W</option>
                            <option value="Cement Resistor 5W">Cement Resistor 5W</option>
                            <option value="Precision Resistor 0.1%">Precision Resistor 0.1%</option>
                        </optgroup>
                    </select>

                    <div class="card-footer text-center">
                        <button type="submit" name="submit" class="btn btn-primary w-100 m-0 p-2 testinheading">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
