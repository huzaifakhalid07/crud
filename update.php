<?php

include "db.php";

$id = $_GET['id'];

if(isset($_POST['update'])){

    $name = $_POST['name'];
    $email = $_POST['email'];

    $update = "UPDATE users
               SET name='$name', email='$email'
               WHERE id='$id'";

    mysqli_query($conn,$update);

    header("Location: index.php");
}

$query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

?>

<form method="POST">

Name:
<input type="text" name="name" value="<?php echo $row['name']; ?>">

Email:
<input type="email" name="email" value="<?php echo $row['email']; ?>">

<button name="update">Update</button>

</form>