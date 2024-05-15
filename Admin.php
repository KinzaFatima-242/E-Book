

<?php include('Includes/header.php')?>
<style>
  #admin_image img{
    width:150px;
    height:150px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  }
#admin_table {
  box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    background-color:#090232 ;
}
#admin_table td {

  color:#090232;
text-align:center;
    font-family: 'Caprasimo', cursive;
}
p{
  text-align:center;
}
#admin_table th {
  
  text-align:center;
  color:#DFB0B0;
  background-color:#090232 ;
    font-family: 'Caprasimo', cursive;
}
</style>

<div class="container-fliud">
    <div class="row">
        <div class="col-lg-12">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
 
 
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
  </div>
</nav>
        <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
<a href="Index.php"> <img src="logo/e_bbok.png" alt=""></a>
<a href="Admin.php" class="w3-bar-item w3-button active">Dashboard</a> 
<a href="collection.html" class="w3-bar-item w3-button">Categories</a>
<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Book</a>
    <div class="dropdown-content">
    <a href="Admin/index.php">View Book</a>
      <a href="Admin/Add_Book.php">Add Book</a>
    </div>
  </li>
  <a href="Order.php" class="w3-bar-item w3-button">Order</a>

  <a href="Logout.php" class="w3-bar-item w3-button">Logout</a>
</div>


<div class="w3-main" style="margin-left:200px">
<div class="heading text-center ">
  <button class="w3-button  w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Admin</h1>
  </div>
</div>

<div class="w3-container">


<h1 id="some_famous_publisher">Welcome, Administrator!

</h1>
<form action="code.php">
<div class="card-body">

<?php
$conn = mysqli_connect('localhost', 'root', '', 'librousbook1');
$register= "SELECT * FROM admin_table";
$register_run = mysqli_query($conn, $register);

if(mysqli_num_rows($register_run)>0)
{

?>

</div>
<table class="table" id="admin_table" >
<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Image</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>


<?php
while($reg_row = mysqli_fetch_array($register_run))
  {

?>
<tr>
<th scope="row"><?php echo $reg_row['Id'];?></th>
<td><?php echo $reg_row['Name'];?></td>
<td><?php echo $reg_row['Email'];?></td>
<td id="admin_image"><img src="<?php echo"upload/" .$reg_row['Image'];?> " alt="image" ></td>


<td><a href="admin_edit.php" class="btn btn-info" >Edit</a></td>
<td><a class="btn btn-danger">Delete</a></td>
</tr>
<?php }
?>
</tbody>
</table>
<?php
}
else{
echo"No record found";
}
?>
</form>
<div class="col-12">
<p>
Welcome to the central hub for managing and overseeing all aspects of your platform. This dashboard provides you with real-time insights, controls, and tools to effectively manage user activity, content, and system settings. Stay informed and take action seamlessly.</p>

</div>

</div>


</div>   
</div>

        </div>
    </div>
</div>


<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
 

<?php include('includes/footer.php')?> 