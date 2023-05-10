<html>
  <head>
    <title>Page3</title>
  </head>
  <body>
    <?php
      $no_of_textfields = $_POST['no_of_textfields'];
    ?>
    <form action="Page4.php" method="post">
      <table border='1'>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Gender</th>
          <th>Country</th>
          <th>Edit</th>
        </tr>
        <?php
          for ($i = 1; $i <= $no_of_textfields; $i++) {
            if (isset($_POST['name'.$i]) && isset($_POST['gender'.$i]) && isset($_POST['country'.$i])) {
              $name = $_POST['name'.$i];
              $gender = $_POST['gender'.$i];
              $country = $_POST['country'.$i];
              echo "<tr>";
              echo "<td>$i</td>";
              echo "<td>$name</td>";
              echo "<td>$gender</td>";
              echo "<td>$country</td>";
              echo "<td><a href='Page4.php?id=$i'>Edit</a></td>";
              echo "</tr>";
              $records[$i-1] = array("name" => $name, "gender" => $gender, "country" => $country);
            }
          }
          session_start();
          $_SESSION['records'] = $records;
        ?>
      </table>
      <br><br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>