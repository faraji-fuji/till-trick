<?php
include("header_farmer.php");
?>

<div class="px-4 pt-5 my-5 text-center border-bottom">
  <h1 class="display-4 fw-bold">Ready Market for Your Products!</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Are you a farmer? Dou you have products you would like to sell? Well, You have Come to the right place.</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
      <a href="post_product.php">
        <button type="button" class="btn btn-success btn-lg px-4 me-sm-3">Post Your Product Here!</button>
      </a>
      <button type="button" class="btn btn-outline-success btn-lg px-4">My Products</button>
    </div>
  </div>
  <div class="overflow-hidden" style="max-height: 30vh;">
    <div class="container px-5">
      <img src="images\tom-brunberg-D4ZtZX1UeAI-unsplash.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
    </div>
  </div>
</div>

<?php
include("footer.php");
?>