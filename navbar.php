<?php
if (isset($_SESSION['profile_photo'])) {
    $profile_photo = $_SESSION['profile_photo'];
}
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark d-none d-lg-block sticky-top shadow" style="z-index: 2000;">
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" href="index.php">
            <strong>Ca$h Crop</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product_category">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Testimonials</a>
                </li>

                <li class="nav-item
                <?php
                //  Hide cart if session variable is not set
                if ($_SESSION['login_status']) {
                } else {
                    echo "visually-hidden";
                }
                ?>
                ">
                    <a class="nav-link" href="cart_view.php">Cart</a>
                </li>

                <li class="nav-item
                <?php
                //  Hide cart is session variable is not set
                if ($_SESSION['login_status']) {
                } else {
                    echo "visually-hidden";
                }
                ?>
                ">
                    <a class="nav-link" href="forum.php">Forum</a>
                </li>

                <li class="nav-item
                <?php
                //  Hide cart is session variable is not set
                if ($_SESSION['login_status'] && $_SESSION['email_address'] == "admin@cashcrop.com") {
                } else {
                    echo "visually-hidden";
                }
                ?>
                ">
                    <a class="nav-link" href="reports.php">Reports</a>
                </li>
            </ul>

            <!-- Login Button -->
            <a href="login.php">
                <button type="button" class="btn btn-success 
                 
                <?php
                // Hide login button if session variable is set
                if ($_SESSION['login_status']) {
                    echo "visually-hidden";
                }
                ?>
                 
                 ">LOGIN</button>
            </a>


            <!-- avatar -->
            <ul class="navbar-nav mx-5
                <?php
                //  Hide avatar is session variable is not set
                if ($_SESSION['login_status']) {
                } else {
                    echo "visually-hidden";
                }
                ?>
                ">
                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="assets/avatars/<?= $profile_photo ?>" class="rounded-circle" height="22" alt="Avatar" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="profile.php">My profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar -->