<?php include('includes/header.php')?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
 <style>
    #buynow_form label{
        font-family: 'Caprasimo', cursive;
  color:#090232;
    }
    #buynow_form h1{
        background-color:#090232 ;
text-align:center;
font-family: 'Caprasimo', cursive;
padding:10px;
color:#DFB0B0;
border-radius:10px;
margin-top:10px;
    }
#order_btn{
    font-family: 'Caprasimo', cursive;
    color:#DFB0B0;

    background-color:#090232 ;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-6" id="buynow_form">
  <h1>Place your Order</h1>
        <form action="code.php" method="POST">
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Full Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="2" placeholder="1234 Main St"></textarea>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Phone</label>
    <input type="text" name="phone" class="form-control" id="inputAddress2"  required>
  </div>
  <div class="form-group">
  <div class="dropdown" id="buton_dropdown">
    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Payment Method
   </button>
    <ul class="dropdown-menu">
      <li><a href="https://www.paypal.com/pk/home" target="self">PayPal</a></li>
      <li><a href="https://www.mastercard.us/en-us.html" target="self">Master Card</a></li>
      <li><a href="https://www.americanexpress.com/" target="self">Amex</a></li>
    </ul>
  </div>
  </div>
  <div class="form-group">
    <div class="form-group col-md-6">
      <label for="inputCity">Book Title:</label>
      <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="4"></textarea>
    </div>
  </div>
  <button type="submit" name="buynow" class="btn mt-2 mb-2" id="order_btn">Place the Order</button>
  <a href="collection.html"><button class="btn" id="cancel_buttton">Cancel</button></a>
</form>
<img src="logo/e_bbok.png" alt="">
        </div>
        <div class="col-lg-6">
            <img src="Logo/order_placed.png" alt="">
        </div>
    </div>
</div>
<?php include('includes/footer.php')?>