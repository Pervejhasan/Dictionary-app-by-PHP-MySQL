<?php
include 'db.php';
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT word, meaning FROM dictionary";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>
<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th scope="col" class="text-center p-3">Word</th>
            <th scope="col" class="text-center p-3">Meaning</th>
        </tr>
    </thead>
    <tbody>
        <?php

  while($row = $result->fetch_assoc()) {
?>
        <tr>
            <td class="p-3"><?php echo $row["word"] ; ?></td>
            <td class="p-3"><?php echo $row["meaning"] ; ?></td>
        </tr>
        <?php
  }
  ?>
    </tbody>
</table>
<?php
}
$conn->close();
?>