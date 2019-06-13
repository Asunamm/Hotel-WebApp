<?php

require ('db.php');

$deleteid = $_GET['id'];

$query  = "DELETE FROM Staff ";
$query .= "WHERE ID = $deleteid ";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

mysqli_close($connection);

?>

<a href="staff-m.php">Click to Back</a>