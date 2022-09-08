<?php
include("head.php");
include("header.php");
?>

<div class="row">
    <div class="col-xl-6 col-sm-6 col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                    <div class="align-self-center">
                        <i class="fas fa-pencil-alt text-info fa-3x"></i>
                    </div>
                    <div class="text-end">
                        <h3>278</h3>
                        <p class="mb-0">New Posts</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-sm-6 col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                    <div class="align-self-center">
                        <i class="far fa-comment-alt text-warning fa-3x"></i>
                    </div>
                    <div class="text-end">
                        <h3>156</h3>
                        <p class="mb-0">New Comments</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-sm-12 col-12 mb-4">
        <div class="card">

            <!-- Pie Chart -->
            <div class="card-body">

                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 ">
                    <h6 class="m-0 font-weight-bold text-success text-center">USER DISTRIBUTION</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart" height="250"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Customers
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Institutions
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Retailers
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-warning"></i> farmers
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("charts/user_distribution.php");
include("footer.php");
?>