<?php include('includes/header.php')?>
<style>
.card{
  background-color:#DFB0B0;

}
.card h1{
  font-family: 'Caprasimo', cursive;
  color:#090232;
  text-align:center;
}
.card-body label{
  color:#090232;
  font-size:20px;
  font-family: 'Caprasimo', cursive;
}
h2{
  text-align:center;
padding:10px;
  background-color:#090232 ;
  color:#DFB0B0;
  font-family: 'Montserrat', sans-serif;
}
h6{
  text-align:center; 
  color:#090232;
  font-family: 'Caprasimo', cursive;
}
#submit_btn{
  font-family: 'Caprasimo', cursive;
  background-color: #090232 ;
  color:white;
}
#cancel_btn{
  color:white;
  font-family: 'Caprasimo', cursive;
  background-color:#880808;
}
#image_input{
  border-radius:10px;
  background-color:#090232 ;
  color:#DFB0B0;
}
.card-header a{
  text-decoration:none;

}
.card-header button{
  color:white;

  font-family: 'Caprasimo', cursive;
    background-color:#090232 ;

}
</style>

<div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <img src="logo/Left_Banner.png" alt="">
      <img src="logo/" alt="">
      </div>
        <div class="col-md-8 mt-4">
<h2>"Explore, Engage, Enrich: 
  <br>eBooks for Every Reader."</h2>
<div class="card" id="register_page_table">
    <div class="card-header">
      <a href="Admin.php"  ><button class="btn">Back</button></a>
      <h6>"Your Next Adventure Awaits in Every eBook."</h6>
      <hr>
<h1>Add Book</h1>

    <div class="card-body">
    <form action="code.php" method="POST"  enctype="multipart/form-data">
    <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control">

  <div class="mb-3">
    <label>Price</label>
    <input type="text" name="price" class="form-control" required>
 
  </div>

  <div class="mb-3">
    <label>Category</label>
    <input type="text" name="category" class="form-control" required>
 
  </div>

  <div class="mb-3" enctype="multipart/form-data">
  <label for="">Image</label> <br>
<input id="image_input" type="file" name="image" required > <!-- accept="image/*" -->
<div>
    </div>
 
<a href="index.php" type="submit" id="cancel_btn" class="btn  mt-2 ">Cancel</a>
  <button type="submit" name="register" id="submit_btn" class="btn  mt-2 ">Submit</button>
</form>
    </div>
    </div>
</div>
        </div>
    </div>
</div>







<?php include('includes/footer.php')?> 
