<?php
include("head.php");
include("header.php");

// Testimonial status legend
// 0 -> new
// 1 -> approved

// get testimonials with a status of 0, from the database
$sql = "SELECT * FROM testimonial WHERE `status` = 0";
$res = $mysqli_db->query($sql);
?>

<h5 class="text-success text-center mb-4">REVIEW TESTIMONIALS</h5>
<hr>

<div class="container">
    <div class="row justify-content-evenly">

        <?php
        // get number of rows
        $num_of_rows =  $res->num_rows;

        //  get dynamic content for each row and display the card
        for ($i = 0; $i < $num_of_rows; $i++) {
            $row = $res->fetch_assoc();
            $sender_name = $row['sender_name'];
            $sender_address = $row['sender_address'];
            $message = $row['message'];
            $button_id = $row['id'];

            //testimonial item
            include("testimonial_item.php");
        }
        ?>
    </div>
</div>

<?php
// check if action is set from GET
if (isset($_GET['action'])) {

    // get button_id and action from GET
    $button_id = $_GET["button_id"];
    $action = $_GET["action"];

    // modify query depending on action
    if ($action == "approve") {
        $sql = "UPDATE `testimonial` SET `status` = 1 WHERE `testimonial`.`id` = '$button_id'";
    } else {
        $sql =  "DELETE FROM `testimonial` WHERE `testimonial`.`id` = '$button_id'";
    }

    // execute query
    $mysqli_db->query($sql);

    // unset GET variables
    unset($_GET['action']);
    unset($_GET['button_id']);

    // load page
    echo "<script>window.location.assign('testimonials.php')</script>";
}

// footer
include("footer.php");
?>