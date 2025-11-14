<?php 

if(isset($_POST['step2btn'])){

 $lastid=$_POST['lastid'];
 $a=$_POST['num'];
 $b=$_POST['address'];

 $conn=mysqli_connect("localhost", "root", "your_password","form");
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