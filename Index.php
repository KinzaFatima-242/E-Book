<?php include('Includes/header.php')?>

<?php
      $conn = mysqli_connect('localhost','root','','librousbook');
     if(isset($_POST['login'])){
      $email = $_POST['email'];
      $password = $_POST['password'];


      $fetch_sql = "SELECT * FROM admin_table WHERE email='{$email}' AND password='{$password}'";
      $result = mysqli_query($conn,$fetch_sql);
      $total_rows = mysqli_num_rows($result);

      if($total_rows!=0){
          while($data = mysqli_fetch_assoc($result)){           
            $_SESSION['email'] = $data['email'];
            $_SESSION['password'] = $data['password'];

            header('location:Admin.php');
           
          }
      }
      else{
        echo "<script>alert('username or password is incorrect');</script>";

      }
     }
  ?>









<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="logo/e_bbok.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor04">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="Index.php">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Publisher_login.php">Publisher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="customer_login.php">Customer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Admin.php">Admin</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>
    </div>
<div class="col-lg-3" id="index_banner">
  <img src="logo/Index_banner.png" alt="">
</div>
<div class="col-lg-6" id="index_login">
  <form method="POST">
    <h1>Login</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" class="btn" name="login">Login</button>
</form>
<hr>
<img src="logo/Banner_2.png" alt="">
</div>
<div class="col-lg-3" id="index_banner">
  <img src="logo/index_banner_2.png" alt="">
</div>    
























  </div>
</div>


<?php include('includes/footer.php')?> 
