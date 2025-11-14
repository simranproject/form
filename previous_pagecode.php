<?php

if(isset($_POST['stepbtn']))
{

    $id=$_POST['lastid'];
    $a=$_POST['first_name'];
    $b=$_POST['middle_name'];
    $c=$_POST['last_name'];
    $conn=mysqli_connect("localhost", "root", "","form",3306);
    $up="update formtbl set first_name='$a',middle_name='$b',last_name='$c' where id=$id";

    if(mysqli_query($conn,$up))
    {
        header("location:second_page.php?idd=$id");
    }
    else{
        echo"previous data not update";
    }
}
else{
    header("location:previous_page.php");
}



?>