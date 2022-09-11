<div class="carousel-item">
    <div class="row">
        <?php
        $no_of_subsequent_cards = $no_of_cards;
        $no_of_subsequent_cards -= 4;
        if ($no_of_subsequent_cards > 4) {
            for ($i = 1; $i <= 4; $i++) {
                $product_name = $name_array[$item_index];
                $product_unit = $unit_array[$item_index];
                $product_price = $price_array[$item_index];
                $product_image = $image_array[$item_index];
                $product_id = $id_array[$item_index];
                include("product_card.php");
                $item_index++;
            }
        }
        if ($no_of_subsequent_cards < 5) {
            for ($i = 1; $i <= $no_of_subsequent_cards; $i++) {
                $product_name = $name_array[$item_index];
                $product_unit = $unit_array[$item_index];
                $product_price = $price_array[$item_index];
                $product_image = $image_array[$item_index];
                $product_id = $id_array[$item_index];
                include("product_card.php");
                $item_index++;
            }
        }
        ?>
    </div>
</div>