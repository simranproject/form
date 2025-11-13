<?php
if(isset($_REQUEST)){
   $lastid=$_REQUEST['idd'];
}
else{
    header("location:index.php");
}
$conn=mysqli_connect("localhost","root","","form");
$sel="select * from formtbl where id=$lastid";
$r=mysqli_query($conn,$sel);
$fetch=mysqli_fetch_array($r,MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        body{
            display: flex;
            text-align:center;
            justify-content:center;
            margin-top:20vh;
            background: url('image/landscape1.jpg');
            background-repeat: no-repeat;
            background-size:cover;

        }
        .form{
            height:400px;
            width: 300px;
            border:1px solid black;
            opacity: 70%;
            background-color: white;
            font-size:20px;
        }
        button{
            height:60px;
            width: 70px;
            background-color:black;
            color:white;
            font-size:15px;
        }
        button:hover{
            background-color:white;
            color:black;
        }
        h1{text-align: center;}

        form{text-align: center;}
   
        h1{text-align: center;}
        form{text-align: center;}
    </style>
</head>
<body>
    <div class="form">
    <h1>Previous Page</h1>
    <form action="previous_pagecode.php" method="post" >
            <input type="hidden" name="lastid" value="<?php echo $lastid;?>">

        First name<input type="text" name="first_name" value="<?php echo $fetch['first_name']; ?>"><br><br>
        Middle name<input type="text" name="middle_name" value="<?php echo $fetch['middle_name']; ?>"><br><br>
        Last name<input type="text" name="last_name" value="<?php echo $fetch['last_name']; ?>"><br><br>
        <button name="stepbtn">Next Page</button>
    </form>
    </div>
</body>
</html>