<?php
include('../database.php');
?>

<!doctype html>
<html lang="en">

  <head>
    <title>Kiddy &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower" rel="stylesheet">
    
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container mb-3">
          <div class="d-flex align-items-center">
            <div class="site-logo mr-auto">
              <a href="index.html">Kiddy<span class="text-primary">.</span></a>
            </div>
            <div class="site-quick-contact d-none d-lg-flex ml-auto ">
              <div class="d-flex site-info align-items-center mr-5">
                <span class="block-icon mr-3"><span class="icon-map-marker text-yellow"></span></span>
                <span>Irbid, <br> Jordan</span>
              </div>
              <div class="d-flex site-info align-items-center">
                <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
                <span>Sunday - Saturday 8:00AM - 4:00PM <br>Friday  CLOSED</span>
              </div>
              
            </div>
          </div>
        </div>


        <div class="container">
          <div class="menu-wrap d-flex align-items-center">
            <span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>

              

              <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto ">
                  <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                  <li><a href="about.html" class="nav-link">About</a></li>
                </ul>
              </nav>

              <div class="top-social ml-auto">
                <a href="#"><span class="icon-facebook text-teal"></span></a>
                <a href="#"><span class="icon-twitter text-success"></span></a>
                <a href="#"><span class="icon-linkedin text-yellow"></span></a>
              </div>
          </div>
        </div>

       

      </header>

    <div class="ftco-blocks-cover-1">
       
      <div class="site-section-cover overlay">
        <div class="container">
          <div class="row align-items-center ">
            <div class="col-md-5 mt-5 pt-5">
              <span class="text-cursive h5 text-red">Welcome Kiddy</span>
              <h1 class="mb-3 font-weight-bold text-teal">Bring Fun Life To Your Kids</h1>
              <p>Amazing Platform for your kids</p>
              <p class="mt-5"><a href="./about.html" class="btn btn-primary py-4 btn-custom-1">Learn More</a></p>
            </div>
            <div class="col-md-6 ml-auto align-self-end">
              <img src="images/kid_transparent.png" alt="Image" class="img-fluid">
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="text-blue" >Our Challenges</h2>
          </div>
        </div>
        <div class="row" ><?php
    $sql = "SELECT * FROM challenges";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
          <div class="col-lg-4" >
            <div class="block-2 red"style="height: 30vh;">

    <h2><?php echo $row["ChallengeName"] ?></h2>
    <p><?php echo $row["Description"] ?></p>

            </div>
          </div>
          <?php
    }
    ?>

        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 ml-auto pl-md-5">
            <h3 class="text-black">Bring Fun Life To Your Kids</h3>
            <p><span>"Welcome to Kiddy, where imagination knows no bounds and fun adventures await! Join us on a journey filled with creativity, laughter, and endless possibilities for kids of all ages. Let's explore, learn, and play together in the colorful world of Kiddy!"</span></p>

            <p class="mt-5"><a href="./about.html" class="btn btn-warning py-4 btn-custom-1">More About Us</a></p>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section bg-info">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h2 class="text-white">Our Events</h2>
      </div>
    </div>
    <div class="d-flex flex-row justify-content-between">
      <?php
      $events = mysqli_query($conn, "SELECT * FROM events");
      while ($record = mysqli_fetch_array($events)) {
      ?>
        <div class="col-lg-4 mb-4 mb-lg-0">
          <div class="package text-center bg-white">
            <span class="img-wrap"><img src="images/flaticon/svg/001-jigsaw.svg" alt="Image" class="img-fluid"></span>
            <h3 class="text-teal"><?php echo $record["name"]; ?></h3>
            <p><?php echo $record["descr"]; ?></p>
            <p>Capcity: <?php echo $record["capcity"]; ?>   ,Age: <?php echo $record["age"]; ?></p>
            <p><a href="#app" class="btn btn-primary btn-custom-1 mt-4"><?php echo $record["time"]; ?></a></p>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>


    <!-- <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="text-cursive h5 text-red d-block">Pricing Plan</span>
            <h2 class="text-black">Our Pricing</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quis cupiditate fugit, voluptatibus ullam, non laboriosam alias veniam, ex inventore iure sed?</p>
          </div>
          <div class="col-md-4">
            <div class="pricing teal">
              <span class="price">
                <span>$30</span>
              </span>
              <h3>Silver Pack</h3>
              <ul class="ul-check list-unstyled teal">
                <li>Lorem ipsum dolor sit amet</li>  
                <li>Consectetur adipisicing elit</li>
                <li>Nemo quis cupiditate</li>
              </ul>
              <p><a href="#" class="btn btn-teal btn-custom-1 mt-4">Buy Now</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="pricing danger">
              <span class="price">
                <span>$70</span>
              </span>
              <h3>Golden Pack</h3>
              <ul class="ul-check list-unstyled danger">
                <li>Lorem ipsum dolor sit amet</li>  
                <li>Consectetur adipisicing elit</li>
                <li>Nemo quis cupiditate</li>
              </ul>
              <p><a href="#" class="btn btn-danger btn-custom-1 mt-4">Buy Now</a></p>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    
              
    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="text-black">What Our Client Says About Us</h2>
          </div>
        </div>
        <form action="./eventdetalis.php" method="post">
                <div class="row g-3">
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <label for="name"> Name</label>
                      <input type="text" class="form-control border-0" id="name" placeholder=" your Name" name="name">

                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <label for="comment"> comment</label>
                      <input type="text" class="form-control border-0" id="comment" placeholder=" your comment" name="comment">

                    </div>
                  </div>
                  <div class="col-sm-12">
                    <br><br>
                    <div class="form-floating">
                      <input type="submit" class="btn btn-secondary w-100 py-3" id="submit" value="send" name="bttn">

                    </div>
                  </div>

                </div>
              </form>
              <br><br>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="testimonial-3-wrap">
              <?php
              $events = mysqli_query($conn, "SELECT * FROM testimonial");
      while ($record = mysqli_fetch_array($events)) {
      ?>
              

<br>
              <div class="owl-carousel nonloop-block-13">
                <div class="testimonial-3 d-flex">
                  <div class="vcard-wrap mr-5">
                    <img src="images/default.jpg" alt="Image" class="vcard img-fluid">
                  </div>
                  <div class="text">
                    <h3><?php echo $record["name"]; ?></h3>
                    <p><?php echo $record["comentes"]; ?></p>
                  </div>
                </div>
              </div>
<br>
              <?php } ?>
            </div>
            <br><br>
          </div>
        </div>
        
        <div class="row mt-5 justify-content-center">

          <div class="col-md-8">
            

            <div class="row">
              <div class="col-lg-4 text-center">
                <span class="text-teal h2 d-block">64</span>
                <span>Happy Client</span>
              </div>
              <div class="col-lg-4 text-center">
                <span class="text-success h2 d-block">12</span>
                <span>Staffs</span>
              </div>
              <div class="col-lg-4 text-center">
                <span class="text-danger h2 d-block">2000+</span>
                <span>Our Followers</span>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


    <div class="site-section py-5 bg-warning">
      <div class="container" id="app">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Make Appointment</h1>
                                <?php
                                

                                // Process form data
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                    $gname = $_POST["gname"];
                                    $gmail = $_POST["gmail"];
                                    $cname = $_POST["cname"];
                                    $cage = $_POST["cage"];
                                    $ename = $_POST["ename"];
                                    $notes = $_POST["notes"];

                                    
                                    $sql = "INSERT INTO makeappointmant (gurdian_name, gurdian_email, child_name, child_age , message, ename) VALUES ('$gname', '$gmail', '$cname', '$cage','$notes'. '$ename')";

                                    if (mysqli_query($conn, $sql)) { 
                                        // echo "<h1>New Record Inserted successfully!</h1><br>";
                                        ?>
                                        <script>
                                          Swal.fire({
                                                  title: "Your Appointment submitted!",
                                                  confirmButtonText: "OK",
                                                  customClass: {
                                                      confirmButton: 'custom-confirm-button-class'
                                                  }
                                                  }).then((result) => {
                                                      if (result.isConfirmed) {
                                                          window.location.href = "./index.php"; 
                                                      }
                                                  }); 

                                                  
                                        </script>
                                        <?php
                                    } else {
                                        echo "Error: " . $stmt->error;
                                    }
                                }




                                ?>
                                <form action="" method="post">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input name="gname" type="text" class="form-control border-0" id="gname" placeholder="Gurdian Name">
                                                <br>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                              
                                                <input name="gmail" type="email" class="form-control border-0" id="gmail" placeholder="Gurdian Email">
                                                <br>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input name="cname" type="text" class="form-control border-0" id="cname" placeholder="Child Name">
                                                <br>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input name="cage" type="text" class="form-control border-0" id="cage" placeholder="Child Age">
                                                <br>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-floating">
                                                <input name="ename" type="text" class="form-control border-0" id="cage" placeholder="Event Name">
                                                <br>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea name="notes" class="form-control border-0" placeholder="Leave a note here" id="message" style="height: 100px"></textarea>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button name="SubmitBtn" class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="./images/img_5.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="footer-heading mb-3">About Us</h2>
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>

                <h2 class="footer-heading mb-4">Newsletter</h2>
                <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Send" class="btn btn-primary">
                </form>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-4 ml-auto">
                <h2 class="footer-heading mb-4">Navigation</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Navigation</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
                
              </div>

              
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

