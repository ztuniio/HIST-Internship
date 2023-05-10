<!-- Page2.php -->

<?php
if(isset($_POST['number_of_entries'])) {
  $number_of_entries = intval($_POST['number_of_entries']);
} else {
  $number_of_entries = 0;
}
?>

<form action="Page3.php" method="post">
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i=0; $i<$number_of_entries; $i++) { ?>
        <tr>
          <td><input type="text" name="name[]"></td>
          <td>
            <label for="male<?php echo $i; ?>">Male</label>
            <input type="radio" name="gender[<?php echo $i; ?>]" id="male<?php echo $i; ?>" value="male">
            <label for="female<?php echo $i; ?>">Female</label>
            <input type="radio" name="gender[<?php echo $i; ?>]" id="female<?php echo $i; ?>" value="female">
          </td>
          <td>
            <select name="country[]">
              <option value="USA">USA</option>
              <option value="Canada">Canada</option>
              <option value="UK">UK</option>
            </select>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

  <input type="submit" value="Submit">
</form>
