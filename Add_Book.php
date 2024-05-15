<?php include('Includes/header.php')?>
<style>
  #Add_book_heading h1{
    font-family: 'Caprasimo', cursive;
  color:#090232;
  background-color:#DFB0B0;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
  text-align:center;
  margin-top:10px;
  
  }
  #add_book_page_form h3{
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    background-color:#090232 ;
    font-family: 'Caprasimo', cursive;
padding:10px;
text-align:center;
border-radius:10px;
    color:  #DFB0B0;

  }
  #add_book_page_form label{
    font-family: 'Caprasimo', cursive;
    color:#090232;

  }
#add_btn{
  color:#DFB0B0;
  font-family: 'Corben', cursive;
  background-color:#090232 ;
}

</style>
<div class="container">
    <div class="row">
        <div class="col-lg-12" id="Add_book_heading">
<h1>Add Books</h1>
        </div>
<div class="col-lg-4 mt-2">
    <img src="Logo/Banner_1.png" alt="" style="margin-bottom:8px;">
    <img src="Logo/Index_banner.png" alt="">
</div>
        <div class="col-lg-8" id="add_book_page_form">
        <div class="Author_details">
    <h3>Author Details</h3>
</div>
        <form class="row g-3"action="code.php" method="POST">
        <div class="col-md-6">
    <label  class="form-label">Author Name</label>
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
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-6">
    <label for="Country" class="form-label">City</label>
    <input type="text" name="city" class="form-control" id="Country">
  </div>
  <div class="col-6">
    <label for="Province" class="form-label">State</label>
    <input type="text" name="province" class="form-control" id="province">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Country</label>
    <input type="text" name="country" class="form-control" id="inputCity">
  </div>
  
  <div class="col-md-5">
    <label for="inputZip" class="form-label">Postal Code</label>
    <input type="text" name="postal_code" class="form-control" id="inputZip">
  </div>
<div class="book_details">
    <h3>Book Details</h3>
</div>
<div class="col-md-6">
    <label for="" class="form-label">Book's Title</label>
    <input type="text" name="book_title" class="form-control" required>
  </div>
  <div class="col-md-6">
    <label for="" class="form-label">Category</label>
    <input type="text" name="category" class="form-control" placeholder="Novel,General Knowledge...etc" required>
  </div>
  <div class="form-group col-md-6">
      <label for="formFile" class="form-label mt-4">Submit your Book in PDF Form:</label>
      <input class="form-control" name="pdf" type="file" id="formFile">
    </div>
    <div class="form-group ">
      <label for="exampleTextarea" class="form-label mt-4">Short Descritiption about Book</label>
      <textarea class="form-control" name="description" id="exampleTextarea" rows="4"></textarea>
    </div>


    <fieldset class="form-group col-md-6">
      
      <div class="d-grid gap-2 mt-10 col-12 mb-2">
      <button class="btn mt-2 mx-auto d-grid gap-2" name="add_book" type="submit" id="add_btn">Add Book</button>


  </div>
      </div>
    </fieldset>

</form>         
     </div>

    </div>
</div>

<?php include('includes/footer.php')?> 