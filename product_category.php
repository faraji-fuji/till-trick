<?php
include('head.php');
include('navbar.php');

include("connect.php");


$product_type = $mysqli_db->query("SELECT DISTINCT `product_type` FROM product");


//c_id -> caouresel id for each
$c_id = 1;
foreach ($product_type as $category) {
    $product_category =  $category['product_type'];
    include("product_category_name.php");
    include("product_crsl.php");
    $c_id += 1;
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>