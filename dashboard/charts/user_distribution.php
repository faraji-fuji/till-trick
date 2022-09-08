<?php
// function to get the number of users of a particular type
function get_number_of_users($type)
{
    global $mysqli_db;

    $sql = "SELECT COUNT(email_address) as `number` FROM `user` WHERE `member_type` = '$type'";
    $res = $mysqli_db->query($sql);
    $row = $res->fetch_assoc();
    return $row['number'];
}

// Number of customers
$no_of_customers = get_number_of_users('customer');

// Number of institutions
$no_of_intitutions = get_number_of_users('institution');

// Number of retailers
$no_of_retailers = get_number_of_users('retailer');

// Number of farmers
$no_of_farmers = get_number_of_users('farmer');
?>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Customers", "Institutions", "Retailers", "Farmers"],
            datasets: [{
                data: [
                    <?= $no_of_customers ?>,
                    <?= $no_of_intitutions ?>,
                    <?= $no_of_retailers ?>,
                    <?= $no_of_farmers ?>
                ],
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e'],
                hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });
</script>