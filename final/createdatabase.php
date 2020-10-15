        <?php
			include_once 'connect.php';
			$sql = "CREATE DATABASE hive";
if ($conn->query($sql) === TRUE) {
  echo "<br> Database created successfully";
} else {
  echo "<br>Error creating database: " . $conn->error;
}
        ?>
    