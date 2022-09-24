<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white shadow-5-strong">
        <div class="position-sticky ">
            <div class="list-group list-group-flush mx-3 mt-4 bg-dark">

                <a href="profile.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i>
                    <span>Main dashboard</span>
                </a>

                <a href="inventory.php" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-area fa-fw me-3"></i>
                    <span>Inventory</span>
                </a>

                <a href="cart.php" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-lock fa-fw me-3"></i>
                    <span>Cart</span>
                </a>

                <a href="usefulLinks.php" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-line fa-fw me-3"></i>
                    <span>Useful Sites</span>
                </a>

                <a href="post_product.php" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-pie fa-fw me-3"></i>
                    <span>Sell</span>
                </a>

                <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-bar fa-fw me-3"></i>
                    <span>Update Profile</span>
                </a>

                <a href="addtestimonial.php" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-globe fa-fw me-3">
                    </i><span>Write Testimonial</span>
                </a>

                <a href="forum.php" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-globe fa-fw me-3">
                    </i><span>Forum</span>
                </a>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->


    <?php
    if (isset($_SESSION['profile_photo'])) {
        $profile_photo = $_SESSION['profile_photo'];
    }

    // hide navbar components (cart, forum, avatar) depending on the login status
    if ($_SESSION['login_status']) {
        $visibility = "";
    } else {
        $visibility = "visually-hidden";
    }

    // hide login button if a user is loged in (login button)
    if ($_SESSION['login_status']) {
        $inverted_visibility = "visually-hidden";
    } else {
        $inverted_visibility = "";
    }
    ?>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top " style="z-index: 2000;">
        <div class="container-fluid">

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Navbar brand -->
            <a class="navbar-brand nav-link" href="index.php">
                <strong>Ca$h Crop</strong>
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <!-- left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../product/product_category">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../aboutUs.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#testimonials">Testimonials</a>
                    </li>


                </ul>
                <!-- left links -->

                <!-- Login Button -->
                <a href="../pages/login.php">
                    <button type="button" class="btn btn-success <?= $inverted_visibility ?>">LOGIN</button>
                </a>
                <!-- Login Button -->

                <!-- avatar -->
                <ul class="navbar-nav mx-5 <?= $visibility ?> ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <img src="../assets/avatars/<?= $profile_photo ?>" class="rounded-circle" height="22" alt="Avatar" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Settings</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../pages/logout.php">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- avatar -->

            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!--Main Navigation-->

    <!-- Main Layout -->
    <main style="margin-top: 58px">
        <div class="container pt-4">