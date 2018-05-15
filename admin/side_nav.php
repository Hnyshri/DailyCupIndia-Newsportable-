<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" media="screen" href="admin_style.css">
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "190px";
                }    
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
    </head>
<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <h4 style="margin-left:40px; margin-top:-5px;"><font color="white"><i>Manage Content</i></font></h4>
        <div class="dropdown">
            <button class="dropbtn">New Post</button>
                <div class="dropdown-content">
                    <a href="index.php?view=view">View Post</a>
                    <a href="index.php?insert=insert">Insert post</a>
                </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Tech Post</button>
                <div class="dropdown-content">
                    <a href="index.php?tech_view=tech_view">View Post</a>
                    <a href="index.php?tech_insert=tech_insert">Insert post</a>
                </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Education Post</button>
                <div class="dropdown-content">
                    <a href="index.php?education_view=education_view">View Post</a>
                    <a href="index.php?education_insert=education_insert">Insert post</a>
                </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Sport Post</button>
                <div class="dropdown-content">
                    <a href="index.php?sport_view=sport_view">View Post</a>
                    <a href="index.php?sport_insert=sport_insert">Insert Post</a>
                </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Entertainment</button>
                <div class="dropdown-content">
                    <a href="index.php?entertainment_view=entertainment_view">View Post</a>
                    <a href="index.php?entertainment_insert=entertainment_insert">Insert Post</a>            
                </div>
        </div>
    </div>
        <span style="font-size:30px;cursor:pointer; color:white;" onclick="openNav()">&#9776; open</span> 
    </body>
</html> 
