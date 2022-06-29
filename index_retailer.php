<?php
include("header/header_retailer.php");
?>

<div class="px-4 pt-5 my-5 text-center border-bottom">
  <h1 class="display-4 fw-bold">Welcome!</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4 fw-normal">Browse our product catalogue and find out what is in store for you.</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
      <a href="product/product_category.php">
        <button type="button" class="btn btn-success btn-lg px-4 me-sm-3">Browse Products</button>
      </a>
    </div>
  </div>
  <div class="overflow-hidden" style="max-height: 30vh;">
    <div class="container px-5">
      <img src="images\gemma-stpjHJGqZyw-unsplash.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
    </div>
  </div>
</div>

<?php
include("footer.php");
?>