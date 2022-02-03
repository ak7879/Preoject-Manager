<?php
    session_start();
    if(isset($_SESSION['id']) &&  $_SESSION['id'] == "sgksreyehdsg"){
?>
<?php require './coordinatorHeader.php'; ?>
    <div class="container row" id="guideTeams"></div>


    <script>
        let urlParams = new URLSearchParams(window.location.search);
        let gToken = urlParams.get('id');
        $(document).ready(()=>{
            $.ajax({
                type: "POST",
                url: "./coordinatorServer.php",
                data: {
                    gToken
                },
                success: (data, status, xhr)=>{
                    $('#guideTeams').html(data);
                },
                error: (xhr)=>{
                    alert("Something went wrong");
                }
            })
        })
    </script>
<?php require './coordinatorFooter.php'; ?>

<?php
    } else {
        header('Location: /pmanager/error.php');
    }
?>