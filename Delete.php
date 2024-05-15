<?php
$conn = mysqli_connect('localhost','root','','librousbook1');

$delete_id = $_GET['id'];
$del_query="DELETE FROM view_book WHERE id='{$delete_id}'";
$reg_query_run= mysqli_query($conn,$del_query);

echo "<script>window.location.href='http://localhost/Ebook(working)/E-Books(link)/Admin.php'</script>";



?>