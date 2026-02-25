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
            background: url('image/landscape.jpg');
            background-repeat: no-repeat;
            background-size:cover;

        }
        .form1{
             height:400px;
            width: 300px;
            background-color: black;
            opacity: 70%;
        }
        .form{
            height:400px;
            width: 300px;
            border:1px solid black;
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
    </style>
</head>
<body>
    <div class="form1">
 <div class="form">
    
    <h1><b>Fill this form</b></h1>
    
    <form action="indexcode.php" method="post">
        First name<input type="text" name="first_name"><br><br><br>
        Middle name<input type="text" name="middle_name"><br><br><br>
        Last name<input type="text" name="last_name"><br><br><br>
        <button name="stepbtn">Next Page</button>
    </form>
    </div>
    </div>
</body>
</html>