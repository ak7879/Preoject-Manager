<?php
session_start();
require 'conn.php';

// Coordinator Login
if(isset($_POST['passToken']) && $_POST['passToken'] == "Project Bhandhar") {
        $cEmail = test_input($_POST['cEmail']);
        $cPassword = test_input($_POST['cPassword']);
        $sql = "SELECT * FROM teacher WHERE email = '".$cEmail."' LIMIT 1";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if($row['password'] == md5($cPassword)) {
                echo "1";
                $_SESSION['id'] = "sgksreyehdsg";
            } else {
                echo "Couldn't find username and password combination. Please try again.";
            }
    }

if(isset($_POST['uniqueId']) && $_POST['uniqueId'] != "") {
    $uploadName = test_input($_POST['uploadName']);
    $pLink = test_input($_POST['pLink']);
    $uniqueId = test_input($_POST['uniqueId']);
    $sql = "SELECT * FROM teams WHERE p_name = '".$uploadName."' LIMIT 1";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if($row['uniqueId'] == $uniqueId) {
                $sql = "UPDATE `teams` SET `pLink` = '$pLink' WHERE `teams`.`p_name` = '$uploadName';";
                $conn->query($sql);
                echo "1";
            } else {
                echo "Project name and Unique id not match.";
            }
}

// Projects Loader
if(isset($_POST['load']) && $_POST['load'] == "go"){
  $sql = "select * from teams";
  $result = $conn->query($sql);
  if($result->num_rows){
      while($row = $result->fetch_assoc()){
          $template = '<div class="card col-md-4 " style="width: 18rem;">
          <img src="./raw/project.png" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">'.$row['p_name'].'</h5>
              <a class="btn btn-primary" href="publicDetail.php?id='.$row['team_id'].'">Go to Project</a>
          </div>
      </div>';
          echo $template;
      }
  }
}

if(isset($_POST['pteamToken']) && $_POST['pteamToken'] != "") {
    $sql = "SELECT * FROM teams WHERE team_id = '".$_POST['pteamToken']."'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $template = '<div class="card text-black border-warning bg-info mb-3" id="publicContent">
            <div class="card-header">
            <h3 class="card-title">'.$row['p_name'].'</h3>
            </div>
            <div class="card-body">
                <h5 class="card-text mb-2">Project type : '.$row['p_type'].'</h5>

                <hr class="my-4">
                <h5 class="card-title"><u>TEAM MEMBER</u></h5>
                <h5 class="card-text">1. '.$row['member_1'].'</h5>
                <h5 class="card-text">2. '.$row['member_2'].'</h5>
                <h5 class="card-text">3. '.$row['member_3'].'</h5>
                <hr class="my-4">
                <h5 class="card-title"><u>Project Description</u></h5>
                <ul class="list-group list-group-flush mb-4">
                <p class="list-group-item">'.$row['p_description'].'</p>
                </ul>
                <hr class="my-4">
                <a href="'.$row['pLink'].'" target="_blank" class="btn btn-primary">Go to Project</a>
                </div>
            </div>';
            echo $template;
    }
}
}

    $conn->close();
?>