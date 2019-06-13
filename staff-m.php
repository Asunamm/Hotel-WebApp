<?php

$pagelevel = 3;

require_once('logincheck.php');
require_once('db.php');

?>

<html>
    <head>
        <title>Welcome to Royal Hotel</title>
        <link type="text/css" rel="stylesheet">
        <style>
	body,p,div,ul,li,h1,h2,h3,h4,h5,h6{
		margin:0;
		padding: 0;
	}
	body{
		position: absolute;
        z-index: -1;
        width: 100%;
        height: 100%;
	}
    span h1{
        width: 30%;
        height: 40px;
        float: left;
        display:block;
        font-weight:bold;
        color:#FFFFFF;
        background-color:#181818;
        text-align:center;
        padding:0px;
        text-decoration:none;
        text-transform:uppercase;
            }
    div ul{
        right: 0;
        width: 70%;
        height: 50px;
        position: absolute;
        margin: 0;
        padding: 0;
        overflow:hidden;
    }
    div ul li{
        float: left;
        list-style-type: none;
    }
        
    div ul li a:link,a:visited{
        display:block;
        width:200px;
        font-weight:bold;
        color:#FFFFFF;
        background-color:#181818;
        text-align:center;
        padding:10px;
        text-decoration:none;
        text-transform:uppercase;
    }
    div ul li a:hover,a:active{
        background-color:dimgray;
    }
   
</style>
</head>
    <body background="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1558079623946&di=37cd602e88de6098e27a72c566c57a18&imgtype=0&src=http%3A%2F%2Foss.zhulong.com%2Fv1%2Ftfs%2FT1yaATBThT1RCvBVdK.jpg" width="100%" height="100%" >
    <span><h1>Welcome to Royal Hotel</h1></span>
    <div>
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="staff-m.php">Staff-M</a></li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
    </div>
    </body>
</html>

<?php

$query  = "SELECT id, name, post, department_no, location ";
$query .= "FROM Staff";

$result = mysqli_query($connection, $query);

if(!$result) {
    die("query is wrong");
}

?> 
<html>
    <style>
        
        table td { border:1px solid #0094ff; }
        table { width: 1150px;
            height: 370px;
            background-color: lightgrey;
            margin: 250px;
            float: left;
            text-align: center;
            border-collapse: collapse;
        }
        
    </style>
    <link rel="stylesheet" type="text/css">
            <div>
                <table border="1" cellspacing="0">
                    <thead>            
             <td>Member</td>
             <td>Post</td>
             <td>Department</td>
             <td>Location</td>
             <td>Insert</td>
             <td>Delete</td>
             <td>Update</td>
                    
                    
        
<?php
        while ($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["post"] . "</td>";  
    echo "<td>" . $row["department_no"] . "</td>";
    echo "<td>" . $row["location"] . "</td>";
            
    echo "<td><a href='insertstaff.php?id=" . $row["ID"] . 
        "'>Insert</a></td>";
    echo "<td><a href='deletestaff.php?id=" . $row["ID"] . 
        "'>Delete</a></td>";
    echo "<td><a href='updatestaff.php?id=" . $row["ID"] . 
        "'>Update</a></td>";      
  }

mysqli_close($connection);
?>
                    </thead>
                </table>
    </div>
</html>