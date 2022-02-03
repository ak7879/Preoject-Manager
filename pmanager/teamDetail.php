<?php require './coordinatorHeader.php'; ?>
    <div class="container row" id="publicDetail"></div>


    <script>
        let urlParams = new URLSearchParams(window.location.search);
        let teamToken = urlParams.get('id');
        $(document).ready(()=>{
            $.ajax({
                type: "POST",
                url: "./coordinatorServer.php",
                data: {
                    teamToken
                },
                success: (data, status, xhr)=>{
                    $('#publicDetail').html(data);
                },
                error: (xhr)=>{
                    alert("Something went wrong");
                }
            })
        })
    </script>
<?php require './coordinatorFooter.php'; ?>