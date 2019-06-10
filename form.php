
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajx";

$conn = new mysqli($servername, $username, $password, $dbname);
$name = $_POST['name'];
$name1 = $_POST['name1'];
$sql = "INSERT INTO nameList (name, name1)
VALUES ('$name', '$name1')";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>


<?php

	 $sql ="SELECT * FROM nameList";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $dataNmane = $row['name'];
      $dataNmane2 = $row['name1'];
  
      ?>

	<p class='bye'><?php echo $dataNmane ?></p>
			<p id="hi" class='bye'><?php echo $dataNmane2 ?></p>
		<?php } ?>
		


