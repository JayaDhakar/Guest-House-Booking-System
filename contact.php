<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel - Facilities</title>
    <!-- <link rel="stylesheet" href="/hotel/css/common.css" /> -->
    <?php require('inc/links.php'); ?>
  </head>

  <body class="bg-light">
    <?php require('inc/header.php'); ?>
    <div class="my-5 px-4">
      <h2 class="fw-bold h-font text-center">Our Facilities</h2>
      <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id possimus
        expedita accusamus
        <br />
        amet quo architecto, sapiente deleniti vel assumenda unde?
      </p>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4">
            <iframe
              class="w-100 rounded mb-4"
              height="320px"
              src="https://www.google.com/maps/embed/v1/place?key=API_KEY
    &q=Space+Needle,Seattle+WA"
            >
            </iframe>
            <h5>Address</h5>
            <a
              href="#"
              target="_blank"
              class="d-inline-block text-decoration-none text-dark mb-2"
            >
              <i class="bi bi-geo-alt-fill"></i>
              XYZ,distt,state
            </a>
            <h5 class="mt-4">Call us</h5>
            <a
              href="tel: +917778889991"
              class="d-inline-block mb-2 text-decoration-none text-dark"
            >
              <i class="bi bi-telephone-fill"></i>+917778889991
            </a>
            <br />
            <a
              href="tel: +917778889991"
              class="d-inline-block mb-2 text-decoration-none text-dark"
            >
              <i class="bi bi-telephone-fill"></i>+917778889991
            </a>
            <h5 class="mt-4">Email</h5>
            <a
              href="mailto: contact.taj_groups@gmail.com"
              class="d-inline-block mb-2 text-decoration-none text-dark"
            > <i class="bi bi-envelope-fill"></i>
              contact.taj_groups@gmail.com
            </a>
            <h5 class="mt-4">Follow us</h5>
      <a href="#" class="d-inline-block text-dark text-decoration-none fs-5 me-2">
        <i class="bi bi-twitter me-1"></i>
      </a>

      <a href="#" class="d-inline-block text-dark text-decoration-none fs-5 me-2">
        <i class="bi bi-facebook me-1"></i>
      </a>

      <a href="#" class="d-inline-block text-dark text-decoration-none fs-5 ">
        <i class="bi bi-instagram me-1"></i>
      </a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 px-4">
          <div class="bg-white rounded shadow p-4">
            <form>
              <h5>Contact us</h5>
              <div class="mt-3">
                <label  class="form-label" style="font-weight: 500;">Name</label>
                <input type="text" class="form-control shadow-none">
              </div>
              <div class="mt-3">
                <label  class="form-label" style="font-weight: 500;">Email</label>
                <input type="email" class="form-control shadow-none">
              </div>
              <div class="mt-3">
                <label  class="form-label" style="font-weight: 500;">Subject</label>
                <input type="text" class="form-control shadow-none">
              </div>
              <div class="mt-3">
                <label  class="form-label" style="font-weight: 500;">Message</label>
               <textarea class=" form-control shadow-none " rows="5" style="resize: none;"></textarea>
              </div>
              <button type="submit"  class="btn btn-dark shadow-none mt-3">
                SEND
              </button>

            </form>
          </div>
        </div>
      </div>
    </div>
    <?php require('inc/footer.php'); ?>
  </body>
</html>
