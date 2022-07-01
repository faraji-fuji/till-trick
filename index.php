<?php
include("header_main.php");
?>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\nrd-D6Tu_L3chLE-unsplash.jpg" class="d-block w-100 " alt="...">

      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Fresh!</h1>
          <p>Get fresh produce directly from the farm!.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images\ja-ma--gOUx23DNks-unsplash.jpg" class="d-block w-100 " alt="...">

      <div class="container">
        <div class="carousel-caption">
          <h1>Fruits and Spices!</h1>
          <p>Fresh fruits and spices are available!</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images\artem-beliaikin-Mpm69Pad_-8-unsplash.jpg" class="d-block w-100" alt="...">

      <div class="container">
        <div class="carousel-caption text-end">
          <h1>Animal Products</h1>
          <p>Get animal Products at an affordable price</p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="images\tom-brunberg-D4ZtZX1UeAI-unsplash.jpg" class="d-block mx-lg-auto img-fluid shadow-lg rounded" alt="Happy farmer" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">Ready Market for Your Products!</h1>
      <p class="lead">Are you a farmer? Dou you have products you would like to sell? Well, You have Come to the right place. Register as a Farmer and sell your product now!</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="register.php">
          <button type="button" class="btn btn-outline-success btn-lg px-4">Register as a Farmer</button>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="container my-5 bg-white">
  <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
      <h1 class="display-4 fw-bold lh-1">Are You A Retailer?</h1>
      <p class="lead">We give you a one stop store for all your grocery supply. Register as a retailer and login to browse our catalog.</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
        <button type="button" class="btn btn-outline-success btn-lg px-4 me-md-2 fw-bold">Register As a Retailer</button>
      </div>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg ">
      <img class="rounded-top shadow-lg" src="images\gemma-stpjHJGqZyw-unsplash.jpg" alt="" width="720">
    </div>
  </div>
</div>


<?php
include("footer.php");
?>