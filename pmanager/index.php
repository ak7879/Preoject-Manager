<?php require './header.php';?>
<div id="bg-img" class="mb-4">
    <button class="btn btn-primary rounded-circle" data-toggle="modal" data-target="#uploadModal" id="bubble" >
        Upload your Projects
    </button>
</div>


<!-- Cards Section -->
<div class="container">
<div class="row mb-4 mt-4" id="cards">
  <div class="col-md-4 col-sm-12">
    <div class="card">
    <img src="./raw/abhishek.jpg" class="card-img-top Oimg" style="height: 20em;" alt="...">
      <div class="card-body">
        <h5 class="card-title">Abhishek Rawat</h5>
        <p class="card-text">
            <span class="btn btn-success">Full Stack</span>
            <span class="btn btn-secondary">Learner</span>
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-12">
    <div class="card">
    <img src="./raw/anshul.jpg" class="card-img-top Oimg" style="height: 20em;" alt="...">
      <div class="card-body">
        <h5 class="card-title">Anshul Singh Tomar</h5>
        <p class="card-text">
        <span class="btn btn-success">Full Stack</span>
        <span class="btn btn-secondary">PHP Developer</span>
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-12">
    <div class="card">
    <img src="./raw/bilal.jpg" class="card-img-top Oimg" style="height: 20em;" alt="...">
      <div class="card-body">
        <h5 class="card-title">Md. Bilal</h5>
        <p class="card-text">
            <span class="btn btn-danger">FrontEnd Developer</span>
        </p>
      </div>
    </div>
  </div>
</div>
</div>
<?php require './popup.php';
require './teamregisterhtml.php'; ?>
<!-- Footer Section -->
<footer class="bg-secondary">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">&copy 2019 Copyright:
    <a href="#" class="text-primary"> Project Manager</a>
  </div>
  <!-- Copyright -->

</footer>

<script>
  
</script>

<?php require './footer.php';?>