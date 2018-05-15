<?php 
    include("includes/data.php");
    $delete_id = $_GET['tech_del'];
    $delete_query = " delete from tech_posts where id = '$delete_id'";

    if (mysql_query($delete_query)) 
            {
                echo "<script>alert('A Post has been deleted')</script>";
                echo "<script>window.open('index.php?tech_deleted=Tech post has been deleted...','_self')</script>";
            } 

?>