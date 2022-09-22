<?php
include("head.php");
include("header.php");


function get_user_stats()
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

    $user_stats = [
        'customers' => $customers,
        'suppliers' => $suppliers,
        'categories' => $categories
    ];

    return $user_stats;
}


$user_stats = get_user_stats();
$producers = $user_stats['suppliers'];
$consumers = $user_stats['customers'];

$total_users = $producers + $consumers;

?>

<div class="row">
    <div class="col-xl-4 col-sm-6 col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                    <div class="align-self-center">
                        <i class="fas fa-user text-info fa-3x"></i>
                    </div>
                    <div class="text-end">
                        <h3><?= $total_users ?></h3>
                        <p class="mb-0">Total Users</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-sm-6 col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                    <div class="align-self-center">
                        <i class="fa fa-leaf text-success fa-3x"></i>
                    </div>
                    <div class="text-end">
                        <h3><?= $producers ?></h3>
                        <p class="mb-0">Producers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-sm-6 col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                    <div class="align-self-center">
                        <i class="fas fa-hamburger text-warning fa-3x"></i>
                    </div>
                    <div class="text-end">
                        <h3><?= $consumers ?></h3>
                        <p class="mb-0">Consumers</p>
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
?>

<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
        <tr>
            <th>Name</th>
            <th>Title</th>
            <th>Status</th>
            <th>Position</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>


        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">John Doe</p>
                        <p class="text-muted mb-0">john.doe@gmail.com</p>
                    </div>
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1">Software engineer</p>
                <p class="text-muted mb-0">IT department</p>
            </td>
            <td>
                <span class="badge badge-success rounded-pill d-inline">Active</span>
            </td>
            <td>Senior</td>
            <td>
                <button type="button" class="btn btn-link btn-sm btn-rounded">
                    Edit
                </button>
            </td>
        </tr>


    </tbody>
</table>

<?php
include("footer.php");
?>