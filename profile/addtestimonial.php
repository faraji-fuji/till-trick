<?php
include("head.php");
include("header.php");
include("../connect.php");
?>


<h5 class="text-center text-success mb-2">WRITE A TESTIMONIAL</h5>
<hr>

<div class="card mx-4 mx-md-5 shadow mt-5" style=" margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px); ">
  <div class="card-body py-5 px-md-5">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-6">
        <form action="addtestimonial.php" method="POST">

          <!-- Name input -->
          <div class="form-outline mb-4">
            <input name="sender_name" type="text" id="form4Example1" class="form-control">
            <label class="form-label" for="form4Example1" style="margin-left: 0px;">Name</label>
            <div class="form-notch">
              <div class="form-notch-leading" style="width: 9px;"></div>
              <div class="form-notch-middle" style="width: 42.4px;"></div>
              <div class="form-notch-trailing"></div>
            </div>
          </div>

          <!-- Message input -->
          <div class="form-outline mb-4">
            <textarea name="message" class="form-control" id="form4Example3" rows="4"></textarea>
            <label class="form-label" for="form4Example3" style="margin-left: 0px;">Message</label>
            <div class="form-notch">
              <div class="form-notch-leading" style="width: 9px;"></div>
              <div class="form-notch-middle" style="width: 60px;"></div>
              <div class="form-notch-trailing"></div>
            </div>
          </div>

          <!-- Submit button -->
          <button type="submit" name="send" class="btn btn-success btn-block" aria-controls="#picker-editor">Send</button>
        </form>

      </div>
    </div>
  </div>
</div>

<?php

if (isset($_POST['send'])) {

  // get form data from post
  $sender_name = $_POST['sender_name'];
  $sender_address = $_SESSION['email_address'];
  $message = $_POST['message'];



  // call function to insert into testimonial
  $res = insert_into_testimonial($sender_name, $sender_address, $message);

  if ($res) {
    echo "success";
  } else {
    echo "failed";
  }
}


include("footer.php");
?>