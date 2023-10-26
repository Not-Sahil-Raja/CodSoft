<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'book-db');

if (isset($_POST['sendRev'])) {
  $name = $_POST['name'];
  $review = $_POST['review'];

  $request = "insert into reviews(name, review) values('$name','$review')";
  $query_run = mysqli_query($connection, $request);

  if ($query_run) {
    //registered succesfully
    header('location:aboutUs.php');
    $_SESSION['status'] = "Registered Sucessfully";
    $_SESSION['status_code'] = "success";
  } else {

    //register problem
    echo 'Something Went Worng Please Try Again';
  }
}
