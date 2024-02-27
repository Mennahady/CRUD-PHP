<?php
include 'connect.php';
if(isset ($_GET['id'])){
    $id=$_GET['id'];
    $sql="delete from `crud` where id=$id";
    $result=mysqli_query($con, $sql);
    if ($result){
        header('location:display.php');
        //echo "Deleted successfull";
    }else{
        die (mysqli_error($con));
    }
}
 ?>