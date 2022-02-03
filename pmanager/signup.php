<html>
<body>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container">
<form class="needs-validation" novalidate>
  <div class="row justify-content-md-center">
    <div class="col-md-6 mb-3">
      
      <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  </div>
  <div class="row justify-content-md-center">
    <div class="col-md-6 mb-3">
      
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    </div>
  <div class="row justify-content-md-center">
    <div class="col-md-6 mb-3">
      
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="E-mail" aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Please enter a valid email address.
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-md-center">
    <div class="col-md-6 mb-3">
      
      <input type="text" class="form-control" id="validationTooltip03" placeholder="linkedin profile" required>
      <div class="invalid-tooltip">
        Please provide a valid linkedin profile address.
      </div>
    </div>
  </div>
  <div class="row justify-content-md-center">
    <div class="col-md-6 mb-3">
      
      <input type="text" class="form-control" id="validationTooltip04" placeholder="password" required>
      <div class="invalid-tooltip">
        Enter a strong password.
      </div>
    </div>
  </div>
  <div class="row justify-content-md-center">
    <div class="col-md-6 mb-3">
    
      <input type="text" class="form-control" id="validationTooltip05" placeholder="Re-enter password" required>
      <div class="invalid-tooltip">
        Password not match.
      </div>
    </div>
  </div>
  <div class="row justify-content-md-center">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
</div>
</body>
</html>