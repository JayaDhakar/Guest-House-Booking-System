<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel - Facilities</title>
    <!-- <link rel="stylesheet" href="/hotel/css/common.css" /> -->
    <link
      rel="stylesheet"
      href="swiper-11.1.3/package/swiper-bundle.min.css"
    />
    <?php require('inc/links.php'); ?>
    <style>
      .box {
        border-top-color: var(--teal) !important;
      }
    </style>
  </head>

  <body class="bg-light">
    <?php require('inc/header.php'); ?>
    <div class="my-5 px-4">
      <h2 class="fw-bold h-font text-center">About Us</h2>
      <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id possimus
        expedita accusamus
        <br />
        amet quo architecto, sapiente deleniti vel assumenda unde?
      </p>
    </div>

    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
          <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, porro
            magnam nesciunt unde nihil non numquam! Lor em ipsum dolor sit amet
            consectetur adipis non numquam!
          </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-lg-2 order-1">
          <img src="images/about/about.jpeg" class="w-100" />
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div
            class="bg-white rounded shadow p-4 border-top border-4 text-center box"
          >
            <img src="" width="90px" />
            <h4 class="mt-3">100+ Rooms</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div
            class="bg-white rounded shadow p-4 border-top border-4 text-center box"
          >
            <img src="" width="90px" />
            <h4 class="mt-3">200+Customers</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div
            class="bg-white rounded shadow p-4 border-top border-4 text-center box"
          >
            <img src="" width="90px" />
            <h4 class="mt-3">150+ Reviews</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div
            class="bg-white rounded shadow p-4 border-top border-4 text-center box"
          >
            <img src="" width="90px" />
            <h4 class="mt-3">200+ Staffs</h4>
          </div>
        </div>
      </div>
    </div>
    <h3 class="my-5 fw-bold h-font text-center">Management Team</h3>
    <div class="container px-4">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">
          <div
            class="swiper-slide bg-white text-center overflow-hidden rounded"
          >
            <img src="images/h-1.jpeg" class="w-100" />
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div
            class="swiper-slide bg-white text-center overflow-hidden rounded"
          >
            <img src="images/h-1.jpeg" class="w-100" />
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div
            class="swiper-slide bg-white text-center overflow-hidden rounded"
          >
            <img src="images/h-1.jpeg" class="w-100" />
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div
            class="swiper-slide bg-white text-center overflow-hidden rounded"
          >
            <img src="images/h-1.jpeg" class="w-100" />
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div
            class="swiper-slide bg-white text-center overflow-hidden rounded"
          >
            <img src="images/h-1.jpeg" class="w-100" />
            <h5 class="mt-2">Random Name</h5>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <?php require('inc/footer.php'); ?>
    <!-- <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->
    <script src="swiper-11.1.3/package/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        // slidesPerView: 4,
        spaceBetween: 40,
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
          },
          640: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 3,
          },
          1024: {
            slidesPerView: 3,
          },
        },
      });
    </script>
  </body>
</html>
