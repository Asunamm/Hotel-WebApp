<?php

require ('db.php');

if ($_POST['submit']) {
// 2. Do a query
$query  = "INSERT INTO Staff (name, post, department_no, location) ";
$query .= "VALUES ('$_POST[name]', '$_POS[post]', '$_POST[department_no]', '$_POST[location]')";

$result = mysqli_query($connection, $query);
  
}

?>


<html>
    <head>
    <title>Welcome to Royal Hotel</title>
    <style>
    body,p,div,ul,li,h1{
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
   #insert{
		width: 400px;
		height: 500px;
		background: azure;
		margin-top: 250px;
        margin-left: 75%;
		position: relative;
	}
	#insert h1{
		text-align: center;
		position: relative;
		top: 20px;
		font-size: 40px;
	}
	#insert form p{
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
	}
    #g{
		background: rgba(0,0,0,.1) no-repeat;
		width: 250px;
		height: 30px;
		border:solid #ccc 1px;
		border-radius: 3px;
		padding-left: 32px;
    }
    #l{
		background: rgba(0,0,0,.1) no-repeat;
		width: 250px;
		height: 30px;
		border:solid #ccc 1px;
		border-radius: 3px;
		padding-left: 32px;
    }
    #pwd{
		background: rgba(0,0,0,.1) no-repeat;
		width: 250px;
		height: 30px;
		border:solid #ccc 1px;
		border-radius: 3px;
		padding-left: 32px;
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
    <link rel="stylesheet" type="text/css"> 
    <body background ="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1558079623946&di=37cd602e88de6098e27a72c566c57a18&imgtype=0&src=http%3A%2F%2Foss.zhulong.com%2Fv1%2Ftfs%2FT1yaATBThT1RCvBVdK.jpg" width="100%" height="100%" >
    <span><h1>Welcome to Royal Hotel</h1></span>
    <div>
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="staff-m.php">Staff-M</a></li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
    </div>
    <div id="insert">  
        <form action="insertstaff.php" method="post">
            <h1>Insert</h1>
            <p><input type="text" name="name" id="user" placeholder="username" /></p><br/>
    
            <p><input type="text" name="post" id="g" placeholder="gender"/></p><br/>
    
            <p><input type="text" name="department_no" id="l" placeholder="level"/></p><br/>
    
            <p><input type="text" name="location" id="pwd" placeholder="password"/></p><br/>
    
            <p><input type="submit" name="submit" value="Submit" id="submit"/></p>
        </form>
    </div>
    </body>
</html>

<?php

mysqli_close($connection);

?>