<tr>
    <!-- customer  info -->
    <td>
        <div class="d-flex align-items-center">
            <img src="../assets/avatars/<?= $profile_photo ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
            <div class="ms-3">
                <p class="fw-bold mb-1"><?= $first_name . " " . $last_name ?> </p>
                <p class="text-muted mb-0"><?= $email_address ?></p>
                <p class="text-muted mb-0"><?= $phone_number ?></p>
                <p class="text-muted mb-0"><?= $user_location ?></p>
                <p class="text-muted mb-0"><?= $physical_address ?></p>
            </div>
        </div>
    </td>

    <!-- items -->
    <td>

        <?php

        // get product_id and quantity from order item
        $sql = "SELECT `product_id`, `quantity` FROM `order_item` WHERE `order_id` = '$order_id'";
        $res2 = $mysqli_db->query($sql);

        $num_of_rows_ = $res2->num_rows;


        for ($j = 0; $j < $num_of_rows_; $j++) {
            $order_item = $res2->fetch_assoc();

            $product_id = $order_item['product_id'];
            $quantity = $order_item['quantity'];

            // get product name and unit from product table
            $sql = "SELECT `product_name`, `product_unit` FROM `product` WHERE `product_id` = '$product_id'";
            $res3 = $mysqli_db->query($sql);
            $product = $res3->fetch_assoc();

            $product_name = $product['product_name'];
            $product_unit = $product['product_unit'];

            include("product_item.php");
        }
        ?>
    </td>
    <td>
        <p class="fw-normal mb-1"><?= "KES " . $total ?></p>
    </td>
    <td>
        <span class="badge badge-success rounded-pill d-inline">Active</span>
    </td>
    <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
            Edit
        </button>
    </td>

</tr>