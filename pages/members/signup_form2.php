
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signup Form</title>
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
    <div class="col-20-center">
      <input id="firstname" name="firstname" placeholder="firstname" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row-center">
    <label class="col-5"></label> 
    <div class="col-20-center">
      <input id="lastname" name="lastname" placeholder="lastname" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row-center">
    <label class="col-5"></label> 
    <div class="col-20-center">
      <input id="email" name="email" placeholder="Emaill address" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row-center">
    <label class="col-5"></label> 
    <div class="col-20-center">
      <input id="phonenumber" name="phonenumber" placeholder="Phone Number" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row-center">
    <label class="col-5"></label> 
    <div class="col-20-center">
      <input id="username" name="username" placeholder="Username" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row-center">
    <label class="col-2"></label> 
    <div class="col-20-center">
      <input id="password" name="password" placeholder="Password" type="text" class="form-control">
    </div>
  </div>

       <label for="userlevel">Security-Level:</label>
      <select name="userlevel" id="userlevel">
    <option value="Employee">Employee</option>
    <option value="Supervisor">Supervisor</option>
    <option value="Management">Management</option>
    <option value="Officemanager">Officemanager</option>
    <option value="FrontOffice">FrontOffice</option>
    <option value="Admin">Admin</option>
    <option value="Grover">Grover</option>
      </select>
<hr>
    <div class="offset-1 col-7">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

</form>
                

</form>

</div>
</body>
</html>
