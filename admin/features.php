<?php

require('inc/essentials.php');
 require('inc/db_config.php');
adminlogin();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>admin-panel features</title>
    <?php require('inc/links.php') ?>
  </head>
  <body class="bg-light">
    <div
      class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top"
    >
      <h3 class="mb-0 h-font">Taj-Groups</h3>
      <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>
    <div class="container-fluid" id="main-content">
      <div class="row">
        <?php require('inc/header.php'); ?>

        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
          <h3 class="mb-4">Features</h3>

          <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                 
              <div class="text-end mb-4">
                <button
                  type="button"
                  class="btn btn-dark shadow-none btn-sm"
                  data-bs-toggle="modal"
                  data-bs-target="#feature-s"
                >
                  <i class="bi bi-plus-square"></i> Add
                </button>
              </div>
              


            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- features modal -->
    <div
    class="modal fade"
    id="feature-s"
    data-bs-backdrop="static"
    data-bs-keyboard="true"
    tabindex="-1"
  >
    <div class="modal-dialog ">
      <form id="feature_s_form">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add feature</h5>
          </div>
          <div class="modal-body">
            <div class="mb-3">
             
                <label class="form-label fu-bold">Name</label>
                <input
                  type="text"
                  name="feature_name"
                  class="form-control shadow-none"
                  required
                />
              </div>
          <div class="modal-footer">
            <button
              type="reset"
              class="btn text-secondary shadow-none"
              data-bs-dismiss="modal"
            >
              CANCEL
            </button>
            <button
              type="submit"
              class="btn custom-bg text-white shadow-none"
            >
              SUBMIT
            </button>
          </div>
        </div>
      </form>
    </div>
    </div>
    <?php require('inc/scripts.php')?>
    <script src="scripts/script.js">  
    </script>  
   
  </body>
</html>
