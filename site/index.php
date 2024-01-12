<!DOCTYPE html>
<html lang="en">

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $title = "OSPO Now";
  $header = "light";
  include_once $path . "/shared/head.php";
?>

<body class="h-100">

  <?php include_once $path . '/shared/header.php' ?>

  <main class="w-100">
    <div class="banner-home">
      <div class="container-md px-3 px-md-5 w-100 h-100 py-4 justify-content-right">
        <h1 class="text-dark col-11 col-sm-6">Your open source program office is ready for you.</h1>
        <a class="btn btn-primary mt-4" href="/contact.php">Find out how we can help you today.</a>
      </div>
    </div>
    <div class="w-100 d-flex flex-grow-1 mt-3 px-4 pt-5">
      <div id="carouselHome" class="carousel mb-5 pb-3 slide mt-4"
      data-bs-ride="carousel" data-bs-interval="5000" data-bs-keyboard="false" data-bs-pause="hover">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
          <div class="carousel-item active" >
            <div class="card py-4">
              <div class="row px-3 px-md-5 d-flex justify-content-between">
              <div class="col-12">
                <h1>Open Source <strong>Experts on Demand</strong></h1>
                <p>
                  Navigating open source can be tricky, but it doesn't need to be.
                  OSPO Now is your virtual open source program office.
                  Whatever problems you're facing with open source, we have the expertise to help you tackle them. We want you to trust us with your solutions, so read more about our team to learn about why we are the right company for you.
                </p>
              </div>
              <div class="col-12 d-flex align-items-center">
                <a class="btn btn-primary btn-home mx-auto" href="/about.php">About Us</a>
              </div>
            </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card py-4">
              <div class="row px-3 px-md-5">
                <div class="col-12">
                  <h1><strong>Optimize</strong> your business with Open Source</h1>
                  <p>
                  Even if you're not using or producing open-source code, you can still use Open Source principles to optimize your workflows and processes.
                  From software design and maintenance, to creating an internal inner source program, we've got you covered.
                  Check out our full range of services to see how we can work together.
                  </p>
              </div>
              <div class="col-12 d-flex align-items-center">
                <a class="btn btn-primary btn-home mx-auto" href="/services.php">Our Services</a>
              </div>
            </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card py-4">
              <div class="row px-3 px-md-5">
                <div class="col-12">
                  <h1>Bespoke Contracts for <strong>You</strong></h1>
                  <p>
                  There's no turnkey solution when it comes to open source and that bespoke touch is often needed for success.
                  After an initial consultation to understand how open source can help your business, we'll put together the optimal team of open-source experts to solve your problems.
                  Contact us today and see how we can help you.
                  </p>
              </div>
              <div class="col-12 d-flex align-items-center">
                <a class="btn btn-primary btn-home mx-auto" href="/contact.php">Get in Touch</a>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php include_once $path . '/shared/footer.php' ?>

</body>
</html>
