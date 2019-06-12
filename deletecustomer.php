<?php

require('db.php');

$deleteid = $_GET['id'];

// 2. Do a query
$query  = "DELETE FROM customer "; 
$query .= "WHERE id = $deleteid";

echo $query;

$result = mysqli_query($connection, $query);


if (!$result) {
    die("query is wrong");
}

Echo "customer deleted";

// 5. close db connection
mysqli_close($connection);

?>