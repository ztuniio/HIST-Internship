<html>
  <head>
    <title>Page4</title>
  </head>
  <body>
    <?php
      session_start();
      $no_of_textfields = $_SESSION['no_of_textfields'];
      $records = $_SESSION['records'];
      $id = $_GET['id'];
      $record = $records[$id];
    ?>
    <form action="Page3.php" method="post">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      
      Name: <input type="text" name="name" value="<?php echo $record['name']; ?>">
      <br><br>
      Gender: <input type="radio" name="gender" value="Male"

        <?php if ($record['gender'] == 'Male') echo "checked"; ?>>Male <input type="radio" name="gender" value="Female" <?php if ($record['gender'] == 'Female') echo "checked"; ?>Female>
      <br><br>
      Country: <select name="country">
        <option value="Pakistan" <?php if ($record['country'] == 'Pakistan') echo "selected"; ?>>Pakistan</option>
        <option value="Canada" <?php if ($record['country'] == 'Canada') echo "selected"; ?>>Canada</option>
        <option value="Qatar" <?php if ($record['country'] == 'Qatar') echo "selected"; ?>>Qatar</option>
      </select>
      <br><br>
      <input type="submit" name="update" value="Update">
      <input type="submit" name="delete" value="Delete">
    </form>
  </body>
</html> 