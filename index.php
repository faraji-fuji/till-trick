<?php
include("header_main.php");
?>

<div class="container-fluid text-left shadow-sm">
    <div class="row justify-content-evenly">
        <div class="col-10">
            <div id="carouselExampleCaptions" class="carousel slide shadow mb-5 bg-body rounded" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images\nrd-D6Tu_L3chLE-unsplash.jpg" class="d-block w-100 rounded-top" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Fresh!</h5>
                            <p>Get fresh produce directly from the farm!.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images\ja-ma--gOUx23DNks-unsplash.jpg" class="d-block w-100 rounded-top" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Fruits and Spices!</h5>
                            <p>Fresh fruits and spices are available!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images\jakub-kapusnak-Hj53USePB1E-unsplash.jpg" class="d-block w-100 rounded-top" alt="...">
                        <div class="carousel-caption d-none d-md-block ">
                            <h5>Animal Products</h5>
                            <p>Get animal Products at an affordable price</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        
    </div>
</div>
<div></div>
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="images\tom-brunberg-D4ZtZX1UeAI-unsplash.jpg" class="d-block mx-lg-auto img-fluid shadow-lg rounded" alt="Happy farmer" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Ready Market for Your Products!</h1>
        <p class="lead">Are you a farmer? Dou you have products you would like to sell? Well, You have Come to the right place. Register as a Farmer and sell your product now!</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <!-- <button type="button" class="btn btn-success btn-lg px-4 me-md-2">Primary</button> -->
          <a href="register.php">
             <button type="button" class="btn btn-outline-success btn-lg px-4">Register Now!</button>
          </a>
        </div>
      </div>
    </div>
  </div>
<?php
include("footer.php");
?>