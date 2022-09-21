<?php
include("head.php");
include("navbar.php");
include("connect.php");
?>
<!-- add testimonial-->

<div id="preview" class="preview">
  <div style="display: none;"></div>
  <div>
    <div data-draggable="true" style="position: relative;" draggable="false" class="">
      <!---->
      <!---->
      <section draggable="false" class="overflow-hidden " data-v-271253ee="">
        <section class="mb-10 text-center">
          <style>
            hr.divider-vertical {
              position: absolute;
              right: 0;
              top: 0;
              width: 1px;
              background-image: linear-gradient(180deg, transparent, hsl(0, 0%, 40%), transparent);
              background-color: transparent;
              height: 100%;
            }
          </style>
          <!-- Background image -->
          <div class="p-5 bg-image" style="background-image: url(&quot;https://images.unsplash.com/photo-1535379453347-1ffd615e2e08?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=Mnw5NjI0M3wwfDF8c2VhcmNofDF8fGFncmljdWx0dXJlfGVufDB8fHx8MTY2MjkwNzA5OQ&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&quot;); height: 300px; background-size: cover; background-position: 50% 50%;" aria-controls="#picker-editor"></div>
          <!-- Background image -->
          <div class="card mx-4 mx-md-5 shadow-5-strong" style=" margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px); ">
            <div class="card-body py-5 px-md-5">
              <h5 class="display-5 fw-bold ls-tight mb-4"> Write a Testimonial </h5>
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
                    <button type="submit" name="send" class="btn btn-primary btn-block" aria-controls="#picker-editor">Send</button>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!---->
    </div>
  </div>
</div>

<!-- add testimonial-->

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