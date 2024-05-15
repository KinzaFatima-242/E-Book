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
  font-family: 'Caprasimo', cursive;

}
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-12" id="top_area">
          <button class="btn mt-2"><a href="Customer.php">Back</a></button>

        </div>
<div class="col-lg-4 mt-2">
    <img src="Logo/Banner_1.png" alt="" style="margin-bottom:8px;">
<img src="Logo/Banner_2.png" alt="" style="margin-bottom:8px;">
<img src="Logo/Banner_3.png" alt="" style="margin-bottom:8px;">
</div>
        <div class="col-lg-8" id="customer_reg_form">
        


        
    <h3>Register Yourself</h3>

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
      <button class="btn" name="customer_register" type="submit" id="Customer_Register">Register</button>
  </div>


      </div>
  
    </fieldset>

</form>         
     </div>

    </div>
</div>

<?php include('includes/footer.php')?>