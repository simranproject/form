<?php
if(isset($_REQUEST['idd'])){
    $lastid=$_REQUEST['idd'];
}
else{
    header("location:index.php");
}
$conn = mysqli_connect("localhost", "root", "", "form");
$sel = "select * from formtbl where id=$lastid";
$r = mysqli_query($conn, $sel);
$fetch = mysqli_fetch_array($r, MYSQLI_BOTH);
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
            margin-top:15vh;
            background: url('image/landscape3.jpg');
            background-repeat: no-repeat;
            background-size:cover;

        }
        .form{
            height:560px;
            width: 350px;
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
         button a:hover{
            background-color:white;
            color:black;
        }
         button a{
         text-decoration:none;
         color: white;
        }
      h1{text-align: center;}

      form{text-align: center;}
        
      a{text-align: center;}
    </style>
</head>
<body>
    <div class="form">
    <h1>Your pervious data</h1>
    <form action="second_pagecode.php" method="post">
        First name<input type="text" name="first_name" value="<?php echo $fetch['first_name']; ?>" readonly><br><br>
        Middle name<input type="text" name="middle_name" value="<?php echo $fetch['middle_name']; ?>" readonly><br><br>
        Last name<input type="text" name="last_name" value="<?php echo $fetch['last_name']; ?>" readonly><br><br>

    <h1>This is next page</h1>
    <input type="hidden" name="lastid" value="<?php echo $lastid;?>">
        Mobile<input type="number" name="num"><br><br>
        Address<textarea name="address"></textarea><br><br>
         <button><a href="previous_page.php?idd=<?php echo $lastid ?>">Previous</a></button>
        <button name="step2btn">save </button>
        
</form>
</div>
    </body>
</html>