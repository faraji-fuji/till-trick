<?php
include("head.php");
include("navbar.php");
include("connect.php");
?>

<div class="container-fluid">
    <div class="row justify-content-evenly">
        <div class="col-8">
            <div class="card mt-5 shadow">
                <div class="border border-left border-right px-0">
                    <div>
                        <div class="card shadow-0">
                            <div class="card-body border-bottom pb-2">
                                <form action="forum.php" method="POST">
                                    <div>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="d-flex">
                                                    <img src="assets/avatars/<?= $_SESSION['profile_photo'] ?>" class="rounded-circle" height="50" alt="Avatar" loading="lazy" />
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="d-flex align-items-center w-100 ps-3">
                                                    <div class="w-100">
                                                        <input type="text" name="message_content" id="form143" class="form-control form-status border-0 py-1 px-0" placeholder="What's happening" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <button type="submit" name="post" class="btn btn-success btn-rounded">POST</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <?php

                                if (isset($_POST['post'])) {
                                    $message_content = $_POST['message_content'];
                                    $message_sender = $_SESSION['email_address'];

                                    // save message in the database
                                    insert_into_forum($message_content, $message_sender);
                                }

                                ?>

                            </div>
                        </div>

                        <!-- get forum items from the database and display here iteratively -->
                        <?php
                        $sql = "SELECT * FROM `forum` ORDER BY `forum`.`message_id` DESC LIMIT 5";
                        $rows = $mysqli_db->query($sql);


                        foreach ($rows as $row) {
                            $message_content = $row['message_content'];
                            $message_time = $row['message_time'];
                            $message_sender = $row['message_sender'];

                            // get avatar and name
                            $res = $mysqli_db->query("SELECT profile_photo, last_name FROM user WHERE email_address = '$message_sender'")->fetch_assoc();
                            $sender_name = $res['last_name'];
                            $profile_photo = $res['profile_photo'];
                            include("forum_item.php");
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>