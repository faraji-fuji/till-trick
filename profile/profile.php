<?php
include("head.php");
include("header.php");
include("../connect.php");
?>


<?php
//fetch profile data from session variables
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$email_address = $_SESSION['email_address'];
$physical_address = $_SESSION['physical_address'];
$member_type = $_SESSION['member_type'];
$user_location = $_SESSION['user_location'];
$phone_number = $_SESSION['phone_number'];
$profile_photo = $_SESSION['profile_photo'];
?>


<div class="container py-5">
  <div class="row">
    <div class="col-lg-4">
      <div class="card mb-4">
        <div class="card-body text-center">
          <img src="../assets/avatars/<?= $profile_photo ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
          <h5 class="my-3"><?= $first_name ?></h5>
          <p class="text-muted mb-1"><?= $member_type ?></p>
          <p class="text-muted mb-4"><?= $user_location ?></p>
        </div>
      </div>


    </div>
    <div class="col-lg-8">
      <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Full Name</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0"><?= $first_name . " " . $last_name ?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Email</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0"><?= $email_address ?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Phone</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0"><?= $phone_number ?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Address</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0"><?= $user_location . ", " . $physical_address ?></p>
            </div>
          </div>
        </div>
      </div>





    </div>
  </div>
</div>

</div>
</main>

<?php
// handle remove

if (isset($_POST['remove'])) {
  $product_id_del = $_POST['remove'];

  $sql = "DELETE FROM `product` WHERE `product`.`product_id` = '$product_id_del'";
  $result = $mysqli_db->query($sql);
  if ($result) {
    echo "<script>";
    echo "alert('Item removed.')";
    echo "</script>";
    echo "<script>";
    echo "location.assign('profile.php')";
    echo "</script>";
  } else {
    echo "<script>";
    echo "alert('Something Went wrong, Contact admin for help')";
    echo "</script>";
  }
}

include("footer.php");
?>