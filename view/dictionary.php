<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../sass//main.css" />
    <title>Dictionary</title>
</head>

<body class="bg-cyan-color">
    <a href="banglaToenglish.php" class="btn btn-button mt-5 ms-5">Bangla to English</a>
    <h1 class="text-center my-5">English To Bangla Dictionary</h1>
    <form action="dictionary.php" method="post" class="w-25 m-auto">
        <div class="mb-3">
            <input type="text" name="word" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Search Word" />
        </div>
        <input type="submit" class="btn btn-button px-3 fw-bold" name="search" value="Search" />
    </form>
    <table class="table table-dark table-hover mt-5 w-50 m-auto ">
        <?php
include "db.php";
if(isset($_POST["search"])){
    $word=$_POST["word"];
$sql1="SELECT * from dictionary where word= '$word' ";
$query1=mysqli_query($conn,$sql1);
while($info=mysqli_fetch_array($query1)){
?>
        <tr>
            <td class="text-center"><?php echo $info['word'] ?><span style="margin-left:106px;">|</span></td>
            <td class="text-center"><?php echo  $info['meaning']        ?></td>
        </tr>
        <?php
}
}
?>
    </table>
    <!-- ============================================== -->
    <table class="table table-dark table-hover mt-5 w-50 m-auto ">
        <thead>
            <tr>
                <th scope="col" class="text-center">Word</th>
                <th scope="col" class="text-center">Meaning</th>
            </tr>
        </thead>
        <tbody>
            <?php
        include "db.php";
        // $conn = new mysqli($servername,$userName, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
        $sql="SELECT * from dictionary"; 
        $result = $conn->query($sql);
      if ($result->num_rows > 0) { 
        while($row=$result->fetch_assoc()) {
           ?>
            <tr>
                <td class="text-center"><?php echo $row['word'] ?></td>
                <td class="text-center"><?php echo $row['meaning'] ?></td>
            </tr>
            <?php
          }
        } else {
          echo "0 results";
        }
        ?>
        </tbody>
    </table>
    <!-- ========================================================== -->























</body>

</html>