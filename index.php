<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Karma Enterprise</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Karma Enterprise" name="keywords" />
  <meta content="Karma Enterprise" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <?php
  include "nav.php";
  ?>
  <!-- Carousel Start -->
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/Untitled-1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="image/Untitled-2.jpg" class="d-block w-100" alt="...">
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
              <img class="position-absolute w-100 h-100" src="image/export-product/4.jpg" alt=""
                style="object-fit: cover" />
              <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px">
                <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                  <h1 class="text-white">4</h1>
                  <h2 class="text-white">Years</h2>
                  <h5 class="text-white mb-0">Experience</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <div class="border-start border-5 border-primary ps-4 mb-5">
                <h6 class="text-body text-uppercase mb-2">About Us</h6>
                <h2 class="display-6 mb-0">
                  Experience the Perfect Fit with Karma Enterprise
                </h2>
              </div>
              <p>
                At Karma Enterprise, we specialize in creating stylish, comfortable, and high-quality shirts and
                t-shirts
                for every occasion. Founded in 2021 in Gujarat, we are proud of our four years of expertise in the
                apparel
                industry. Our dedicated team of professionals ensures that each product meets the highest standards of
                design, comfort, and durability.
              </p>
              <p class="mb-4">
                Whether you’re dressing up for a formal event or enjoying a casual day out, our clothing offers the
                perfect balance of style and comfort. We believe that every individual deserves clothing that makes them
                feel confident and stylish, which is why we put so much care and attention into every piece we produce.
              </p>
              <div class="border-top mt-4 pt-4">
                <div class="row g-4">
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                    <h6 class="mb-0">Ontime at services</h6>
                  </div>
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                    <h6 class="mb-0">24/7 hours services</h6>
                  </div>
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                    <h6 class="mb-0">We Are Manufacture</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <!-- <div class="container-fluid my-5 p-0">
    <div class="row g-0">
      <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="position-relative">
          <img class="img-fluid w-100" src="img/fact-1.jpg" alt="" />
          <div class="facts-overlay">
            <h1 class="display-1">01</h1>
            <h4 class="text-white mb-3">Custom Apparel Design</h4>
             
            <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
        <div class="position-relative">
          <img class="img-fluid w-100" src="img/fact-2.jpg" alt="" />
          <div class="facts-overlay">
            <h1 class="display-1">02</h1>
            <h4 class="text-white mb-3">Bulk Manufacturing for Businesses</h4>
           
            <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
        <div class="position-relative">
          <img class="img-fluid w-100" src="img/fact-3.jpg" alt="" />
          <div class="facts-overlay">
            <h1 class="display-1">03</h1>
            <h4 class="text-white mb-3">Quality Fabric Selection</h4>
            
            <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.7s">
        <div class="position-relative">
          <img class="img-fluid w-100" src="img/fact-4.jpg" alt="" />
          <div class="facts-overlay">
            <h1 class="display-1">04</h1>
            <h4 class="text-white mb-3"> On-Time Delivery</h4>
            
            <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div> -->
    <!-- Facts End -->





    <section>
      <div class="fixed_bg"></div>
    </section>
    <!-- Features Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">Why Choose Us!</h6>
              <h2 class="display-6 mb-0">
                Why Choose Karma Enterprise?
              </h2>
            </div>
            <p class="mb-5">
              At Karma Enterprise, we are dedicated to providing our customers with the best in quality, style, and
              service. Here’s why you should choose us for your apparel needs:
            </p>
            <div class="row gy-5 gx-4">
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-3">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Quality You Can Trust</h6>
                </div>
                <span>We believe in delivering only the highest quality products. </span>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="d-flex align-items-center mb-3">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Expertise and Experience</h6>
                </div>
                <span>With 4 years of industry experience, we have honed our craft to perfection. </span>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-3">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Customization at Your Fingertips</h6>
                </div>
                <span>At Karma Enterprise, we understand that everyone has unique style preferences. </span>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="d-flex align-items-center mb-3">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Timely and Reliable Service</h6>
                </div>
                <span>We know how important it is to receive your products on time. </span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
              <img class="position-absolute w-100 h-100" src="image/banner/export.jpg" alt=""
                style="object-fit: cover" />
              <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px">
                <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                  <h1 class="text-white">20</h1>
                  <h4 class="text-white">Machinery</h4>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->
    <section style="margin: 9rem 0rem;">
      <div class="text-center">
        <h6 class="text-body text-uppercase mb-2">Products</h6>
        <h2 class="display-6 mb-0 mb-5">
          Men's Clothing
        </h2>
      </div>
      <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#shirt-tab-pane"
            type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Shirt</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#t-shirt-tab-pane"
            type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"> T-Shirt</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#shorts-tab-pane" type="button"
            role="tab" aria-controls="contact-tab-pane" aria-selected="false">Shorts </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#co-ords-tab-pane"
            type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Co-Ords Set </button>
        </li>

      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="shirt-tab-pane" role="tabpanel" aria-labelledby="home-tab"
          tabindex="0">
          <!-- cat1 -->
          <div class="container  " style="margin-top: 6rem;margin-bottom:6rem">

            <div class="row text-center">
              <?php
              $con = mysqli_connect("localhost", "root", "", "karma");
              // $s = "SELECT * FROM `pro` ";
              $s = "SELECT * FROM `pro` Where  `role` = '0' and  `cat_name` = 'shirt'";
              $q = mysqli_query($con, $s);
              while ($row = mysqli_fetch_array($q)) {


              ?>
                <div class="col-12 col-sm-6  col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                  <div class="cat_inner  h-100 border d-block rounded-top  text-capitalize p-3 shadow-lg rounded ">
                    <div class="cat_icon pro_box border border-4 border-dark"><img src="image/pro/<?php echo $row['image'] ?>"
                        height="250px" width="100%" style="object-fit:cover" alt="fennel jpg image">
                    </div>
                    <div class="cat_name mt-3 fw-bold  mx-2 text-danger"> <?php echo $row['name'] ?></div>
                  </div>
                  <a href="" class="btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry
                    now</a>
                </div>
              <?php  } ?>
            </div>
          </div>
          <!-- cat1 end -->
        </div>
        <div class="tab-pane fade" id="t-shirt-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
          <div class="container  " style="margin-top: 6rem;margin-bottom:6rem">

            <div class="row text-center">
              <?php
              $con = mysqli_connect("localhost", "root", "", "karma");
              $s = "SELECT * FROM `pro` Where `role` = '0' and  `cat_name` = 't-shirt'";
              $q = mysqli_query($con, $s);
              while ($row = mysqli_fetch_array($q)) {


              ?>
                <div class="col-12 col-sm-6 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                  <div class="cat_inner  h-100 border d-block rounded-top  text-capitalize p-3 shadow-lg rounded ">
                    <div class="cat_icon pro_box border border-4 border-dark"><img src="image/t-shirt/<?php echo $row['image'] ?>"
                        height="250px" width="100%" style="object-fit:cover" alt="fennel jpg image">
                    </div>
                    <div class="cat_name mt-3 fw-bold  mx-2 text-danger"> <?php echo $row['name'] ?> </div>
                  </div>
                  <a href="" class="btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry
                    now</a>
                </div>
              <?php  } ?>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="shorts-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
          <div class="container  " style="margin-top: 6rem;margin-bottom:6rem">

            <div class="row text-center">
              <?php
              $con = mysqli_connect("localhost", "root", "", "karma");
              $s = "SELECT * FROM `pro` Where `role` = '0' and  `cat_name` = 'shorts'";
              $q = mysqli_query($con, $s);
              while ($row = mysqli_fetch_array($q)) {


              ?>
                <div class="col-12 col-sm-6 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                  <div class="cat_inner  h-100 border d-block rounded-top  text-capitalize p-3 shadow-lg rounded ">
                    <div class="cat_icon pro_box border border-4 border-dark"><img src="image/shorts/<?php echo $row['image'] ?>"
                        height="250px" width="100%" style="object-fit:cover" alt="fennel jpg image">
                    </div>
                    <div class="cat_name mt-3 fw-bold  mx-2 text-danger"> <?php echo $row['name'] ?> </div>
                  </div>
                  <a href="" class="btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry
                    now</a>
                </div>
              <?php  } ?>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="co-ords-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">

          <div class="container  " style="margin-top: 6rem;margin-bottom:6rem">

            <div class="row text-center">
              <?php
              $con = mysqli_connect("localhost", "root", "", "karma");
              $s = "SELECT * FROM `pro` Where  `role` = '0' and  `cat_name` = 'co-ords'";
              $q = mysqli_query($con, $s);
              while ($row = mysqli_fetch_array($q)) {


              ?>
                <div class="col-12 col-sm-6 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                  <div class="cat_inner  h-100 border d-block rounded-top  text-capitalize p-3 shadow-lg rounded ">
                    <div class="cat_icon pro_box border border-4 border-dark"><img src="image/co-ords/<?php echo $row['image'] ?>"
                        height="250px" width="100%" style="object-fit:cover" alt="fennel jpg image">
                    </div>
                    <div class="cat_name mt-3 fw-bold  mx-2 text-danger"> <?php echo $row['name'] ?> </div>
                  </div>
                  <a href="" class="btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry
                    now</a>
                </div>
              <?php  } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section style="margin: 9rem 0rem;">
      <div class="text-center">
        <h6 class="text-body text-uppercase mb-2">Products</h6>
        <h2 class="display-6 mb-0 mb-5">
          Child's Clothing
        </h2>
      </div>
      <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#child-shirt-tab-pane"
            type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Shirt</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#child-t-shirt-tab-pane"
            type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"> T-Shirt</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#child-shorts-tab-pane" type="button"
            role="tab" aria-controls="contact-tab-pane" aria-selected="false">Shorts </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#child-co-ords-tab-pane"
            type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Co-Ords Set </button>
        </li>

      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="child-shirt-tab-pane" role="tabpanel" aria-labelledby="home-tab"
          tabindex="0">
          <!-- cat1 -->
          <div class="container  " style="margin-top: 6rem;margin-bottom:6rem">

            <div class="row text-center">
              <?php
              $con = mysqli_connect("localhost", "root", "", "karma");
              // $s = "SELECT * FROM `pro` ";
              $s = "SELECT * FROM `pro` Where `role` = '1' and `cat_name` = 'shirt'";
              $q = mysqli_query($con, $s);
              while ($row = mysqli_fetch_array($q)) {


              ?>
                <div class="col-12 col-sm-6 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                  <div class="cat_inner  h-100 border d-block rounded-top  text-capitalize p-3 shadow-lg rounded ">
                    <div class="cat_icon pro_box border border-4 border-dark"><img src="image/child/shirt/<?php echo $row['image'] ?>"
                        height="250px" width="100%" style="object-fit:cover" alt="fennel jpg image">
                    </div>
                    <div class="cat_name mt-3 fw-bold  mx-2 text-danger"> <?php echo $row['name'] ?> </div>
                  </div>
                  <a href="" class="btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry
                    now</a>
                </div>
              <?php  } ?>
            </div>
          </div>
          <!-- cat1 end -->
        </div>
        <div class="tab-pane fade" id="child-t-shirt-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
          <div class="container  " style="margin-top: 6rem;margin-bottom:6rem">

            <div class="row text-center">
              <?php
              $con = mysqli_connect("localhost", "root", "", "karma");
              $s = "SELECT * FROM `pro` Where   `role` = '1' and  `cat_name` = 't-shirt'";
              $q = mysqli_query($con, $s);
              while ($row = mysqli_fetch_array($q)) {


              ?>
                <div class="col-12 col-sm-6 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                  <div class="cat_inner  h-100 border d-block rounded-top  text-capitalize p-3 shadow-lg rounded ">
                    <div class="cat_icon pro_box border border-4 border-dark"><img src="image/child/t-shirt/<?php echo $row['image'] ?>"
                        height="250px" width="100%" style="object-fit:cover" alt="fennel jpg image">
                    </div>
                    <div class="cat_name mt-3 fw-bold  mx-2 text-danger"> <?php echo $row['name'] ?> </div>
                  </div>
                  <a href="" class="btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry
                    now</a>
                </div>
              <?php  } ?>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="child-shorts-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
          <div class="container  " style="margin-top: 6rem;margin-bottom:6rem">

            <div class="row text-center">
              <?php
              $con = mysqli_connect("localhost", "root", "", "karma");
              $s = "SELECT * FROM `pro` Where   `role` = '1' and  `cat_name` = 'shorts'";
              $q = mysqli_query($con, $s);
              while ($row = mysqli_fetch_array($q)) {


              ?>
                <div class="col-12 col-sm-6 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                  <div class="cat_inner  h-100 border d-block rounded-top  text-capitalize p-3 shadow-lg rounded ">
                    <div class="cat_icon pro_box border border-4 border-dark"><img src="image/child/shorts/<?php echo $row['image'] ?>"
                        height="250px" width="100%" style="object-fit:cover" alt="fennel jpg image">
                    </div>
                    <div class="cat_name mt-3 fw-bold  mx-2 text-danger"> <?php echo $row['name'] ?> </div>
                  </div>
                  <a href="" class="btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry
                    now</a>
                </div>
              <?php  } ?>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="child-co-ords-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">

          <div class="container  " style="margin-top: 6rem;margin-bottom:6rem">

            <div class="row text-center">
              <?php
              $con = mysqli_connect("localhost", "root", "", "karma");
              $s = "SELECT * FROM `pro` Where  `role` = '1' and `cat_name` = 'co-ords'";
              $q = mysqli_query($con, $s);
              while ($row = mysqli_fetch_array($q)) {


              ?>
                <div class="col-12 col-sm-6 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                  <div class="cat_inner  h-100 border d-block rounded-top  text-capitalize p-3 shadow-lg rounded ">
                    <div class="cat_icon pro_box border border-4 border-dark"><img src="image/child/co-ords/<?php echo $row['image'] ?>"
                        height="250px" width="100%" style="object-fit:cover" alt="fennel jpg image">
                    </div>
                    <div class="cat_name mt-3 fw-bold  mx-2 text-danger"> <?php echo $row['name'] ?> </div>
                  </div>
                  <a href="" class="btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry
                    now</a>
                </div>
              <?php  } ?>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
              <h6 class="text-body text-uppercase mb-2">Our Services</h6>
              <h2 class="display-6 mb-0">
                Your Style, <br> Our Expertise
              </h2>
            </div>
          </div>
          <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
            <a class="btn btn-primary py-3 px-5" href="">More Services</a>
          </div>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="obj" src="image/banner/s1.jpg" height="200px" width="100%" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">Custom Apparel Design</h5>
                <p>
                  Express your unique style with our custom apparel design service.
                </p>
                <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class=" " src="image/banner/s2.jpg" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">Bulk Manufacturing & Wholesale</h5>
                <p>
                  Looking to place a bulk order? Karma Enterprise specializes in large-scale production for businesses,
                  events, or promotional campaigns.
                </p>
                <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class=" " src="image/banner/s3.jpg" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">High-Quality Fabric Selection</h5>
                <p>
                  We believe that comfort begins with quality fabric. At Karma Enterprise, we use only the finest
                  fabrics
                  in our shirts and t-shirts to ensure a soft, breathable, and durable product.
                </p>
                <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class=" " src="image/banner/s4.jpg" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">Ethical & Sustainable Practices</h5>
                <p>
                  We are deeply committed to sustainable and ethical manufacturing practices.
                </p>
                <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class=" " src="image/banner/s5.jpg" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3"> Personalized Customer Experience</h5>
                <p>
                  We value each of our customers, and we are here to make your experience as smooth as possible.
                </p>
                <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class=" " src="image/banner/s6.jpg" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">On-Time Delivery </h5>
                <p>
                  We understand that timely delivery is crucial, which is why we are committed to getting your orders to
                  you when promised.
                </p>
                <a class="small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Appointment Start -->
    <div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-5 col-md-6 wow fadeIn" data-wow-delay="0.3s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-white text-uppercase mb-2">Contact Now</h6>
              <h1 class="display-6 text-white mb-0">
                Get in Touch with Karma Enterprise
              </h1>
            </div>
            <p class="text-white mb-0">
              We’re here to help you with all your apparel needs! Whether you have a question, need assistance with a
              custom design, or want to place a bulk order, our team is ready to assist you.
            </p>
          </div>
          <div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay="0.5s">
            <form>
              <div class="row g-3">
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="text" class="form-control bg-dark border-0" id="gname" placeholder="Your Name" />
                    <label for="gname">Your Name</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="email" class="form-control bg-dark border-0" id="gmail" placeholder="Your Email" />
                    <label for="gmail">Your Email</label>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-floating">
                    <input type="text" class="form-control bg-dark border-0" id="cname" placeholder="Your Mobile" />
                    <label for="cname">Your Mobile</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control bg-dark border-0" placeholder="Leave a message here" id="message"
                      style="height: 100px"></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100 py-3" type="submit">
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Appointment End -->



    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">Testimonial</h6>
              <h1 class="display-6 mb-0">What Our Customers Are Saying</h1>
            </div>
            <p class="mb-4">
              At Karma Enterprise, we believe in delivering exceptional quality and service, and our customers agree!
              Here’s what some of them have to say about their experience with us:
            </p>
            <div class="row g-4">
              <div class="col-sm-6">
                <div class="d-flex align-items-center mb-2">
                  <i class="fa fa-users fa-2x text-primary flex-shrink-0"></i>
                  <h2 class="ms-3 mb-0">173k+</h2>
                </div>
                <h5 class="mb-0">Happy Clients</h5>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-center mb-2">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0"></i>
                  <h2 class="ms-3 mb-0">456MT</h2>
                </div>
                <h5 class="mb-0">Production
                  Annually</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
            <div class="owl-carousel testimonial-carousel">
              <div class="testimonial-item">
                <img class="img-fluid mb-4" src="img/testimonial-1.jpg" alt="" />
                <p class="fs-5">
                  “I’ve been ordering shirts from Karma Enterprise for my business, and the quality has been
                  consistently
                  amazing. The custom designs we created were brought to life exactly as we envisioned. The team was
                  super
                  helpful, and our orders always arrive on time. Highly recommend!”
                </p>
                <div class="bg-primary mb-3" style="width: 60px; height: 5px"></div>
                <h5>— Rajesh Patel, Business Owner</h5>

              </div>
              <div class="testimonial-item">
                <img class="img-fluid mb-4" src="img/testimonial-1.jpg" alt="" />
                <p class="fs-5">
                  “Karma Enterprise has been my go-to for shirts and t-shirts for the past year. The fabric is so soft,
                  and the fit is perfect. I love how comfortable their clothes are, and the designs are so trendy. I’m
                  definitely a repeat customer!”
                </p>
                <div class="bg-primary mb-3" style="width: 60px; height: 5px"></div>
                <h5>— Sonal Mehta, Fashion Enthusiast</h5>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->
<?php
include "footer.php"

?>