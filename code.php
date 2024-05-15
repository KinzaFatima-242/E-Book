<?php
$conn = mysqli_connect('localhost', 'root', '','librousbook1');

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category= $_POST['category'];
    $in = $_FILES['image']['name'];
    $itmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($itmp, "upload/" . $in);

    $query = "INSERT INTO view_book(name,price,image,category) VALUES ('$name','$price,'$in','$category')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        echo "Registered successfully!";
    } else {
        echo "Something went wrong";
    }
}

// Add book page insert fields is here
// Data INSERTION SECTION
if (isset($_POST['add_book'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $country = $_POST['country'];
    $postal_code = $_POST['postal_code'];
    $book_title = $_POST['book_title'];
    $category = $_POST['category'];
    $pdf = $_POST['pdf'];
    $description = $_POST['description'];
    
    $query = "INSERT INTO add_book (author_name,email,password,phone,address,city,province,country,postal_code,book_title,category,pdf,description) VALUES ('$name', '$email', '$password','$phone','$address','$city','$province','$country','$postal_code','$book_title','$category','$pdf','$description')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        header("Location: submit_successfully.php");
 
    } else {
        echo "Something went wrong";
    }
}

// Customer Registration page CODE
// Customer Registration page CODE
if (isset($_POST['customer_register'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $birthdate=$_POST['birthdate'];
    $concern=$_POST['concern'];
    $city=$_POST['city'];
    $province=$_POST['province'];
    $country=$_POST['country'];
    $zip=$_POST['zip'];
    $description=$_POST['description'];
    
    $query = "INSERT INTO  customer_reg (name,email,password,phone,address,birthdate,concern,city,province,country,zip,description) VALUES ('$name','$email','$password','$phone', '$address','$birthdate','$concern','$city','$province','$country','$zip','  $description')";
    $query_run=mysqli_query($conn, $query);
    if($query_run) {
        header("Location:Register_succefully.html");
    } 
    else {
        echo "Something went wrong";
    }
}


// Data UPDATE SECTION
if (isset($_POST['register_update_btn'])) {
    $update_id = $_POST['edit_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];


    move_uploaded_file($itmp, "upload/" . $in);
    $query_update = "UPDATE view_book SET name='$name', price='$price', category='$category' , image='$image' WHERE id='$update_id'";
    $query_update_run = mysqli_query($conn, $query_update);

    if ($query_update_run) {
        header("Location: index.php");
    } else {
        header("Location: index.php");
    }
}



// buynow 

// Customer Registration page CODE
// Customer Registration page CODE
if (isset($_POST['buynow'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $description=$_POST['description'];
    
    $query = "INSERT INTO  buynow (Name,Email,Address,Phone,Description) VALUES ('$name','$email','$address','$phone', '$description')";
    $query_run=mysqli_query($conn, $query);
    if($query_run) {
        header("Location:Order_placed.php");
    } 
    else {
        echo "Something went wrong";
    }
}

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $description=$_POST['description'];
    
    $query = "INSERT INTO  buynow (Name,Email,Address,Phone,Description) VALUES ('$name','$email','$address','$phone', '$description')";
    $query_run=mysqli_query($conn, $query);
    if($query_run) {
        header("Location:Order_placed.php");
    } 
    else {
        echo "Something went wrong";
    }
}


// Customer _Login

$conn = mysqli_connect('localhost', 'root', '', 'librousbook1');

if (isset($_POST['create'])) {
    $username= $_POST['username'];
    $password= $_POST['password'];
    
    $query = "INSERT INTO customer_login (username,password) VALUES ('$username','$password')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        header("Location: Customer.php");
    } else {
        echo "Something went wrong";
    }
}

if (isset($_POST['custom_login'])) { // You have the same condition twice, it should be only once
  $username= $_POST['username'];
  $password= $_POST['password'];
  $fetch_sql = "SELECT * FROM customer_login WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $fetch_sql);
  $total_rows = mysqli_num_rows($result);

  if ($total_rows != 0) {
      $data = mysqli_fetch_assoc($result); 

      $_SESSION['username'] = $data['username'];
      $_SESSION['password'] = $data['password'];

      header('Location: Customer.php');
      exit;
  } else {
      echo "<script>alert('Username or password is incorrect');</script>";
  }
}




// PUBLISHER REGISTRATION AND LOGIN SIGNUP CODE 
if (isset($_POST['publisher_register'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $birthdate=$_POST['birthdate'];
    $concern=$_POST['concern'];
    $city=$_POST['city'];
    $province=$_POST['province'];
    $country=$_POST['country'];
    $zip=$_POST['zip'];
    $description=$_POST['description'];
    
    $query = "INSERT INTO  publisher_reg(name,email,password,phone,address,birthdate,concern,city,province,country,zip,description) VALUES ('$name','$email','$password','$phone', '$address','$birthdate','$concern','$city','$province','$country','$zip','  $description')";
    $query_run=mysqli_query($conn, $query);
    if($query_run) {
        header("Location:Register_succefully.html");
    } 
    else {
        echo "Something went wrong";
    }
}


$conn = mysqli_connect('localhost', 'root', '', 'librousbook1');

if (isset($_POST['publisher_create'])) {
    $username= $_POST['username'];
    $password= $_POST['password'];
    
    $query = "INSERT INTO publisher_login (username,password) VALUES ('$username','$password')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        header("Location: Publisher.php");
    } else {
        echo "Something went wrong";
    }
}

if (isset($_POST['publisher_login'])) { // You have the same condition twice, it should be only once
  $username= $_POST['username'];
  $password= $_POST['password'];
  $fetch_sql = "SELECT * FROM publisher_login  WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $fetch_sql);
  $total_rows = mysqli_num_rows($result);

  if ($total_rows != 0) {
      $data = mysqli_fetch_assoc($result); 

      $_SESSION['username'] = $data['username'];
      $_SESSION['password'] = $data['password'];

      header('Location: Publisher.php');
      exit;
  } else {
      echo "<script>alert('Username or password is incorrect');</script>";
  }
}



?>








