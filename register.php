<?php
include("header.php")
?>

<div class="container shadow register-img">
    <div class="row">
        <div class="col col-a">
            <img src="https://picsum.photos/540/550" alt="" style="">
        </div>
        <div class="col">
        <form action="register">
        <label for="name" class="form-label">Name</label>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Physical Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Nearest Landmark">
        </div>
        <div class="col-md-4">
            <label for="inputState1" class="form-label">Member Type</label>
            <select id="inputState1" class="form-select">
            <option selected>Choose...</option>
            <option>Farmer</option>
            <option>Retailer</option>
            <option>Institution</option>
            <option>Regular Customer</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Location</label>
            <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>Nyawita</option>
            <option>Mabungo</option>
            <option>Lela</option>
            <option>Ekwanda</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword5" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="inputPassword5">
        </div>
        <div class="col-12 my-2">
            <button type="submit" class="btn btn-success">Register</button>
        </div>
    </form>
        </div>
    </div>
    
   
</div>




<?php
include("footer.php")
?>