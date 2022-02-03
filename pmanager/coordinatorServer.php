<?php
    require './conn.php';
// projectGuide php
    if(isset($_POST['guideAccess']) && $_POST['guideAccess'] == '1') {
        $sql = "SELECT * FROM guide";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $template = '
                <div class="card col-md-3 col-sm-12 mb-2 " id="pGuideHome" style="width: 18rem;height:18rem">
                <hr>
                <div class="card-header" style="background-color:#C4F1BE">
                <h4 class="card-title">'.$row['g_name'].'</h4>
                </div>
                <div class="card-body">
                    <a href="guideTeams.php?id='.$row['g_id'].'" class="btn btn-outline-primary btn-lg">Go somewhere</a>
                </div>
                 </div>';
                 echo $template;
            }
        }
    }

    if(isset($_POST['gToken']) && $_POST['gToken'] != "") {
        $sql = "SELECT * FROM teams WHERE g_id = '".$_POST['gToken']."'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $template = '<div class="card col-md-4 col-sm-12 mb-2 mr-2" style="width: 18rem;" id="tcard">
                <div class="card-header">
                <h4 style="padding:0; margin: 0">'.$row['p_name'].'</h4>
                </div>
                <img class="img-fluid" style="width:50%; height:50%;" src="./raw/project.png" class="card-img-top" alt="...">                
                <div class="card-body">
                    <a class="btn btn-primary" href="teamDetail.php?id='.$row['team_id'].'">Open Project</a>
                </div>
                </div>';
                echo $template;
        }
    }
}

    //Team Detail php
    if(isset($_POST['teamToken']) && $_POST['teamToken'] != "") {
        $sql = "SELECT * FROM teams WHERE team_id = '".$_POST['teamToken']."'";
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

?>