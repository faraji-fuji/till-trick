<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
  <!-- Start your project here-->

  <div id="preview" class="preview">
    <div style="display: none;"></div>
    <div>


      <?php include("stats.php") ?>






      <div data-draggable="true" style="position: relative;">
        <!---->
        <!---->
        <section draggable="false" class="overflow-hidden pt-0" data-v-271253ee="">
          <section class="mb-10">
            <!-- Background image -->
            <div class="p-5 text-center bg-image" style="background-image: url(&quot;https://mdbootstrap.com/img/new/textures/full/142.jpg&quot;); height: 300px; background-size: cover; background-position: 50% 50%; background-color: rgba(0, 0, 0, 0);" aria-controls="#picker-editor"></div> <!-- Background image -->
            <div class="container">
              <div class="card mx-4 mx-md-5 text-center shadow-5-strong" style=" margin-top: -170px; background: hsla(0, 0%, 100%, 0.7); backdrop-filter: blur(30px); ">
                <!-- <div class="card-body px-4 py-5 px-md-5">
                  <h1 class="display-3 fw-bold ls-tight mb-4"> <span>The best offer on the market</span> <br> <span class="text-primary">for your business</span> </h1> <a class="btn  btn-primary btn-lg py-3 px-5 mb-2 mb-md-0 me-md-2" href="#" role="button" aria-controls="#picker-editor">Get started</a> <a class="btn  btn-link btn-lg py-3 px-5 mb-2 mb-md-0" data-ripple-color="primary" href="#" role="button" aria-controls="#picker-editor">Learn more</a>
                </div> -->
                <?php include("bestsellers.php") ?>
              </div>
            </div>
          </section>
        </section>
        <!---->
      </div>







    </div>
  </div>

  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>