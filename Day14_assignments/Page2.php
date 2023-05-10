<html>
  <head>
    <title>Page2</title>
  </head>
  <body>
    <form action="Page3.php" method="post">
      <?php
        $no_of_textfields = $_POST['no_of_textfields'];
        echo "<input type='hidden' name='no_of_textfields' value='$no_of_textfields'>";
      ?>
      <table border="1">
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Gender</th>
          <th>Country</th>
        </tr>
        <?php
          for ($i = 1; $i <= $no_of_textfields; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td><input type='text' name='name$i'></td>";
            echo "<td><input type='radio' name='gender$i' value='Male'>Male <input type='radio' name='gender$i' value='Female'>Female</td>";
            echo "<td><select name='country$i'>";
            echo "<option value='Pakistan'>Pakistan</option>";
            echo "<option value='Canada'>Canada</option>";
            echo "<option value='Qatar'>Qatar</option>";
            echo "</select></td>";
            echo "</tr>";
          }
        ?>
      </table>
      <br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>