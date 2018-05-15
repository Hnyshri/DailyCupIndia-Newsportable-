<?php 
    include("includes/data.php");
    $delete_id = $_GET['sport_del_page'];
    $delete_query = " delete from sport_posts where id = '$delete_id'";

    if (mysql_query($delete_query)) 
            {
                echo "<script>alert('A sport Post has been deleted')</script>";
                echo "<script>window.open('index.php?sport_deleted=A Sport post has been deleted...','_self')</script>";
            } 

?>