<?php 
    include("includes/data.php");
    $delete_id = $_GET['business_del_page'];
    $delete_query = " delete from business_posts where id = '$delete_id'";

    if (mysql_query($delete_query)) 
            {
                echo "<script>alert('A Post has been deleted')</script>";
                echo "<script>window.open('index.php?business_deleted=An Business post has been deleted...','_self')</script>";
            } 

?>