<?php require './header.php';?>
    <div class="container">
      <div class="col">
        <h3 class="text-center">Login form</h3>
      </div>
      <form>
        <div class="row justify-content-md-center">
          <div class="col-md-6 mt-3 mb-3">
            <input
              type="email"
              class="form-control"
              placeholder="Your Email *"
              value=""
              id="cEmail"
              required
            />
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-6 mb-3">
            <input
              type="password"
              class="form-control"
              placeholder="Your Password *"
              value=""
              id="cPassword"
              required
            />
          </div>
        </div>
        <div class="row justify-content-md-center mb-3">
          <button type="submit" id="cForm" class="btn btn-primary">Submit</button>
        </div>
        <div class="row justify-content-md-center">
          <a href="#" class="ForgetPwd">Forget Password?</a>
          <a href="tregister.html">Don't have an account register</a>
        </div>
      </form>
    </div>
    <script>
      $("#cForm").click(()=>{
          let cEmail = $("#cEmail").val();
          let cPassword = $("#cPassword").val();
          let passToken = "Project Bhandhar";
          $.ajax({
            type: "POST",
            url: "./loginServer.php",
            data: {
              cEmail,
              cPassword,
              passToken
            },
            success: (data, status, xhr) => {
              $("#cEmail").val("");
              $("#cPassword").val("");
              if(data == "1") {
                window.location.replace("/pmanager/projectGuide.php"); // change this
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
<?php require './footer.php';
