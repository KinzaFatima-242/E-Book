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
  <a href="#" class="w3-bar-item w3-button " >Dashboard</a>
  <a href="Add_Book.php" class="w3-bar-item w3-button">Publish</a>
  <a href="Logout.php" class="w3-bar-item w3-button">Logout</a>
</div>


<div class="w3-main" style="margin-left:200px">
<div class="heading text-center ">
  <button class="w3-button  w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Publisher</h1>
  </div>
</div>

<div class="w3-container">

  <p> Publishers are entities responsible for producing and distributing books, magazines, and other forms of written material. If you have a specific question or topic related to publishers that you'd like to know more about, please provide more details so I can assist you effectively.</p>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, voluptatem. Repellendus fugit placeat nemo. Perferendis assumenda error ullam repellendus velit nisi vel tempora voluptatibus quidem accusamus, ipsa debitis consectetur voluptates!
    
  </p>

<h1 id="some_famous_publisher">Some Famous Publisher</h1>
  <figure>
  <blockquote class="blockquote ">

    <h3>Simon & Schuster:</h3>
    <p >Simon & Schuster is a historic publisher that has released numerous bestsellers over the years. They publish a wide array of genres, including fiction, non-fiction, and children's literature.</p>
  
  </blockquote>
  <figcaption class="blockquote-footer">
Chicago
  </figcaption>
</figure>
<figure>
  <blockquote class="blockquote">

    <h3>Bloomsbury Publishing:</h3>
    <p >Bloomsbury gained international prominence with the publication of the "Harry Potter" series. They continue to publish a diverse range of literature, including fiction, non-fiction, and academic works.</p>
  
  </blockquote>
  <figcaption class="blockquote-footer">
Amsterdam
  </figcaption>
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