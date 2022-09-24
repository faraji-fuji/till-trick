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
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark d-lg-block sticky-top shadow" style="z-index: 2000;">
    <div class="container-fluid">
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
                    <a class="nav-link" href="product_category.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about_us.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php#testimonials">Testimonials</a>
                </li>
                <li class="nav-item <?= $visibility ?> ">
                    <a class="nav-link" href="../profile/cart.php">Cart</a>
                </li>
                <li class="nav-item <?= $visibility ?>">
                    <a class="nav-link" href="../forum.php">Forum</a>
                </li>
            </ul>
            <!-- left links -->

            <!-- Login Button -->
            <a href="../login.php">
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
                            <a class="dropdown-item" href="../profile/profile.php">My profile</a>
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