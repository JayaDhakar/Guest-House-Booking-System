<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel</title>
    
    <link rel="stylesheet" href="/hotel/css/common.css" />
    <?php require('inc/links.php'); ?>
    <style>
      * {
        font-family: "Poppins", sans-serif;
        /* font-family: "Merienda", cursive; */
      }
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      /* Firefox */
      /* input[type="number"] {
 -moz-appearance: textfield;
} */
      .image-container {
        position: relative;
        width: 100%;
        padding-top: 100%; /* 1:1 Aspect Ratio */
        overflow: hidden;
        border: 1px solid grey;
        box-shadow: 0 3px 3px 0 black;
      }
      .image-container img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
      }
      .image-container:hover {
        transform: scale(1.1);
      }
      .custom-bg {
        background-color: #2ec1ac;
      }
      .custom-bg:hover {
        background-color: #279e8c;
      }
      .availability-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }
      @media screen and (max-width: 575px) {
        .availability-form {
          margin-top: 25px;
          padding: 0 35px;
        }
      }
      .availability-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }
      @media screen and (max-width: 575px) {
        .availability-form {
          margin-top: 25px;
          padding: 0 35px;
        }
      }
    </style>
  </head>
  <body class="bg-light">
  <?php require('inc/header.php'); ?>
    
    <div class="container-fluid">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
        <div class="col">
          <div class="image-container">
            <img src="/hotel/images/h-1.jpeg" class="img-fluid" alt="Image 1" />
          </div>
        </div>
        <div class="col">
          <div class="image-container">
            <img src="/hotel/images/h-2.jpeg" class="img-fluid" alt="Image 2" />
          </div>
        </div>
        <div class="col">
          <div class="image-container">
            <img src="/hotel/images/h-3.jpeg" class="img-fluid" alt="Image 3" />
          </div>
        </div>
        <div class="col">
          <div class="image-container">
            <img src="/hotel/images/h-4.jpeg" class="img-fluid" alt="Image 3" />
          </div>
        </div>
      </div>
    </div>
    <div class="container availability-form">
      <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
          <h5 class="mb-4">Check Booking Availability</h5>
          <form>
            <div class="row align-items-end">
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500"
                  >Check-in</label
                >
                <input type="date" class="form-control shadow-none" />
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500"
                  >Check-out</label
                >
                <input type="date" class="form-control shadow-none" />
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500">Adult</label>
                <select class="form-select shadow-none">
                  <option selected>select</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-2 mb-3">
                <label class="form-label" style="font-weight: 500"
                  >Children</label
                >
                <select class="form-select shadow-none">
                  <option selected>select</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-1 mb-lg-3 mt-2">
                <button
                  type="submit"
                  class="btn text-white shadow-none custom-bg"
                >
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
          <div
            class="card border-0 shadow"
            style="max-width: 350px; margin: auto"
          >
            <img src="images/h-3.jpeg" class="card-img-top" />
            <div class="card-body">
              <h5>Simple Room Name</h5>
              <h6 class="mb-4">₹200 per night</h6>
              <div class="features mb-4">
                <!-- <button type="submit" class="btn btn-dark mb-1 shadow-none">
                Room Types
                </button> -->
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 Sofa
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none"
                  >Book Now</a
                >
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none"
                  >More Details</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <div
            class="card border-0 shadow"
            style="max-width: 350px; margin: auto"
          >
            <img src="images/h-3.jpeg" class="card-img-top" />
            <div class="card-body">
              <h5>Simple Room Name</h5>
              <h6 class="mb-4">₹200 per night</h6>
              <div class="features mb-4">
                <!-- <button type="submit" class="btn btn-dark mb-1 shadow-none">
                Room Types
                </button> -->
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 Sofa
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none"
                  >Book Now</a
                >
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none"
                  >More Details</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <div
            class="card border-0 shadow"
            style="max-width: 350px; margin: auto"
          >
            <img src="images/h-3.jpeg" class="card-img-top" />
            <div class="card-body">
              <h5>Simple Room Name</h5>
              <h6 class="mb-4">₹200 per night</h6>
              <div class="features mb-4">
                <!-- <button type="submit" class="btn btn-dark mb-1 shadow-none">
                Room Types
                </button> -->
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 Sofa
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none"
                  >Book Now</a
                >
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none"
                  >More Details</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a
            href="#"
            class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"
            >More Rooms >>></a
          >
        </div>
      </div>
    </div>
    <br /><br /><br />
    <br /><br /><br />
    <?php require('inc/footer.php'); ?>
  </body>
</html>
