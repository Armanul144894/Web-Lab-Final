<?php
  include("connection.php");
  error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width, initial-scale=1">
    <title>User Information</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <form class="" action="form.php" method="POST">
      <div class="title">
        User Information
      </div>
      <div class="form">

        <div class="input_field">
          <label for="name">Name</label>
          <input type="text" name="name" class="input" value="" required>
        </div>

        <div class="input_field">
          <label for="id">Id</label>
          <input type="number" name="id" class="input" value="" required>
        </div>

        <div class="input_field">
          <label for="age">Age</label>
          <input type="number" name="age" class="input" value="" required>
        </div>

        <div class="input_field">
          <label for="username">UserName</label>
          <input type="text" name="username" class="input" value="" required>
        </div>

        <div class="input_field">
          <label for="password">Password</label>
          <input type="password" name="password" class="input" value="" required>
        </div>
        
        <div class="input_field">
          <input type="submit"  value="Register" name="register" class="btn">
        </div>
       
      </div>
      </form>
      <div class="record">
          <a href="display.php"><input type="submit" value="display" name="record" class="btn2"></a>
        </div>

    </div>
  </body>
</html>


<?php
  if($_POST["register"])
  {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $age = $_POST['age'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $qry = "insert into register_list(name, userId, age, username, password)
    values('$name','$id','$age','$username','$password')";
    $data = mysqli_query($conn, $qry);
    if($data)
    {
      echo "Data Successfully Inserted!";
    }
    else
    {
      echo "Data Insertion Failed";
    }
  }
?>
