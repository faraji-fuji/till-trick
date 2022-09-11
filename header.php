    <!--Main Navigation-->
    <header>
        <style>
            /* Carousel styling */
            #introCarousel,
            .carousel-inner,
            .carousel-item,
            .carousel-item.active {
                height: 100vh;
            }

            .carousel-item:nth-child(1) {
                background-image: url('assets/images/max-saeling-fRBJvnMrNNE-unsplash.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }

            .carousel-item:nth-child(2) {
                background-image: url('assets/images/szabolcs-toth-uMo-M14gmZc-unsplash.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }

            .carousel-item:nth-child(3) {
                background-image: url('assets/images/francisco-camino-4oCtrkjQGQY-unsplash.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }

            /* Height for devices larger than 576px */
            @media (min-width: 992px) {
                #introCarousel {
                    margin-top: -58.59px;
                }

                #introCarousel,
                .carousel-inner,
                .carousel-item,
                .carousel-item.active {
                    height: 65vh;
                }
            }

            .navbar .nav-link {
                color: #fff !important;
            }
        </style>

        <?php include("navbar.php"); ?>

        <!-- Carousel wrapper -->
        <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
            </ol>

            <!-- Inner -->
            <div class="carousel-inner">
                <!-- Single item -->
                <div class="carousel-item active">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                                <h1 class="mb-3">Affordable Agricultural Products</h1>
                                <h5 class="mb-4">Get all the supply you need for your grocery store.</h5>
                                <a class="btn btn-success btn-lg m-2" href="signup.php" role="button">Register Now</a>
                                <a class="btn btn-outline-success btn-lg m-2" href="product_category.php" role="button">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                                <h2>Animal Products Available</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">

                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                                <h2>Sell Your Agricultural Products on our Platform</h2>
                                <a class="btn btn-outline-light btn-lg m-2 <?= $visibility ?>" href="post_product.php" role="button">Post Your Product Here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Inner -->

            <!-- Controls -->
            <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Carousel wrapper -->
    </header>
    <!--Main Navigation-->