<?php
require('inc/essentials.php');
adminlogin();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>admin panel - settings</title>
    <link rel="stylesheet" href="css/common.css" />
    <?php
    require('inc/links.php'); ?>
  </head>
  <body class="bg-light">
    <div
      class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top"
    >
      <h3 class="mb-0 h-font">DLJ-Guest House</h3>
      <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>
    <?php
    require('inc/header.php'); ?>
    <div class="container-fluid" id="main-content">
      <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
          <h3 class="mb-4">SETTINGS</h3>
          <!-- general settings section -->
          <div class="card">
            <div class="card-body">
              <div
                class="d-flex align-items-center justify-content-between mb-3"
              >
                <h5 class="card-title m-0">General Settings</h5>

                <button
                  type="button"
                  class="btn btn-dark shadow-none btn-sm"
                  data-bs-toggle="modal"
                  data-bs-target="#general-s"
                >
                  <i class="bi bi-pencil-square"></i>
                  Edit
                </button>
              </div>
              <h6 class="card-subtitle mb-1 fw-bold">Site title</h6>
              <p class="card-text" id="site_title"></p>
              <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
              <p class="card-text" id="site_about"></p>
            </div>
          </div>
<!-- Modal  -->
          <div
            class="modal fade"
            id="general-s"
            data-bs-backdrop="static"
            data-bs-keyboard="true"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog">
              <form>
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                      General Settings
                    </h1>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                    <div class="mb-3">
                      <label class="form-label">Site Title</label>
                      <input
                        type="text"
                        name="site_title"
                        id="site_title_inp"
                        class="form-control shadow none"
                      />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">About us</label>
                      <textarea
                        name="site_about"
                        id="site_about_inp"
                        class="form-control shadow none"
                        rows="5"
                      ></textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      onclick="site_title.value = general_data.site_title ,site_about.value = general_data.site_about "
                      class="btn text-secondary shadow-none"
                      data-bs-dismiss="modal"
                    >
                      Cancel
                    </button>
                    <button
                      type="button"
                      onclick="upd_general(site_title.value , site_about.value)"
                      class="btn custom-bg text-white shadow-none"
                    >
                      SUBMIT
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php  require('inc/scripts.php');?>
    <script>
      let general_data;

      function get_general() {
        let site_title = document.getElementById("site_title");
        let site_about = document.getElementById("site_about");

        let site_title_inp = document.getElementById("site_title_inp");
        let site_about_inp = document.getElementById("site_about_inp");

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader(
          "Content-Type",
          "application/x-www-form-urlencoded"
        );

        xhr.onload = function () {
          // console.log(this.responseText);
          try {
            general_data = JSON.parse(this.responseText);

            site_title.innerText = general_data.site_title;
            site_about.innerText = general_data.site_about;

            site_title_inp.value = general_data.site_title;
            site_about_inp.value = general_data.site_about;
          } catch (e) {
            console.error("Failed to parse JSON response:", e);
            console.log("Response was: ", this.responseText);
          }
        };

        xhr.send("get_general=true");
        // xhr.onload = function(){
        //   general_data = JSON.parse(this.responseText);

        //   site_title.innerText = general_data.site_title;
        //   site_about.innerText = general_data.site_about;

        //   site_title_inp.value = general_data.site_title;
        //   site_about_inp.value = general_data.site_about;
        //   // console.log(general_data);
        // }
        // // xhr.onreadystatechange = function(){
        // //   if(this.readyState==4 && this.status==200){

        // //   }
        // // }
        // xhr.send('get_general');
      }

      function upd_general(site_title_val, site_about_val) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader(
          "Content-Type",
          "application/x-www-form-urlencoded"
        );

        xhr.onload = function () {
          var myModal = document.getElementById("general-s");
          var modal = bootstrap.Modal.getOrCreateInstance(myModal);
          
          try {
            let response = JSON.parse(this.responseText);

            if (response.result === 1) {
              // console.log("Data updated");
              alert('success' , 'Changes saved!');
              modal.hide();
              removeModalBackdrop();
              get_general();
             
            } else {
              alert('Error','No changes made');
              modal.hide();
              removeModalBackdrop();
              get_general();
            }
          } catch (e) {
            console.error("Failed to parse JSON response:", e);
            console.log("Response was: ", this.responseText);
          }
        
        };

        xhr.send(
          "site_title=" +
            encodeURIComponent(site_title_val) +
            "&site_about=" +
            encodeURIComponent(site_about_val) +
            "&upd_general=true"
        );
        // xhr.send('site_title =' +site_title_val + '&site_about='+site_about_val+'$upd_general');
      }

      function removeModalBackdrop() {
            const backdrop = document.querySelector('.modal-backdrop');
            if (backdrop) {
                backdrop.parentNode.removeChild(backdrop);
            }
        }
      window.onload = function () {
        get_general();
      };
    </script>
  </body>
</html>
