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
            background-image: linear-gradient(rgba(3, 27, 78, .3), rgba(3, 27, 78, .3)), url(image/banner/contact-banner.jpg);
            background-size: cover;
            /* background-attachment: fixed; */
            height: 400px;
            background-position: bottom;
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
    <!-- Contact Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
         
         
          <div
            class="col-lg-6 wow fadeInUp"
            data-wow-delay="0.1s"
            style="min-height: 450px"
          >
            <div class="position-relative h-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3777314.436752024!2d68.68601086751127!3d22.399512855724925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959051f5f0ef795%3A0x861bd887ed54522e!2sGujarat!5e0!3m2!1sen!2sin!4v1744369010837!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">Contact Us</h6>
              <h1 class="display-6 mb-0">
                If You Have Any Query, Please Contact Us
              </h1>
            </div>
            <p class="mb-4">
            Have a question, custom order, or bulk inquiry? We’d love to hear from you! At Karma Enterprise, our team is available 24/7 to provide quick, reliable assistance for all your apparel needs. Whether you're looking for premium shirts, t-shirts, shorts, or co-ord sets, we're just a message or call away. Get in touch today and let’s create something great together.
            </p>
            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control border-0 bg-light"
                      id="name"
                      placeholder="Your Name"
                    />
                    <label for="name">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control border-0 bg-light"
                      id="email"
                      placeholder="Your Email"
                    />
                    <label for="email">Your Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control border-0 bg-light"
                      id="subject"
                      placeholder="Subject"
                    />
                    <label for="subject">Subject</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control border-0 bg-light"
                      placeholder="Leave a message here"
                      id="message"
                      style="height: 150px"
                    ></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary py-3 px-5" type="submit">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

    <?php
include "footer.php"

?>