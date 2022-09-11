<?php


$sql = "SELECT * from testimonial ORDER BY `id` DESC LIMIT 3";
$res = $mysqli_db->query($sql);

$row1 = $res->fetch_assoc();
$row2 = $res->fetch_assoc();
$row3 = $res->fetch_assoc();

$sender_address = $row1['sender_address'];
$sql = "SELECT `member_type`, `profile_photo` FROM `user` WHERE email_address = '$sender_address'";
$res = $mysqli_db->query($sql);
$row1_ = $res->fetch_assoc();
$row1_image = $row1_['profile_photo'];
$row1_type = $row1_['member_type'];

$sender_address = $row2['sender_address'];
$sql = "SELECT `member_type`, `profile_photo` FROM `user` WHERE email_address = '$sender_address'";
$res = $mysqli_db->query($sql);
$row2_ = $res->fetch_assoc();
$row2_image = $row2_['profile_photo'];
$row2_type = $row2_['member_type'];

$sender_address = $row3['sender_address'];
$sql = "SELECT `member_type`, `profile_photo` FROM `user` WHERE email_address = '$sender_address'";
$res = $mysqli_db->query($sql);
$row3_ = $res->fetch_assoc();
$row3_image = $row3_['profile_photo'];
$row3_type = $row3_['member_type'];



?>




<div data-draggable="true" class="" style="position: relative;" draggable="false">
    <!---->
    <!---->
    <section draggable="false" class="container pt-5" data-v-271253ee="" id="testimonials">
        <section class="mb-10 text-center">
            <h2 class="fw-bold mb-7 text-center">Testimonials</h2>
            <div class="row gx-lg-5">
                <div class="col-lg-4 col-md-12 mb-6 mb-lg-0">
                    <div class="card shadow-2-strong">
                        <div class="bg-image hover-overlay ripple shadow-4-strong rounded mx-3" data-mdb-ripple-color="light" style="margin-top: -15px">
                            <img src="<?= "assets/avatars/" . $row1_image ?>" class="w-100" alt="" aria-controls="#picker-editor" draggable="false">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $row1['sender_name'] ?></h5>
                            <h6 class="text-success mb-3"><?= $row1_type ?></h6>
                            <p class="card-text"><?= $row1['message'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-6 mb-lg-0">
                    <div class="card shadow-2-strong">
                        <div class="bg-image hover-overlay ripple shadow-4-strong rounded mx-3" data-mdb-ripple-color="light" style="margin-top: -15px">
                            <img src="<?= "assets/avatars/" . $row2_image ?>" class="w-100" alt="" aria-controls="#picker-editor" draggable="false">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $row2['sender_name'] ?></h5>
                            <h6 class="text-success mb-3"><?= $row2_type ?></h6>
                            <p class="card-text"><?= $row2['message'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-6 mb-lg-0">
                    <div class="card shadow-2-strong">
                        <div class="bg-image hover-overlay ripple shadow-4-strong rounded mx-3" data-mdb-ripple-color="light" style="margin-top: -15px">
                            <img src="<?= "assets/avatars/" . $row3_image ?>" class="w-100" alt="" aria-controls="#picker-editor" draggable="false">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $row3['sender_name'] ?></h5>
                            <h6 class="text-success mb-3"><?= $row3_type ?></h6>
                            <p class="card-text"><?= $row3['message'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!---->
</div>