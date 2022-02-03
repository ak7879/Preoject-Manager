<?php
    session_start();
    if(isset($_SESSION['id']) &&  $_SESSION['id'] == "sgksreyehdsg"){
?>
<?php require './coordinatorHeader.php'; ?>
<div class="container" id="teachers">
        <h1>Add Project Guide</h1>
        <div class="row justify-content-md-center mt-4 mb-4">
          <div class="col-md-4">
            <form class="form-inline mx-auto" action="" method="POST" id="teacherForm">
              <div class="form-group mx-sm-3 mb-2">
                <label for="Add Teacher" class="sr-only">Add Here</label>
                <input
                  type="text"
                  class="form-control"
                  id="teacherAdded"
                  placeholder="Enter Teacher Name"
                  required
                />
              </div>
              <button type="submit" class="btn btn-primary mb-2">Add</div>
            </form>
          </div>
        </div>
        <div class="row justify-content-md-center mt-4 mb-4">
          <div class="col-md-4 box"></div>
        </div>
      </div>
  
      <!-- Optional JavaScript -->
      <script>
        $("#teacherForm").submit((e)=>{
          e.preventDefault();
          let guide = $("#teacherAdded").val();
          $("#teacherAdded").val("");
          $.ajax({
            type: "POST",
            url: "",
            data: {
              guide
            },
            success: (data, status, xhr) => {
              $(".box").append("<p>" + guide + "</p><hr>");
            },
            error: xhr => {
              alert("error");
            }
          });
        });
      </script>

      




<?php require './coordinatorFooter.php';?>
<?php

require "./conn.php";
if(isset($_POST)){
  if(isset($_POST['guide']) && !empty($_POST['guide'])){
$gname = $_POST['guide'];
$sql = "INSERT INTO guide (g_name) VALUES ('$gname')";
$result = $conn->query($sql);
}
}


$conn->close();
?>
<?php
    } else {
        header('Location: /pmanager/error.php');
    }
?>