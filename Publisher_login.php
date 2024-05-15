<?php include('includes/header.php')?>
<style>
 #top_area .btn{
  font-family: 'Caprasimo', cursive;
  color:#090232;
  background-color:#DFB0B0;
 }
 #top_area .btn a{
  color:#090232;
  
  background-color:#DFB0B0;
text-decoration:none;
 }

#customer_reg_form h3{
  font-family: 'Caprasimo', cursive;
  color:#DFB0B0;
  background-color:#090232 ;
text-align:center;
padding:2px;
border-radius:10px;
}
#customer_reg_form label{
  color:#090232;
  font-family: 'Caprasimo', 'cursive';

}
#Customer_Register{
  color:#DFB0B0;
  background-color:#090232 ;
text-align:center;
padding:2px;
font-family: 'Corben', cursive;
}
#Customer_Register_cancel{
  color:white;
  background-color:#880808;
text-align:center;
font-family: 'Corben', cursive;
padding:6px;
}
#Customer_Register_cancel a{
 color:white;
  text-decoration:none;
}
#custom_login_form label{
  font-family: 'Caprasimo', cursive;
}
#custom_login_form h1{
  color:#090232;
  padding:10px;
  font-family: 'Caprasimo', 'cursive';
  border-radius:10px;
  text-align:center;
  background-color: #DFB0B0 ;
}
#custom_login_form  #custom_login_btn{
  color:#DFB0B0;
  font-family: 'Corben', cursive;
  background-color:#090232 ;
}
#custom_login_form .btn{
  font-family: 'Corben', cursive;
}
#new_account_button{
  font-family: 'Corben', cursive;
  background-color: #DFB0B0 ;
}
#create_account label{
  font-family: 'Caprasimo', cursive;
}

#create_account  h1{
  color:#090232;
  padding:10px;
  font-family: 'Caprasimo', 'cursive';
  border-radius:10px;
  text-align:center;
  background-color: #DFB0B0 ;
}
#create_account {
  margin-top:10px;
}
#create_account   #custom_login_btn{
  color:#DFB0B0;
  font-family: 'Corben', cursive;
  background-color:#090232 ;
}
#create_account m .btn{
  font-family: 'Corben', cursive;
}

</style>
<div class="container">
    <div class="row">
        <div class="col-lg-12" id="top_area">
          <button class="btn mt-2"><a href="Customer.php">Back</a></button>

        </div>
<div class="col-lg-4 mt-2">


<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
    <form method="POST" action="code.php" id="create_account">
    <h1>Create New Account </h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn mt-2 mx-auto d-grid gap-2" id="custom_login_btn" name="publisher_create">Login</button>
 
  <img src="logo/Banner_1.png" alt="" class="mt-3">

</form>

    </div>
  
  </div>
</div>

<!-- CREATING NEW ACCOUNT -->

<!-- LOGIN WITH EXISTING ACCOUNT -->

<form method="POST" action="code.php" id="custom_login_form">
  <img src="logo/e_bbok.png" alt="">
    <h1 class="mt-2">Login</h1>
  <div class="form-group mt-3">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
 
  </div>
  <div class="form-group mt-2">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn mt-3" name="publisher_login" id="custom_login_btn">Login</button>
<button type="submit" class="btn mt-3 " id="Customer_Register_cancel" > <a href="Index.php"> Cancel</a> </button>
</form>

<a class="btn mt-2" id="new_account_button" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Create New Account? Create...
</a>
<hr>
<img src="logo/Banner_1.png" alt="" class="mt-3">
</div>

        <div class="col-lg-8" id="customer_reg_form">
        


        
    <h3 class="mt-2">Register Yourself</h3>

        <form class="row g-3" action="code.php" method="POST" id="customer_reg_form" >
        <div class="col-md-6">
    <label  class="form-label"> Name</label>
    <input type="text" name="name" class="form-control" id="inputEmail4">
  </div>
        <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail4" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password"  name="password" class="form-control" id="inputPassword4" required>
  </div>
  <div class="col-md-6">
    <label for="" class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control" id="inputPassword4" required>
  </div>
  
  <div class="col-md-6">
    <label for="" class="form-label">Birth Date:</label>
    <input type="text" name="birthdate" class="form-control" id="inputPassword4" required>
  </div>
  
  <div class="col-md-6">
    <label for="inputZip" class="form-label">Intrest</label>
    <input type="text" name="concern" class="form-control" id="inputZip" placeholder="Novel,Suspense,Science,Fiction...etc">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-6">
    <label for="Country" class="form-label">City</label>
    <input type="text" name="city" class="form-control" id="Country">
  </div>
  <div class="col-6">
    <label for="Province" class="form-label">Province</label>
    <input type="text" name="province" class="form-control" id="province">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Country</label>
    <input type="text" name="country" class="form-control" id="inputCity">
  </div>
  
  <div class="col-md-5">
    <label for="inputZip" class="form-label">Postal Code</label>
    <input type="text" name="zip" class="form-control" id="inputZip">
  </div>     
  <div class="form-group ">
      <label for="exampleTextarea" class="form-label mt-4">Leave Your Thoughts</label>
      <textarea class="form-control" name="description" id="exampleTextarea" rows="4"></textarea>
    </div>
  
  <div class="d-grid gap-2 mt-10 col-12 mb-2">
      <button class="btn" name="publisher_register" type="submit" id="Customer_Register">Register</button>
      <button class="btn" type="submit" id="Customer_Register_cancel"><a href="Index.php">Cancel</a></button>
  </div>


      </div>
  
    </fieldset>

</form>         
     </div>

    </div>
</div>

<?php include('includes/footer.php')?>