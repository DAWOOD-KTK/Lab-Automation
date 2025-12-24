<?php
include 'header.php';
?>

<style>
    body{
        overflow-y: scroll;
    }
    #btn{
        font-size: 20px;
    }
    /* #img{
        height: 200px;
        width: 200px;
        border-radius: 50%;
        margin-left: auto;
        margin-right: auto;
        -o-object-fit: cover;
    }
     */


</style>

<div class="container-fluid">
    
    <div class="card col-md-8  mx-auto ">
        <div class="card-head">
            <h1 class="title bg-primary rounded text-center text-white p-1 m-1 " >CREATE USER</h1>
            <hr>
        </div>
        <div class="card-body ">
            <form action="backend/cuser.php" method="post">
                <input type="text" name="name" class="form-control mb-3"  placeholder="enter your name ">
                <input type="email" name="email" class="form-control mb-3" placeholder="enter your email ">
                <input type="password" name="password" class="form-control mb-3" placeholder="make your password">
                <input id="img" type="file" name="image" class="form-control mb-3" >
        </div>

        <div class="card-footer text-center">
            <button id="btn" type="submit" class="btn btn-primary w-100 m-0  p-2" >Submite</button>
            </form>
        </div>

      </div>
   



</div>




<?php
include 'footer.php';
?>