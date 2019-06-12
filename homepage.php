<?php

require ('db.php');

?>

<html>
    <head>
        <title>Royal Hotel</title>
        <h1>Royal Hotel</h1>
        <style>
           ul
            {
            list-style-type:none;
            margin:0;
            padding:0;
            overflow:hidden;
            }
            li
            {
            float:left;
            }
            a:link,a:visited
            {
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
            a:hover,a:active
            {
            background-color:dimgray;
            }
            h1{
                height:50px;
                text-align:center;
            }
        </style>
        <link type="text/css" rel="stylesheet">   
    </head>
<body>
    <div>
        <ul>
            <li><a href="homepage.php">HOME</a></li>
            <li><a href="customer.php">CUSTOMER</a></li>
            <li><a href="#">STAFF</a></li>
            <li><a href="#">MANAGER</a></li>
            <li><a href="#">SIGN IN | SIGN UP</a></li>
        </ul>
    </div>
    </body>
<p>
<style>
body
{ 
 background-image:url('https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1558079623946&di=37cd602e88de6098e27a72c566c57a18&imgtype=0&src=http%3A%2F%2Foss.zhulong.com%2Fv1%2Ftfs%2FT1yaATBThT1RCvBVdK.jpg');
}
</style>
</p>
            
<?php

// 5. close db connection
mysqli_close($connection);

?>