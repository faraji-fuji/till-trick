<?php
include("head.php");
include("header.php");

?>

<!-- Section: Weekly Sales chart -->
<!-- Area Chart -->
<section class="mb-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success text-center">WEEKLY SALES OVERVIEW</h6>
        </div>
        <div class="card-body">
            <div class="chart-area">
                <canvas id="myAreaChart" height="400"></canvas>
            </div>
        </div>
    </div>
</section>
<!-- Section: Weekly Sales chart -->


<!-- Section: Monthly Sales chart -->
<section class="mb-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success text-center ">MONTHLY SALES OVERVIEW</h6>
        </div>
        <div class="card-body">
            <canvas class="my-4 w-100" id="myChart" height="380"></canvas>
        </div>
    </div>
</section>
<!-- Section: Monthly Sales chart -->





<?php
include("charts/weekly_sales.php");
include("footer.php");
?>