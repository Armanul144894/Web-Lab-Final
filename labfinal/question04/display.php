<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Display</title>
  </head>
<style media="screen">
  body{
    background: #7fffd4;
  }
  table{
    background-color: white;
  }
  .update{
    background: green;
    color: white;
    width: 47%;
    border-radius: 3px;
    margin-left: 2px;
    margin-right: 2px;
}
    .delete{
      background: red;
      color: white;
      width: 47%;
      border-radius: 3px;
      margin-left: 2px;
      margin-right: 2px;
     }
</style>

  <body>

  </body>
  <script>
    function checkDelete(){
      return confirm('Are you sure want to delete this data!!??');
    }
  </script>
</html>



<?php
include("connection.php");
$qry = "select * from register_list";
$data = mysqli_query($conn, $qry);
$total = mysqli_num_rows($data);


if($total != 0){
  ?>
  <h2 align="center"><mark>RECORDS</mark></h2>
  <table border="2px" cellspacing="7" width = "100%" align = "center">
    <tr>
      <th width = "20%" >Name</th>
      <th width = "15%">UserId</th>
      <th width = "10%">Age</th>
      <th width = "10%">Username</th>
      <th width = "15%">Password</th>
      <th width = "17%">Operations</th>
    </tr>

    <?php
    while ($result = mysqli_fetch_assoc($data)) {
      echo "<tr>
        <td>".$result['name']."</td>
        <td>".$result['userId']."</td>
        <td>".$result['age']."</td>
        <td>".$result['username']."</td>
        <td>".$result['password']."</td>
        <td>
        <a href='update.php?id=$result[userId]'> <input type='submit' value='Update' class='update'
        </a>
        </td>
      </tr>
      ";
    }
}
else {
  echo "No Data Available";
}
?>
</table>
