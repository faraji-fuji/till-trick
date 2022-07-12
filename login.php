  <?php include("head.php") ?>

  <!-- Section: Design Block -->
  <!-- Section: Design Block -->
  <section class="text-center text-lg-start">
      <style>
          .cascading-right {
              margin-right: -50px;
          }

          @media (max-width: 991.98px) {
              .cascading-right {
                  margin-right: 0;
              }
          }
      </style>

      <!-- Jumbotron -->
      <div class="container py-4">
          <div class="row g-0 align-items-center">
              <div class="col-lg-6 mb-5 mb-lg-0">
                  <div class="card cascading-right" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
                      <div class="card-body p-5 shadow-5 text-center">
                          <h2 class="fw-bold mb-5">Login</h2>

                          <form action="login.php" method="POST">
                              <!-- Email input -->
                              <div class="form-outline mb-4">
                                  <input type="email" name="email_address" id="form3Example3" class="form-control" />
                                  <label class="form-label" for="form3Example3">Email address</label>
                              </div>
                              <!-- Password input -->
                              <div class="form-outline mb-4">
                                  <input type="password" name="user_password" id="form3Example4" class="form-control" />
                                  <label class="form-label" for="form3Example4">Password</label>
                              </div>
                              <!-- Submit button -->
                              <button type="submit" name="submit" class="btn btn-success btn-block mb-4">
                                  Login
                              </button>


                              <div class="text-center">
                                  <p>Not a member? <a href="signup.php">Register</a></p>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>

              <div class="col-lg-6 mb-5 mb-lg-0">
                  <img src="assets\images\thomas-le-pRJhn4MbsMM-unsplash.jpg" class="w-100 rounded-4 shadow-4" alt="" />
              </div>

          </div>
      </div>
      <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
  <!--Footer-->
  <?php
    if (isset($_POST['submit'])) {
        include("connect.php");

        //collect credentials
        $email_address = $_POST['email_address'];
        $user_password = $_POST['user_password'];

        //authenticate user
        $authentication_status = authenticate_user($email_address, $user_password);
        if ($authentication_status) {
            login($email_address);
        } else {
            echo "<script>";
            echo "alert('Wrong Username or Password!')";
            echo "</script>";
        }
    }

    include("footer.php") ?>
  <!--Footer-->