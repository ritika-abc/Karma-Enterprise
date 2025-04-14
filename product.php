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
   <style>
        .abo {
            background-image: linear-gradient(rgba(3, 27, 78, .3), rgba(3, 27, 78, .3)), url(image/banner/5.jpg);
            background-size: cover;
            /* background-attachment: fixed; */
            background-size: center;
            height: 400px;
            width: 100%;
        }

        .fff {
            float: right;
        }

        @media screen and (max-width:576px) {
            .fff {
                width: 100%;
                float: none;
                clear: both;
            }
        }
    </style>
    <div class="section">
        <div class="abo"></div>
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

 
<?php
include "footer.php"

?>