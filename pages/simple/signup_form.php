<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>User Registration Form</h2>
    <form action="signup_insert.php" method="POST">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
           
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
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
