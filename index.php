<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD Example</title>
</head>
<body>

<h2>Add User</h2>

<form action="insert.php" method="POST">
    Name: <input type="text" name="name" required>
    Email: <input type="email" name="email" required>
    <button type="submit">Save</button>
</form>

<hr>

<h2>User List</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
</tr>

<?php

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){

?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td>

        <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>

        <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>

    </td>
</tr>

<?php } ?>

</table>

</body>
</html>