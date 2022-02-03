<?php
    session_start();
    if(isset($_SESSION['id']) &&  $_SESSION['id'] == "sgksreyehdsg"){
?>
<?php require './coordinatorHeader.php'; ?>
    
<div class="row" id="guideContent">

</div>
<script>
    $(document).ready(()=>{
        let guideAccess = '1';
        $.ajax({
            type: "POST",
            url: "./coordinatorServer.php",
            data:{
                guideAccess
            },
            success: (data, status, xhr)=>{
                $('#guideContent').html(data);
            },
            error: (xhr)=>{
                alert('Hello World');
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