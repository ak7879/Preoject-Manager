    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Student Registration Form
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- ############# Form ################## -->

            <div class="container-fluid">
              <form action="register.php" method="post">
                <div class="row justify-content-md-center">
                  <div class="col-md-10 mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="fname"
                      placeholder="First name"
                      required
                    />
                  </div>
                </div>
                <div class="row justify-content-md-center">
                  <div class="col-md-10 mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="lname"
                      placeholder="Last name"
                      required
                    />
                  </div>
                </div>
                <div class="row justify-content-md-center">
                  <div class="col-md-10 mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="rno"
                      placeholder="Roll Number"
                      required
                    />
                  </div>
                </div>
                <div class="row justify-content-md-center">
                  <div class="col-md-10 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                      <input
                        type="email"
                        class="form-control"
                        name="email"
                        placeholder="E-mail"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="row justify-content-md-center">
                  <div class="col-md-10 mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="profile"
                      placeholder="linkedin profile"
                    />
                  </div>
                </div>
                <div class="row justify-content-md-center">
                  <div class="col-md-10 mb-3">
                    <input
                      type="date"
                      class="form-control"
                      name="dob"
                      required
                    />
                   </div>
                </div>


                <div class="modal-footer row justify-content-md-center">
                    <div class="col-md-4">
                  <button class="btn btn-primary" type="submit">
                          Submit
                  </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <!-- Upload Project -->
    <!-- Modal -->
    <div
      class="modal fade"
      id="uploadModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content" id="upload-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Upload Projects
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- ############# Form ################## -->

            <div class="container-fluid">
              <form>
                <div class="row justify-content-md-center">
                  <div class="col-md-10 mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="uploadName"
                      id="uploadName"
                      placeholder="Project Title"
                      required
                    />
                  </div>
                </div>
                <div class="row justify-content-md-center">
                  <div class="col-md-10 mb-3">
                    <input
                      type="password"
                      class="form-control"
                      name="uniqueId"
                      id="uniqueId"
                      placeholder="Unique Id"
                      required
                    />
                  </div>
                </div>
                <div class="row justify-content-md-center">
                  <div class="col-md-10 mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="pLink"
                      id="pLink"
                      placeholder="Project Link"
                      required
                    />
                  </div>
                </div>
                <div class="modal-footer row justify-content-md-center">
                    <div class="col-md-10">
                  <button class="btn btn-primary btn-lg" id="uploadLink">
                        Upload
                  </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>



<!--Team register popup-->



<!--Team register popup end-->



    <script>
      $("#myModal").on("shown.bs.modal", function() {
        $("#myInput").trigger("focus");
      });

      $('#uploadLink').click(()=>{
        let uploadName = $('#uploadName').val();
        let pLink = $('#pLink').val();
        let uniqueId = $('#uniqueId').val();

          $.ajax({
            type: "POST",
            url: "./loginServer.php",
            data: {
              uploadName,
              pLink,
              uniqueId
            },
            success: (data, status, xhr) => {
              if(data) {
                
              }
              else{
                alert("username password not matched");
              }
            },
            error: (xhr) => {
              alert("error");
            }
          });
      });
    </script>