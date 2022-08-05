<?php include("head.php") ?>

<!-- Section: Design Block -->
<section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="background-image: url('assets/images/thomas-le-pRJhn4MbsMM-unsplash.jpg'); height: 300px;"></div>
    <!-- Background image -->
    <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
        <div class="card-body py-5 px-md-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-5">Sign up now</h2>

                    <form enctype="multipart/form-data" method="POST" action="signup.php">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" name="first_name" id="validationDefault03" class="form-control" required />
                                    <label class="form-label" for="validationDefault03">First name</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" name="last_name" id="validationDefault04" class="form-control" required />
                                    <label class="form-label" for="validationDefault04">Last name</label>
                                </div>
                            </div>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="email_address" id="validationDefault05" class="form-control" required />
                            <label class="form-label" for="validationDefault05">Email address</label>
                        </div>

                        <!-- Member Type -->
                        <div class="mb-4">
                            <label for="inputState1" class="form-label"></label>
                            <select id="inputState1" class="form-select" name="member_type">
                                <option selected>Member Type</option>
                                <option>Farmer</option>
                                <option>Retailer</option>
                                <option>Institution</option>
                                <option>Customer</option>
                            </select>
                        </div>

                        <!-- Physical location -->
                        <div class="mb-4">
                            <select id="inputState" class="form-select" name="user_location">
                                <option selected>Location</option>
                                <option>Nyawita</option>
                                <option>Mabungo</option>
                                <option>Lela</option>
                                <option>Ekwanda</option>
                            </select>
                        </div>

                        <!-- Nearest Landmark -->
                        <div class="form-outline mb-4">
                            <input type="text" name="physical_address" id="validationDefault03" class="form-control" />
                            <label class="form-label" for="form3Example3">Nearest Landmark</label>
                        </div>

                        <!-- Phone Number -->
                        <div class="form-outline mb-4">
                            <input type="tel" name="phone_number" id="validationDefault06" placeholder="254" class="form-control" required />
                            <label class="form-label" for="validationDefault06">Phone Number</label>
                        </div>

                        <!-- Profile Photo Input -->
                        <label for="inputGroupFile02" class="form-label my-2 visually-hidden">Profile Photo</label>
                        <div class="input-group mb-4">
                            <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
                            <input type="file" name="userfile" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload Profile Photo</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="user_password" id="validationDefault07" class="form-control" required />
                            <label class="form-label" for="validationDefault07">Password</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="validationDefault08" class="form-control" required />
                            <label class="form-label" for="validationDefault08">Repeat Password</label>
                        </div>



                        <!-- Submit button -->
                        <button type="submit" name="register" class="btn btn-success btn-block mb-4">
                            Sign up
                        </button>

                        <div class="text-center">
                            <p>Already have an account? <a href="login.php"> Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->


<?php

include("connect.php");

if (isset($_POST["register"])) {
    //please sanitize user input
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_address = $_POST['email_address'];
    $physical_address = $_POST['physical_address'];
    $member_type = $_POST['member_type'];

    $phone_number = $_POST['phone_number'];

    $profile_photo = $_FILES['userfile']['name'];

    $user_location = $_POST['user_location'];
    $user_password = $_POST['user_password'];

    // Handle Profile Photo Upload
    $uploads_dir = "assets/avatars/";
    $destination = $uploads_dir . $_FILES['userfile']['name'];
    $status = move_uploaded_file($_FILES['userfile']['tmp_name'], $destination);
    if ($status) {
        // echo "file uploaded succesfuly";
    } else {
        // echo "file was not uploaded";
    }

    // save user data
    $insert_status = insert_into_user(
        $first_name,
        $last_name,
        $email_address,
        $physical_address,
        $member_type,
        $user_location,
        $user_password,
        $profile_photo,
        $phone_number
    );

    // create user cart 
    insert_into_cart($email_address);

    // success message
    if ($insert_status) {
        echo "<script>";
        echo "alert('Registered Successfuly. Please proceed to login')";
        echo "</script>";
        // echo "<script>";
        // echo "location.assign('login.php')";
        // echo "</script>";
    } else {
        echo "<script>";
        echo "alert('Something went Wrong. Please Contact us for support. Thank You!')";
        echo "</script>";
    }
}

include("footer.php") ?>