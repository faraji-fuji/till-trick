<?php
include("head.php");
include("header.php");
include("../connect.php");

$email_address = $_SESSION['email_address'];
?>

<h5 class="text-center text-success mb-2">MY PRODUCTS</h5>
<hr>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-4 mb-md-0">
            <div class="card-body">
                <!-- <p class="mb-4"><span class="text-success font-italic me-1">My Products</p> -->

                <?php
                // feth my products from the database
                $sql = "SELECT * from product WHERE product_owner = '$email_address'";
                $result = $mysqli_db->query($sql);

                foreach ($result as $product) {
                    $product_id = $product['product_id'];
                    $product_image = $product['product_image'];
                    $product_name = $product['product_name'];
                    $product_quantity = $product['available_stock'];
                    $product_unit = $product['product_unit'];
                    include("myproductitem.php");
                }
                ?>

            </div>
        </div>
    </div>
</div>

<hr>
<h5 class="text-center text-success mt-2 text-upper mb-2">INVENTORY CHART</h5>
<hr>

<div>
    <canvas id="inventoryChart"></canvas>
</div>

<script>
    // Inventory Chart

    // create an object named xmlhttp which is an instance of the xmlhttprequest class
    const xmlhttp = new XMLHttpRequest();

    // define onload property. In this case, the property is a function 
    xmlhttp.onload = function() {
        // create object named myObj by parsing the JSON recieved from the xmlhttp request
        const myObj = JSON.parse(this.responseText);

        // assign properties of the object to 
        var lab = myObj.labels;
        var dat = myObj.data;


        // setup
        const data = {
            labels: lab,
            datasets: [{
                label: 'My Inventory',
                backgroundColor: 'rgb(0, 183, 74)',
                borderColor: 'rgb(255, 99, 132)',
                data: dat,
            }]
        };

        // config
        const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };

        //  render
        const myChart = new Chart(
            document.getElementById('inventoryChart'),
            config
        );

    }

    // target file that outputs JSON
    xmlhttp.open("GET", "inventoryData.php", true);

    // send request
    xmlhttp.send();
</script>


<?php
include("footer.php");
?>