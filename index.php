<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
<div class="row">
<div class="col-md-9">
<div class="card" style="width: 52rem;">
  <div class="card-header">
     <h1>STUDENT CRUD APP</h1>
  </div>
  <div class="card-body">
    <button class="btn btn-success"><a href="add.php" class="text-light">Add New</a></button>
    <br/>
    <br/>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
    <?php

include ("db.php");
    
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn,$sql); 

    $id = 1;
        while ($row = mysqli_fetch_array($result)) {
            $uid = $row['id'];
            $name = $row['name'];
            $address = $row['address'];
            $mobile = $row['mobile'];
        
        ?>
        <tr>
            <td><?php echo $id?></td>
            <td><?php echo $name?></td>
            <td><?php echo $address?></td> 
            <td><?php echo $mobile?></td>
            <td>
  <button class="btn btn-success me-md-2"><a href="edit.php?edit=<?php echo $uid?>" class="text-light">Edit</a></button>
  <button class="btn btn-danger"><a href="delete.php?del=<?php echo $uid?>" class="text-light">Delete</a></button>
</td>
        </tr>
        <?php $id++;} 
        ?>

  </tbody>
</table>
  </div>
</div>
</div>
</div>
    </div>
</body>
</html> 






