<?php

$pagelevel = 2;

require_once('logincheck.php');
require_once('db.php');

?>

<html>
    <head>
        <title>Welcome to Royal Hotel</title>
        <link type="text/css" rel="stylesheet">
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
    img{
        float: left; margin-left:10px; padding:2px 2px; border:1px solid #CCC;
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
        height: 40px;
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
            <li><a href="homepage-p.php">Home</a></li>
            <li><a href="room.php">Room</a></li>
            <li><a href="order.php">Order List</a></li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
        </div>
    </body>
</html>

