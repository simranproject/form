<?php 

if(isset($_POST['stepbtn'])){

    $a=$_POST['first_name'];
    $b=$_POST['middle_name'];
    $c=$_POST['last_name'];
    
    $conn=mysqli_connect("db4free.net","localhost","root","","form",3306);
    $ins="insert into formtbl(first_name,middle_name,last_name)values('$a','$b','$c')";
    if(mysqli_query($conn,$ins)){

        $lastid=mysqli_insert_id($conn);
        header("location:second_page.php?idd=$lastid");
    }
    else{
        echo"data is not save";
    }
}
else{

    header("location:index.php");
}
?>