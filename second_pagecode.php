<?php 

if(isset($_POST['step2btn'])){

 $lastid=$_POST['lastid'];
 $a=$_POST['num'];
 $b=$_POST['address'];

 $conn=mysqli_connect("db4free.net", "simran123", "Simran@123", "formdb", 3306);
 $up="update formtbl set mobile='$a',city='$b' where id=$lastid";

 if(mysqli_query($conn,$up)){
    header("location:show_page.php?idd=$lastid");
 }
 else{
    echo"data is not save";
 }
}
else{

    header("location:step1.php");
}

?>