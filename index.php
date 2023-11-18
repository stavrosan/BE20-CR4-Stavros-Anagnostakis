<?php

//Connection with components to get access to database
require_once 'components/db_connect.php';

//Select all cols from the db table to display them in HTML
$sql = "SELECT * FROM `media_biglibrary`";
$result = mysqli_query($connect,$sql);
$list = "";

if($rows = mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)) {
        $list .= "
        <div class='col md-4 p-2'>
        <div class='card h-100'>
        <img src= assets/$row[picture] class='card-img-top object-fit-cover' style='height:15rem' alt=''>
        <div class='card-body d-flex flex-column align-items-center'>
          <p class='card-text'>$row[type]</p>
          <h5 class='card-title'>$row[title]</h5>
          <h5 class='card-title fst-italic'>by $row[author_first_name] $row[author_last_name]</h5>
          <a href='publisher.php?publisher_name=$row[publisher_name]'<h5 class='card-title'>Publisher: $row[publisher_name]</h5></a>
          <div class='mt-auto align-self-center'>
          <a href='details.php?id=$row[id]' class='btn btn-info'>Show details</a>
          <a href='update.php?id=$row[id]' class='btn btn-warning'>Edit</a>
          <a href='delete.php?id=$row[id]' class='btn btn-danger'>Delete</a>
          </div>
        </div>
      </div>
      </div>
        ";
    }
}
else {
    $list = "No data";
};

mysqli_close($connect);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Media Library-BE20-CR4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<?php require_once 'components/navbar.php';?>

<!-- Bootstrap container for display of media cards list -->
<div class="container">
<div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-xs-2">
    <?= $list ?>
</div>
</div>


 <!-- Bootstrap footer -->
<div class="container my-5">

  <footer class="bg-dark text-center text-lg-start text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">See other media</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <i class="fas fa-book fa-fw fa-sm me-2">Bestsellers</i>
            </li>
            <li>
              <i class="fas fa-book fa-fw fa-sm me-2">All media</i>
            </li>
            <li>
              <i class="fas fa-user-edit fa-fw fa-sm me-2">Our authors</i>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Execution of the contract</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-white"><i class="fas fa-shipping-fast fa-fw fa-sm me-2"></i>Supply</a>
            </li>
            <li>
              <a href="#!" class="text-white"><i class="fas fa-backspace fa-fw fa-sm me-2"></i>Returns</a>
            </li>
            <li>
              <a href="#!" class="text-white"><i class="far fa-file-alt fa-fw fa-sm me-2"></i>Regulations</a>
            </li>
            <li>
              <a href="#!" class="text-white"><i class="far fa-file-alt fa-fw fa-sm me-2"></i>Privacy policy</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Publishing house</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-white">The Big Media Library</a>
            </li>
            <li>
              <a href="#!" class="text-white">123 Street</a>
            </li>
            <li>
              <a href="#!" class="text-white">05765 NY</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Write to us</h5>

          <ul class="list-unstyled">
            <li>
              <i class="fas fa-at fa-fw fa-sm me-2">Help in purchasing</i>
            </li>
            <li>
              <i class="fas fa-shipping-fast fa-fw fa-sm me-2">Check the order status</i>
            </li>
            <li>
              <i class="fas fa-envelope fa-fw fa-sm me-2">Join the newsletter</i>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2023 Copyright: Code Factory
    </div>
    <!-- Copyright -->
  </footer>

</div>
<!-- End of .container -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>