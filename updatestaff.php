<?php

require('db.php');

if ($_POST['submit']) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $post = $_POST['post'];
    $dt = $_POST['department_no'];
    $location = $_POST['location'];
    
    // 2. Do a query
    $query  = "UPDATE Staff SET "; 
    $query .= "name = '$name', "; 
    $query .= "post = '$post' "; 
    $query .= "department_no = '$dt' ";
    $query .= "location = '$locarion' ";
    $query .= "WHERE id = $id";
    
    $result = mysqli_query($connection, $query);
    
    header('location: homepage.php');
}


$updateid = $_GET['id'];

// 2. Do a query
$query  = "SELECT id, name, post, department_no, location ";
$query .= "FROM Staff ";
$query .= "WHERE id = $updateid";


$result = mysqli_query($connection, $query);

if(!$result) {
    die("query is wrong");
}

$row = mysqli_fetch_array($result);

?>

<form action="updatestaff.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    Name: <input type="text" name="name" value="<?php echo $row["name"]; ?>" > <br/>
    
    Post: <input type="text" name="post" value="<?php echo $row["post"]; ?>" /> <br/>
    
    Department: <input type="text" name="department_no" value="<?php echo $row["department_no"]; ?>" /> <br/>
    
    Location: <input type="text" name="location" value="<?php echo $row["location"]; ?>" /> <br/>
    
    <input type="submit" name="submit" value="Submit"/>
</form>


<?php

// 5. close db connection
mysqli_close($connection);

?>