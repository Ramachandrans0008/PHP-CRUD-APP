<?php
include ("db.php");

$edit = $_GET['edit'];
$sql = "SELECT * FROM student WHERE id = $edit";
$result = mysqli_query($conn,$sql); 

while ($row=mysqli_fetch_array($result)) {
            $uid = $row['id'];
            $name = $row['name'];
            $address = $row['address'];
            $mobile = $row['mobile'];
}


?>

<?php
 include "db.php";

if(isset($_POST["submit"])){
    $edit = $_GET['edit'];
    $name=$_POST["name"];
    $address=$_POST["address"];
     $mobile=$_POST["mobile"];

     $sql = "update student set name= '$name',address= '$address',mobile='$mobile' where id =  '$edit'";
     
     $result = mysqli_query($conn,$sql);

   if ($result) {
    header('Location:index.php?mesg = New Record Created Successsfully');
   } else {
    echo "Some thing Error" .mysqli_error($conn);
   }

}
   
?>


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
     <h1>EDIT INFORMATIONS</h1>
  </div>
  <div class="card-body">
  <form action="" method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter text" value="<?php echo $name?>">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control" placeholder="Enter Address" value="<?php echo $address?>">
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile" value="<?php echo $mobile?>">
  </div>
 <br/>
  <input type="submit" class="btn btn-primary" name="submit" value="Edit">
</form>
  </div>
</div>
</div>
</div>
    </div>
</body>
</html>






