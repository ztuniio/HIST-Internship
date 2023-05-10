<!-- Page3.php -->

<?php
session_start();

if(isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['country'])) {
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['gender'] = $_POST['gender'];
  $_SESSION['country'] = $_POST['country'];
}

if(isset($_POST['edit_index'])) {
  $edit_index = intval($_POST['edit_index']);
} else {
  $edit_index = -1;
}
?>

<form action="Page4.php" method="post">
  <table
