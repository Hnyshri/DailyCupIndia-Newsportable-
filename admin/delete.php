<?php 
    include("includes/data.php");
    $delete_id = $_GET['del'];
    $delete_query = " delete from posts where id = '$delete_id'";

    if (mysql_query($delete_query)) 
            {
                echo "<script>alert('A Post has been deleted')</script>";
                echo "<script>window.open('index.php?deleted=A post has been deleted...','_self')</script>";
            } 

?>