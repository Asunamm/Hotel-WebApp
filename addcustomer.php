<?php

require('db.php');

if ($_POST['submit']) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    // 2. Do a query
    $query  = "INSERT INTO customer (name, age, gender ) "; 
    $query .= "VALUES ('$name', '$age', '$gender') ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>

<form action="addcustomer.php" method="post">
    Name: <input type="text" name="name"> <br/>
    Age: <input type="text" name="age"> <br/>
    Gender: <input type="text" name="gender"> <br/>
    <input type="submit" name="submit">
</form>