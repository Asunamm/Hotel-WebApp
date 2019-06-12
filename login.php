<?php

require('db.php');

if (isset($_POST['submit'])) {
    if (empty($_POST['name']) || empty($_POST['password'])) {
        $error = "username or password is empty";
    }
    else {
        //save username and password in a variable
        $username = $_POST['name'];
        $password = $_POST['password'];
    
    //preper query
    $query  = "SELECT name, password, level ";
    $query .= "FROM Username ";
    $query .= "WHERE name = '$username' AND password = '$password' ";
    
    
    $result = mysqli_query($connection, $query);
    
    $row = mysqli_fetch_array($result);
        
    $numrows=mysqli_num_rows($result);
    if ($numrows == 1) {
        
    session_start();
        
    $_SESSION['login_user'] = $username;
    $_SESSION['login_level'] = $row['level'];
        
    if ($_SESSION['login_level'] == 2) {
                header('location: staff.php');
            } else if ($_SESSION['login_level'] == 3) {
                header('location: homepage.php');
            } else {
                header('location: homepage-p.php');
            }
}
    else {
        echo "login failed"; 
    }
    mysqli_free_result($result);
  }
}

 mysqli_close($connection);

?>
<?php

if (isset($error)) {
    echo "<span>" . $error ."</span>";
}
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
	#login{
		width: 400px;
		height: 300px;
		background: azure;
		margin-top: 250px;
        margin-left: 75%;
		position: relative;
	}
	#login h1{
		text-align: center;
		position: relative;
		top: 20px;
		font-size: 40px;
	}
	#login form p{
		text-align: center;
	}
	#user{
		background: rgba(0,0,0,.1) no-repeat;
		width: 250px;
		height: 30px;
		border: solid #ccc 1px;
		border-radius: 3px;
		padding-left: 32px;
		margin-top: 50px;
		margin-bottom: 30px;
	}
	#pwd{
		background: rgba(0,0,0,.1) no-repeat;
		width: 250px;
		height: 30px;
		border:solid #ccc 1px;
		border-radius: 3px;
		padding-left: 32px;
		margin-bottom: 30px;
        
	}
	#submit{
		width: 250px;
		height: 30px;
		background: rgba(0,0,0,.1);
		border:solid #ccc 1px;
		border-radius: 3px;
	}
	#submit:hover{
		cursor: pointer;
		background:#D8D8D8;
	}
</style>
</head>
<body background="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1558079623946&di=37cd602e88de6098e27a72c566c57a18&imgtype=0&src=http%3A%2F%2Foss.zhulong.com%2Fv1%2Ftfs%2FT1yaATBThT1RCvBVdK.jpg" width="100%" height="100%" >
    <span><h1>Welcome to Royal Hotel</h1></span>
    <div>
        <ul>
            <li><a href="homepage-p.php">Home</a></li>
            <li><a href="room.php">Room</a></li>
            <li><a href="order.php">Order List</a></li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
    </div>
<div id="login">
	<form action="login.php" method="post">
        <h1>login</h1>
        <p><input type="text" name="name" id="user" placeholder="username"></p>
		<p><input type="password" name="password" id="pwd" placeholder="password"></p>
		<p><input type="submit" name="submit" value="Login" id="submit"></p>
	</form>
</div>
</body>
</html>     