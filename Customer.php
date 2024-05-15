<?php include('Includes/header.php')?>
<di class="container">
    <div class="row">
        <div class="col-lg-12">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
 
 
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor04">
      <ul class="navbar-nav me-auto ">
        <li class="nav-item">
          <a class="nav-link active" href="Index.php">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Publisher.php">Publisher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Customer.php">Customer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Admin.php">Admin</a>
        </li>
   
      </ul>
    
    </div>
  </div>
</nav>
        <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
<a href="Index.php"><img src="logo/e_bbok.png" alt=""></a>
  <a href="Customer_Registration.php" class="w3-bar-item w3-button">Register Yourself</a>
  <a href="collection.html" class="w3-bar-item w3-button">Categories</a>
  <a href="Logout.php" class="w3-bar-item w3-button">Logout</a>
</div>


<div class="w3-main" style="margin-left:200px">
<div class="heading text-center ">
  <button class="w3-button  w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Customer</h1>
  </div>
</div>

<div class="w3-container">


<h1 id="some_famous_publisher">Dear Valued Reader</h1>
<figure>
  <blockquote class="blockquote">

    <h3>Welcome</h3>
    <p >We are thrilled to welcome you to the pages of our "Ebook" Thank you for choosing to embark on this literary journey with us. Within these virtual pages, you'll find a world of knowledge, inspiration, and entertainment waiting to unfold.</p>
  
  </blockquote>

</figure>

  <figure>
  <blockquote class="blockquote ">

    <h3>Connect With Us:</h3>
    <p >Your feedback and thoughts are incredibly valuable to us. As you read through the ebook, we encourage you to reach out to us with your comments, questions, and suggestions. Connect with us on [social media links or contact email] to share your insights and join the conversation.</p>
  
  </blockquote>

</figure>

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