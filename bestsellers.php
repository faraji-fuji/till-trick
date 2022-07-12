<section style="background-color: #eee;">
    <div class="text-center container py-2">
        <h4 class="mt-4 mb-4"><strong>Top Selling Products</strong></h4>

        <div class="row">
            <?php
            $sql = "SELECT `product_id`, COUNT(`product_id`) AS `value_occurance` FROM `order_item` GROUP BY `product_id` ORDER BY `value_occurance` DESC LIMIT 4";
            $result = $mysqli_db->query($sql);
            foreach ($result as $res) {

                $product_id = $res['product_id'];
                $result1 = $mysqli_db->query("SELECT product_image, product_name, product_type, product_price FROM product WHERE product_id = '$product_id'");
                $row1 = $result1->fetch_assoc();
                $image = $row1['product_image'];
                $product_name = $row1['product_name'];
                $category = $row1['product_type'];
                $price = $row1['product_price'];

                include("bestsellers_item.php");
            }
            ?>
        </div>
    </div>
</section>