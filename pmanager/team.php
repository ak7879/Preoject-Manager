<?php require './header.php'; ?>
    <h1>TEAMS</h1>
    <div class="container row" id="teamContent">
        
    </div>


    <!-- Optional JavaScript -->
    <script type="text/javascript">
        $(document).ready(()=>{
            let load = "go";
            $.ajax({
                type:'POST',
                url: './loginServer.php',
                data: {
                    load
                },
                // contentType:"application/json",
                success:(data,status,xhr)=>{
                    $('#teamContent').html(data); 
                },
                error:(xhr)=>{
                    alert("error");
                }
            })
        })

    </script>

  
<?php require './footer.php'; ?>