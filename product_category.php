<?php
include('header_customer.php');
?>

<div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
    <div class="carousel-inner ">
        <div class="container">
            <div class="carousel-item active container" data-bs-interval="10000">
                <div class="row">
                    <?php
                    for ($i = 1; $i <= 4; $i++) {
                        include("productcard.php");
                    }
                    ?>
                </div>
            </div>
            <?php
            for ($j = 1; $j <= 4; $j++) {
                include("productrow.php");
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<?php
for ($k = 1; $k <= 4; $k++) {
    $c_id = $k;
    include("productcrsl.php");
}
include("footer.php");
?>