<?php include('includes/header.php')?>


<?php
 $conn = mysqli_connect('localhost','root','','librousbook1');

$id = $_GET['id'];
$register_query="SELECT * FROM admin_table WHERE Id='$id'";
$register_query_run=mysqli_query($conn,$register_query);
if(mysqli_num_rows($register_query_run)>0)
{
while($row= mysqli_fetch_array($register_query_run))
{
   ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">

<div class="card">
    <div class="card-header">
        <h4>Admin Edit</h4>

    <div class="card-body">
    <form action="code.php" method="POST"  enctype="multipart/form-data">

    <input type="hidden" name="edit_id" class="form-control" value="<?php  echo $row['id']; ?>"> <!-- for edit the record type hidden hide id here! -->
    <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="<?php  echo $row['name']; ?>">

  <div class="mb-3">
    <label>Email</label>
    <input type="text" name="email" class="form-control" value="<?php  echo $row['price']; ?>">
 
  </div>

    <div class="mb-3">
    <label>Image</label>
    <input type="text" name="image" class="form-control" value="<?php  echo $row['image']; ?>">
    </div>
<a href="index.php" type="submit" class="btn btn-danger">Cancel</a>
  <button type="submit" name="register_update_btn" class="btn btn-info">Update Data</button>
</form>
    </div>
    </div>
</div>
        </div>
    </div>
</div>

<?php
}
}
else
echo"No data Found By this Id";

?>




<?php include('includes/footer.php')?> 
