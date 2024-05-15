<?php include('includes/header.php')?>  <!--include function is used to add header part -->
<style>
  #delete_btn{
    font-family: 'Caprasimo', cursive;
  background-color:#880808;
  }
  #delete_btn a{
    background-color: white;
    color:#880808;
  }
  #exampleModalLabel h1{
    color:black;
    
    text-align:center;
    background-color:#DFB0B0;
    
  }
  #modal_para{
    color:#880808;
    font-family: 'Caprasimo', cursive;
    text-align:center;
  }
  .modal-header #del_heading{
    font-family: 'Caprasimo', cursive;
    text-align:center;
    color:black;
    background-color:white;
    
  }
  #order_table .card{
    background-color:#DFB0B0;
    border-radius:20px;  
  }  /* ORDER TABLE CSS */
#order_table .card-body{
border-radius:20px;
background-color:#090232 ;
  color:#DFB0B0;
  font-family: 'Montserrat', sans-serif;
  font-weight:bold;
}
#order_table table th{
  font-size:20px;
  font-family: 'Caprasimo', cursive;
  color:#090232;
  font-weight:bold
}
#order_table  h1{
  color:#090232;
  font-family: 'Caprasimo', cursive;
text-align:center;
border-radius:100px;
box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
#order_table p{
  color:#090232;
  text-align:center;
}
#top_content h1{
  font-family: 'Caprasimo', cursive;
  color:#090232;
  text-align:center;
}
#top_content h6{
  font-family: 'Caprasimo', cursive;
  color:#090232;
  text-align:center;
} 
#order_table button{
  box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
  background-color:#090232;
  color:#DFB0B0;
}
#back_btn a{
  text-decoration:none;
  color:#DFB0B0;
  font-family: 'Caprasimo', cursive;

}
table #form_del_btn {
 color:white; 
  background-color:#880808;
}
</style>

    <div class="container" >
        <div class="row mt-5" id="top_content">
        
        <h1>E-BOOK by "2209B1"</h1>
          <h6>Expand your collection by effortlessly adding new eBooks. <br> Fill in the book's details, upload the cover art, and provide a captivating <br> description to entice your readers. <br> Keep your library up-to-date by editing book details whenever necessary...!</h6>
    

            <div class="col-md-12" id="order_table">
            <button class="btn mt-2 mb-2" id="back_btn"><a href="Admin.php">Back</a></button>
            <div class="card" >
                    <div class="card-header">
                        <h1>Palced Orders</h1>
                        <hr>
                        <p>Update covers, descriptions, and metadata to ensure accurate information...!</p>
                       <!--add buttohrn and add float class-->
                    </div>
                    <div class="card-body" id="index_page_table" >

                    <?php
                   $conn = mysqli_connect('localhost','root','','librousbook1');
                   $register= "SELECT * FROM buynow";
                   $register_run = mysqli_query($conn, $register);
                 
                   if(mysqli_num_rows($register_run)>0)
                    {
  
                 ?>
              
                    
                <table class="table"  >
                <thead>
                  <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Book Title</th>
                  
                  <th>Delete</th>
                 </tr>
               </thead>
               <tbody>
               <?php
                  while($reg_row = mysqli_fetch_array($register_run))
                      {
                 ?>
                 <tr>
                 <td><?php echo $reg_row['Id'];?></td>
                 <td><?php echo $reg_row['Name'];?></td>
                 <td><?php echo $reg_row['Email'];?></td>
                 <td><?php echo $reg_row['Address'];?></td>
                 <td><?php echo $reg_row['Phone'];?></td>
                 <td><?php echo $reg_row['Description'];?></td>
               
                 
                 
                 <td>
                <!--<form action="code.php" method="POST">-->
                      <input type="hidden" name="del_id" value="<?php echo $reg_row['Id'];?>">
                      <button type="submit" name="register_del_btn" data-bs-toggle="modal"  data-bs-target="#exampleModal" class="btn" id="form_del_btn" >Delete</button>
                    <!----</form>-->
                 </td>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5"class="text-secondry" id="del_heading"> Want to Delete..</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="modal_para">
        Are you sure to Delete Data? 
        <br>
        <b>Remember:</b>You can't recove it back..
      </div>
      <div class="modal-footer" id="delete_btn">
   <a href="Delete.php?id=<?php echo $reg_row['Id']; ?>" class="btn  p-3">Delete</a>
   
      </div>
    </div>
  </div>
</div>
                 </tr>
              <?php  }
            ?>
  
              </tbody>
              </table>
             
             <?php
             }
            else{
               echo"No record found";
                }

                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php')?> 