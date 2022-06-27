<?php echo "<div id='carouselExampleDark$c_id' class='carousel carousel-dark slide' data-bs-ride='carousel'>"; ?>
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
        for ($j = 1; $j <= 2; $j++) {
            include("productrow.php");
        }
        ?>
    </div>

    <?php echo "<button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleDark$c_id' data-bs-slide='prev'>" ?>
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </button>
    <?php echo "<button class='carousel-control-next' type='button' data-bs-target='#carouselExampleDark$c_id' data-bs-slide='next'>" ?>
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>
</div>
</div>