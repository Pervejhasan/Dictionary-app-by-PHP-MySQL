<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>Dictionary App By PHP MySQL</title>
    <link rel="stylesheet" href="../sass/main.css">
</head>
<body class="bg-background">
    <h2 class="d-flex justify-content-center mt-5 fs-1 text-decoration-underline">Insert Word</h2>
   <div class="container w-25 mt-5">
   <form action="insert.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label fs-5 ">word</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="word" placeholder="Enter Word" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label fs-5 ">Meaning</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="meaning" placeholder="Enter Meaning" required>
  </div>
  <input type="submit" class="btn btn-button fw-bold" name="insert" value="Add Word"/>
</form>


<?php
include "db.php";
if(isset($_POST['insert'])){
    $word=$_POST['word'];
    $meaning=$_POST['meaning'];
    $sql="INSERT INTO dictionary (word, meaning)
    VALUES ('$word','$meaning')";

// $query=mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
  echo "<p class='p-3 mb-2 mt-2 rounded-3 bg-success text-white'>New word add successfully</p>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
include './showData.php';
}
// mysqli_close($conn);
?>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>