<?php echo "<div id='carouselExampleDark$c_id' class='carousel carousel-dark slide' data-bs-ride='carousel'>"; ?>
<div class="carousel-inner ">
    <div class="container">
        <!-- main  product row  -->
        <div class="carousel-item active container" data-bs-interval="10000">
            <div class="row">
                <?php

                //get products of a particular type and load them in the cards
                $query = "SELECT * FROM product WHERE product_type = '$product_category'";
                $result = $mysqli_db->query($query);
                $d = 0;
                foreach ($result as $product_item) {
                    $product_name =  $product_item['product_name'];
                    $name_array[$d] = $product_item['product_name'];
                    $price_array[$d] = $product_item['product_price'];
                    $unit_array[$d] = $product_item['product_unit'];
                    $image_array[$d] = $product_item['product_image'];
                    $id_array[$d] = $product_item['product_id'];
                    $d++;
                }

                //get number of cards required
                $no_of_cards = get_no_cards($product_category);

                if ($no_of_cards < 5) {
                    $item_index = 0;
                    for ($a = 1; $a <= $no_of_cards; $a++) {
                        $product_name = $name_array[$item_index];
                        $product_unit = $unit_array[$item_index];
                        $product_price = $price_array[$item_index];
                        $product_image = $image_array[$item_index];
                        $product_id = $id_array[$item_index];
                        include("productcard.php");
                        $item_index++;
                    }
                } else {
                    $item_index = 0;
                    for ($b = 1; $b <= 4; $b++) {
                        $product_name = $name_array[$item_index];
                        $product_unit = $unit_array[$item_index];
                        $product_price = $price_array[$item_index];
                        $product_image = $image_array[$item_index];
                        $product_id = $id_array[$item_index];
                        include("productcard.php");
                        $item_index++;
                    }
                }
                ?>
            </div>
        </div>

        <!-- subsequent rows -->
        <?php
        // if products are more than 4, create more rows
        // find the number of rows
        if ($no_of_cards % 4 == 0) {
            $no_of_rows = ($no_of_cards / 4) - 1;
        } else {
            $no_of_rows = (int)floor($no_of_cards / 4);
        }

        if ($no_of_cards > 4) {
            for ($c = 1; $c <= $no_of_rows; $c++) {
                include("productrow.php");
            }
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