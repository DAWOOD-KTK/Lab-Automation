<?php
session_start();
if (!isset($_SESSION['webuser'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SRS Manufacture</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Slick CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        .product-item img {
            height: 180px;
            object-fit: cover;
        }
    </style>
</head>

<body>

<!-- HEADER -->
<header>
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-right">
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <div id="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a class="logo" href="#">
                        <img src="img/srs3-removebg-preview.png" width="50">
                        <small style="color:white">Manufacture</small>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- NAV -->
<nav id="navigation">
    <div class="container">
        <ul class="main-nav nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#Products_Tyep">Products</a></li>
            <li><a href="#contact">Contact</a></li>
            <?php if($_SESSION['webuser']['roll'] == 'admin'){ ?>
                <li><a href="admin_panel/index.php">Admin Panel</a></li>
            <?php } ?>
        </ul>
    </div>
</nav>

<!-- PRODUCTS SECTION -->
<div class="section" id="Products_Tyep">
    <div class="container">
        <div class="section-title text-center">
            <h3 class="title">Our Products</h3>
        </div>

        <!-- SLICK CONTAINER -->
        <div class="products-slick" id="product-container"></div>
    </div>
</div>

<!-- CONTACT -->
<div class="section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Contact Us</h3>
                <p>Get in touch with us</p>
            </div>

            <div class="col-md-6">
                <form id="contactForm">
                    <input class="input" type="text" name="name" placeholder="Name" required>
                    <input class="input" type="email" name="email" placeholder="Email" required>
                    <textarea class="input" name="message" placeholder="Message" required></textarea>
                    <button class="btn btn-danger">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer id="footer">
    <div class="container text-center">
        <p>© SRS Manufacture</p>
    </div>
</footer>

<!-- ================= JS FILES (ORDER MATTERS) ================= -->

<!-- jQuery FIRST -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!-- Slick -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- ================= CUSTOM JS ================= -->
<script>
$(document).ready(function(){

    fetch('localhost:8080/lab-automation/api/getactivepro.php')
    .then(res => res.json())
    .then(data => {

        if (!Array.isArray(data) || data.length === 0) {
            $('#product-container').html('<p class="text-center">No products found</p>');
            return;
        }

        let html = '';
        data.forEach(p => {
            html += `
            <div class="product-item p-2">
                <div class="card text-center shadow">
                    <img src="admin_panel/assets/images/${p.image}">
                    <div class="card-body">
                        <h6 class="text-primary">${p.product_name}</h6>
                        <small>${p.product_type}</small>
                    </div>
                </div>
            </div>`;
        });

        const container = $('#product-container');
        container.html(html);

        container.slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            responsive: [
                { breakpoint: 992, settings: { slidesToShow: 3 }},
                { breakpoint: 768, settings: { slidesToShow: 2 }},
                { breakpoint: 576, settings: { slidesToShow: 1 }}
            ]
        });
    })
    .catch(() => {
        $('#product-container').html('<p class="text-danger">Product loading error</p>');
    });

   
    $('#contactForm').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'admin_panel/backend/contact.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(){
                Swal.fire('Sent!', 'Message sent successfully', 'success');
                $('#contactForm')[0].reset();
            },
            error: function(){
                Swal.fire('Error', 'Something went wrong', 'error');
            }
        });
    });

});
</script>

</body>
</html>
