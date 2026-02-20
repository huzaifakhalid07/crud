<?php

include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];

$query = "INSERT INTO users (name,email)
          VALUES ('$name','$email')";

mysqli_query($conn, $query);

header("Location: index.php");

?>