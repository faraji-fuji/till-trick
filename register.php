<?php
include("header_main.php")
?>

<div class="container shadow register-img">
    <div class="row">
        <div class="col col-a">
            <img src="https://picsum.photos/540/550" alt="" style="">
        </div>
        <div class="col">
            <form action="register.php" method="post">
                <label for="name" class="form-label">Name</label>
                <div class="row">
                    <div class="col">
                        <input type="text" name="first_name" class="form-control" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col">
                        <input type="text" name="last_name" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email_address" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Physical Address</label>
                    <input type="text" name="physical_address" class="form-control" id="inputAddress" placeholder="Nearest Landmark">
                </div>
                <div class="col-md-4">
                    <label for="inputState1" class="form-label">Member Type</label>
                    <select id="inputState1" class="form-select" name="member_type">
                        <option selected>Choose...</option>
                        <option>Farmer</option>
                        <option>Retailer</option>
                        <option>Institution</option>
                        <option>Regular Customer</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Location</label>
                    <select id="inputState" class="form-select" name="user_location">
                        <option selected>Choose...</option>
                        <option>Nyawita</option>
                        <option>Mabungo</option>
                        <option>Lela</option>
                        <option>Ekwanda</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" name="user_password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword5" class="form-label">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" id="inputPassword5">
                </div>
                <div class="col-12 my-2">
                    <button type="submit" name="register" class="btn btn-success">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include("connect.php");

if(isset($_POST["register"])){
    //please sanitize user input
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_address = $_POST['email_address'];
    $physical_address = $_POST['physical_address'];
    $member_type = $_POST['member_type'];
    $user_location = $_POST['user_location'];
    $user_password = $_POST['user_password'];

    //save user data
    $insert_status = insert_into_user($first_name, $last_name, $email_address, $physical_address, $member_type, $user_location, $user_password);
    
    // success message
    if ($insert_status){
        echo "<script>";
        echo "alert('Registered Successfuly. Please proceed to login')";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "alert('Something went Wrong. Please Contact us for support. Thank You!')";
        echo "</script>";
    }
}

include("footer.php")
?>