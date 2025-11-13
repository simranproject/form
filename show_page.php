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
            background: url('image/landscape2.png');
            background-repeat: no-repeat;
            background-size:cover;

        }
        .form{
            height:380px;
            width: 440px;
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
   
      body{
        
      }
       
         button a{
         text-decoration:none;
         color: white;
        }
        table {
          margin-left:30px;
        }
    
    </style>
   
</head>
<body>
  <div class="form">
    <h1>Your Information</h1>
    <table border="2" cellpadding="2" cellspaceing="2">
      <thead>
      <tr>
        <th>Name:-</th>
        <th>Middle:-</th>
        <th>Last:-</th>
        <th>Mobile:-</th>
        <th>City:-</th>
      </tr>
    </thead>
    <tr>
      <?php
      $conn=mysqli_connect("localhost","root","","form");
      $sel="select * from formtbl";
      $r=mysqli_query($conn,$sel);
      $i=1;
      while($data=mysqli_fetch_array($r,MYSQLI_BOTH)){
     ?>
     <tr>
      <td><?php echo $data['first_name'] ?></td>
      <td><?php echo $data['middle_name'] ?></td>
      <td><?php echo  $data['last_name'] ?></td>
      <td><?php echo $data['mobile'] ?></td>
      <td><?php echo $data['city'] ?></td>

     </tr>
     <?php
     $i++;
      }
      ?>
      
    </tr>
    </table>
    <br>
    <button><a href="index.php">Go Back</a></button>
    </div>
</body>
</html>