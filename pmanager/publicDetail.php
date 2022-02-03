<?php require 'header.php'; ?>

<div class="container row" id="publicDetail"></div>


    <script>
        let urlParams = new URLSearchParams(window.location.search);
        let pteamToken = urlParams.get('id');
        $(document).ready(()=>{
            $.ajax({
                type: "POST",
                url: "./loginServer.php",
                data: {
                    pteamToken
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
<?php require 'footer.php'; ?>