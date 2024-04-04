
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <form action="signup_insert.php" method="POST">
  <!--     --> 
    <br><br>
    <center>
<form>

<div class="border d-flex flex-column" style="width:28rem;">
  <div class="mx-4 p-3 ">
    <div class="text-center my-4">
      <p class="h4">Member Registration</p>
    </div>
<!-- OTHER --> 
<form>
  <div class="form-group row-center">
    <label class="col-5"></label> 
    <div class="col-22-center">
      <input id="firstname" name="firstname" placeholder="Firstname" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row-center">
    <label class="col-5"></label> 
    <div class="col-22-center">
      <input id="lastname" name="lastname" placeholder="Lastname" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row-center">
    <label class="col-5"></label> 
    <div class="col-22-center">
      <input id="email" name="email" placeholder="Emaill address" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row-center">
    <label class="col-5"></label> 
    <div class="col-22-center">
      <input id="phonenumber" name="phonenumber" placeholder="Phone Number" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row-center">
    <label class="col-5"></label> 
    <div class="col-22-center">
      <input id="username" name="username" placeholder="Username" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row-center">
    <label class="col-2"></label> 
    <div class="col-22-center">
      <input id="password" name="password" placeholder="Password" type="text" class="form-control">
    </div>
  </div> 
  <label for="security-level">Security-Level:</label>
 
        <div class="form-group">
    <select name="userlevel" id="userlevel">
    <option value="6">Employee</option>
    <option value="5">Supervisor</option>
    <option value="4">Management</option>
    <option value="3">Officemanager</option>
    <option value="2">FrontOffice</option>
    <option value="1">Admin</option>
    <option value="0">Grover</option>
</select>
</div>
 
</div>
  <div class="form-group row">
    <div class="offset-1 col-7">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
                
</div>
</body>
</html>
