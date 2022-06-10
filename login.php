
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css\login.css">
  </head>
  <body class="text-center">
    
    <main class="form-signin shadow">
      <form method="post" action="login.php">
        <img class="mb-4" src="images\cashcroplogo2.png" alt="" width="120" >
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
          <input type="email" name="email_address" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password"  name="user_password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-success" type="submit" name="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
      </form>
    </main>

    <?php
      if (isset($_POST['submit']))
      {
          include("connect.php");
          $email_address = $_POST['email_address'];
          $user_password = $_POST['user_password'];
          $authentication_status = authenticate_user($email_address, $user_password);
          if($authentication_status){
            echo "<script>";
            echo "alert('Signed In Successfuly.')";
            echo "</script>";
          }
          else {
            echo "<script>";
            echo "alert('Wrong Username or Password!')";
            echo "</script>";
          }
      // compare submitted credentials against credentials in  the database
      }
    ?>
  </body>
</html>
