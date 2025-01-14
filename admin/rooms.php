<?php

require('inc/essentials.php');
 require('inc/db_config.php');
adminlogin();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Pannel - Rooms</title>
    <?php require('inc/links.php'); ?>
  </head>

  <body class="bg-light">
    <!-- <?php require('inc/header.php'); ?> -->
    <!-- <div class="d-flex "> -->
        <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top ">
            <h3 class="mb-0 h-font">Taj-Groups</h3>
            <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
          </div>
    <div class="container-fluid" id="main-content">
      <div class="row">
         <?php require('inc/header.php'); ?>
        
        <div class="col-lg-10 ms-auto p-4 overflow-hidden ">
          <h3 class="mb-4">ROOMS</h3>

          <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
              <div class="text-end mb-4">
                <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-room">
                  <i class="bi bi-plus-square"></i> Add
                </button>
              </div>
              <div
                class="table-responsive-lg"
                style="height: 450px; overflow-y: scroll"
              >
                <table class="table table-hover border ">
                  <thead >
                    <tr class="bg-dark text-light ">
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Area</th>
                      <th scope="col">Guests</th>
                      <th scope="col">Price</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody id="room-data">
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Add room  modal -->
    <div
      class="modal fade"
      id="add-room"
      data-bs-backdrop="static"
      data-bs-keyboard="true"
      tabindex="-1"
    >
      <div class="modal-dialog modal-lg">
        <form id="add_room_form" autocomplete="off">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add Room</h5>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label fu-bold">Name</label>
                  <input
                    type="text"
                    name="name"
                    class="form-control shadow-none"
                    required
                  />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label fu-bold">Area</label>
                  <input
                    type="number"
                    name="area"
                    class="form-control shadow-none"
                    required
                  />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label fu-bold">Price</label>
                  <input
                    type="number"
                    name="price"
                    class="form-control shadow-none"
                    required
                  />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label fu-bold">Quantity</label>
                  <input
                    type="number"
                    name="quantity"
                    class="form-control shadow-none"
                    required
                  />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label fu-bold">Adult(Max..)</label>
                  <input
                    type="number"
                    name="adult"
                    class="form-control shadow-none"
                    required
                  />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label fu-bold">Children</label>
                  <input
                    type="number"
                    name="children"
                    class="form-control shadow-none"
                    required
                  />
                </div>
                <div class="col-12 mb-3">
                  <label class="form-label fa-bold">Room Types</label>

                  <!-- <div class="row"> -->
                   
                    <!-- $res = selectAll('features');
                    while($opt = mysqli_fetch_assoc($res)){
                      echo"
                      <div class='col-md-3'>
                      <label>
                      <input type='checkbox' name='features' value='$opt[id]' class='form-check-input shadow-none '>
                      $opt[name]
                      </label>
                      </div>
                      ";  
                    }  -->
                    
                <!-- </div> -->
                </div>
              </div>
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

    <?php  require('inc/scripts.php');?>
    <script>
      let add_room_form = document.getElementbyId("add_room_form");

      add_room_form.addEventListener("submit", function (e) {
        e.preventDefault();
        add_rooms();
      });
      function add_rooms() {

          let data = new FormData();
           data.append("add_room", "");
           data.append("name", add_room_form.elements["name"].value);
           data.append("area", add_room_form.elements["area"].value);
           data.append("price", add_room_form.elements["price"].value);
           data.append("quantity", add_room_form.elements["quantity"].value);
           data.append("adult", add_room_form.elements["adult"].value);
           data.append("children", add_room_form.elements["children"].value);

        //    data.append("desc", add_room_form.elements["desc"].value);
           
            let features = [];
            add_room_form.elements['features'].forEach(el =>{
              if(el.checked){
                // console.log(el.value);
                features.push(el.value);
              }
            });
            data.append('features',JSON.stringify(features));


          let xhr = new XMLHttpRequest();
          xhr.open("POST", "ajax/rooms.php", true);

          xhr.onload = function () {
            var myModal = document.getElementById("add-room");
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();

            if (this.responseText == 1) {
              alert("success", "New room added!");
              add_room_form.reset();
            
            } 
            else {
              alert("error", "Server Down!");
            }
          };
          xhr.send(data);
        }
      
    </script>
  </body>
</html>
