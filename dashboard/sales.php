<?php
include("head.php");
include("header.php");

function get_sales_stats()
{
    global $mysqli_db;

    // total sales
    $sql = "SELECT SUM(`total`) as total_sales FROM orders";
    $res = $mysqli_db->query($sql);
    $orders = $res->fetch_assoc();
    $total_sales = $orders['total_sales'];

    // Monthly sales
    $sql = "SELECT month(created_at) as month, sum(total) as total from orders group by month(created_at) order by month desc limit 1";
    $res = $mysqli_db->query($sql);
    $row = $res->fetch_assoc();
    $monthly_sales = $row['total'];

    // Weekly
    $sql = "SELECT concat('Week ', week(created_at)) as 'Week', round(avg(total), 2) as 'Average Sale' from orders GROUP by week(created_at)";

    // average daily sales

    // revenue

    // store stats in an array
    $sales_stats = [
        'total_sales' => $total_sales,
        'monthly_sales' => $monthly_sales
    ];

    return $sales_stats;
}

// invoke get_sales_stats and save the stats in variables.
$sales_stats = get_sales_stats();
$total_sales = $sales_stats['total_sales'];
$monthly_sales = $sales_stats['monthly_sales'];


?>

<!--Section: Statistics with subtitles-->
<section>
    <div class="row">
        <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between p-md-1">
                        <div class="d-flex flex-row">
                            <div class="align-self-center">
                                <h2 class="h1 mb-0 me-4"><?= "KES " . $total_sales ?></h2>
                            </div>
                            <div>
                                <h4>Total Sales</h4>
                                <p class="mb-0">All Sales Amount</p>
                            </div>
                        </div>
                        <div class="align-self-center">
                            <i class="far fa-heart text-danger fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between p-md-1">
                        <div class="d-flex flex-row">
                            <div class="align-self-center">
                                <h2 class="h1 mb-0 me-4"><?= "KES " . $monthly_sales ?></h2>
                            </div>
                            <div>
                                <h4>Total Sales</h4>
                                <p class="mb-0">Monthly Sales</p>
                            </div>
                        </div>
                        <div class="align-self-center">
                            <i class="fas fa-wallet text-success fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section: Statistics with subtitles-->

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

<!--Section: Sales Performance KPIs-->
<section class="mb-4">
    <div class="card">
        <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
                <strong>Sales Performance KPIs</strong>
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Product Detail Views</th>
                            <th scope="col">Unique Purchases</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Product Revenue</th>
                            <th scope="col">Avg. Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Value</th>
                            <td>18,492</td>
                            <td>228</td>
                            <td>350</td>
                            <td>$4,787.64</td>
                            <td>$13.68</td>
                        </tr>
                        <tr>
                            <th scope="row">Percentage change</th>
                            <td>
                                <span class="text-danger">
                                    <i class="fas fa-caret-down me-1"></i><span>-48.8%%</span>
                                </span>
                            </td>
                            <td>
                                <span class="text-success">
                                    <i class="fas fa-caret-up me-1"></i><span>14.0%</span>
                                </span>
                            </td>
                            <td>
                                <span class="text-success">
                                    <i class="fas fa-caret-up me-1"></i><span>46.4%</span>
                                </span>
                            </td>
                            <td>
                                <span class="text-success">
                                    <i class="fas fa-caret-up me-1"></i><span>29.6%</span>
                                </span>
                            </td>
                            <td>
                                <span class="text-danger">
                                    <i class="fas fa-caret-down me-1"></i><span>-11.5%</span>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Absolute change</th>
                            <td>
                                <span class="text-danger">
                                    <i class="fas fa-caret-down me-1"></i><span>-17,654</span>
                                </span>
                            </td>
                            <td>
                                <span class="text-success">
                                    <i class="fas fa-caret-up me-1"></i><span>28</span>
                                </span>
                            </td>
                            <td>
                                <span class="text-success">
                                    <i class="fas fa-caret-up me-1"></i><span>111</span>
                                </span>
                            </td>
                            <td>
                                <span class="text-success">
                                    <i class="fas fa-caret-up me-1"></i><span>$1,092.72</span>
                                </span>
                            </td>
                            <td>
                                <span class="text-danger">
                                    <i class="fas fa-caret-down me-1"></i><span>$-1.78</span>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--Section: Sales Performance KPIs-->



<?php
include("charts/weekly_sales.php");
include("footer.php");
?>