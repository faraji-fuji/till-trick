<?php
// function to get landing page statistics
function get_stats()
{
    global $mysqli_db;

    //customers
    $sql = "SELECT COUNT(*) AS customers FROM user WHERE member_type = 'retailer' OR member_type = 'customer' OR member_type = 'institution' ";
    $res = $mysqli_db->query($sql);
    $row = $res->fetch_assoc();
    $customers = $row['customers'];

    // suppliers
    $sql = "SELECT COUNT(*) AS suppliers FROM user WHERE member_type = 'farmer'";
    $res = $mysqli_db->query($sql);
    $row = $res->fetch_assoc();
    $suppliers = $row['suppliers'];

    // categories
    $sql = "SELECT DISTINCT `product_type` FROM product";
    $res = $mysqli_db->query($sql);
    $categories = $res->num_rows;

    $stats = [
        'customers' => $customers,
        'suppliers' => $suppliers,
        'categories' => $categories
    ];

    return $stats;
}

// get base number, e.g 12 = 10, 123 = 100, 1234 = 1000 ...
function get_base($num)
{
    $base = 0.1;

    while ($num > 1) {
        $num = $num / 10;
        $base = $base * 10;
    }
    return $base;
}


$stats = get_stats();

$customers = get_base($stats['customers']);
$suppliers = get_base($stats['suppliers']);
$categories = get_base($stats['categories']);

?>

<div data-draggable="true" style="position: relative;">
    <!---->
    <!---->
    <section draggable="false" class="container pt-5" data-v-271253ee="">
        <section class="mb-10 text-center">
            <style>
                hr.divider-vertical {
                    position: absolute;
                    right: 0;
                    top: 0;
                    width: 1px;
                    background-image: linear-gradient(180deg, transparent, hsl(0, 0%, 40%), transparent);
                    background-color: transparent;
                    height: 100%;
                }
            </style>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5 mb-lg-0 position-relative"> <i class="fas fa-user fa-3x text-success mb-4" aria-controls="#picker-editor"></i>
                    <h5 class="text-success fw-bold mb-3"><?= $customers ?>+</h5>
                    <h6 class="fw-normal mb-0">Customers</h6>
                    <hr class="divider-vertical d-none d-md-block">
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5 mb-lg-0 position-relative"> <i class="fas fa-industry fa-3x text-success mb-4" aria-controls="#picker-editor"></i>
                    <h5 class="text-success fw-bold mb-3"><?= $suppliers ?>+</h5>
                    <h6 class="fw-normal mb-0">Suppliers</h6>
                    <hr class="divider-vertical d-none d-lg-block">
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-0 position-relative"> <i class="fas fa-layer-group fa-3x text-success mb-4" aria-controls="#picker-editor"></i>
                    <h5 class="text-success fw-bold mb-3"><?= $categories ?>+</h5>
                    <h6 class="fw-normal mb-0">Product Categories</h6>
                    <hr class="divider-vertical d-none d-md-block">
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-0 position-relative"> <i class="fas fa-solid fa-headset fa-3x text-success mb-4" aria-controls="#picker-editor"></i>
                    <h5 class="text-success fw-bold mb-3">24 / 7</h5>
                    <h6 class="fw-normal mb-0">Support</h6>
                </div>
            </div>
        </section>
    </section>
    <!---->
</div>