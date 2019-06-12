<?php

require ('db.php');

// 2. Do a query
$query  = "SELECT name, age, gender, id "; 
$query .= "FROM customer ";


$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

?>

<html>
    <head>
        <title>Car Club</title>
        <link type="text/css" rel="stylesheet" >
        <style>
            .hello tr:hover {
        background-color:gainsboro;
            }
        </style>
    </head>
    
    <body>
<table width="80%" border="double" cellpadding="2" cellspacing="1" align="center" class="hello">
            <thead>
                <td>Name</td>
                <td>Age</td>
                <td>Gender</td>
                <td>ID Card</td>
                <td>Delete Customer</td>
                <td>Update Customer</td>
            </thead>

<?php

// 3. use/show data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["age"] . "</td>";
    echo "<td>" . $row["gender"] . "</td>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td><a href='deletecustomer.php?id="  .$row["id"] . "'>Delete customer</a></td>";  
    echo "<td><a href='updatecustomer.php?id="  .$row["id"]  ."'>Update customer</a></td>";
    echo "</tr>";
}        
            
?>
    
</table>
              
<a href="addcustomer.php">Add a new customer</a>

<?php

// 4. free results
mysqli_free_result($result);

// 5. close db connection
mysqli_close($connection);

?>
    
    </body>
</html>
