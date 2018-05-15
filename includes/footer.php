<html>
<head>
<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 10px;
  border: none;
  outline: none;
  background-color:rgb(204, 200, 200);
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
</head>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
<body>  
    <button onclick="topFunction()" id="myBtn" title="Go to top"><font size=3px;>&#8593;</font></button>
<footer>
    <section>            
        <div class="footer">
            <div class="headline"><div><h5><i>About DailyCup</i></h5></div>
                <div id="list">
                    <p><i>DailyCup is establish to provide the <br>information of news, found in the <br>services side of information and <br>provide the all type of forms</i></p>
                </div>
            </div> 
            <div class="headline" ><div><h5><i>Links</i></h5></div>
                <ul id="list">
                    <li><a href="index.php"><i>Home</i></li>
                    <li><a href="tech.php"><i>Tech</i></a></li>
                    <li><a href="business.php"><i>Business</i></a></li>
                    <li><a href="sport.php"><i>Sport</i></a></li>
                    <li><a href="Entertainment.php"><i>Entertainment</i></a></li>
                    <li><a href="contact.php"><i>Contact Me</i></a></li>
                    <li><a href="About_me.php"><i>About Us</i></a></li>
                </ul>
            </div> 
            <div class="headline"><div><h5><i>Contact Us</i></h5></div>
                <div id="list">
                    <address><i>11/144, Anandpuram Colony,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bibi Zai Chouraha,<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Shahjahanpur-242001<br>
                        Email: shriyanshgupta123@gmail.com<br>
                        Phone: (+91) 97 9432 8009<br>
                        www.DailyCup.com</i></address>
                </div>
            </div> 
            <div class="headline">
                <ul class="link-part">
                    <li class="zoom">
                        <a href="https://www.facebook.com/shriyansh.gupta.3"  target="_blank" ><img src="images/fb.png" alt="facebook"></a>
                    </li>                
                    <li class="zoom">
                        <a href="https://www.linkedin.com/in/hnyshri-2129b3128/&amp;locale=en_US"  target="_blank" ><img src="images/Linkedin.png" alt="linkedin"></a>
                    </li>
                    <li class="zoom">
                        <a href="https://github.com/Hnyshri"  target="_blank" ><img src="images/github.png" alt="github"></a>
                    </li>
                    <li class="zoom">
                        <a href="https://www.instagram.com/hnyshri/?hl=en"  target="_blank" ><img src="images/instagram.jpeg" alt="instagram"></a>
                    </li>
                    <li class="zoom">
                        <a href="https://plus.google.com/u/0/117853009398356119464"  target="_blank" ><img src="images/google.png" alt="google+"></a>
                    </li>
                </ul>
            </div>        
        </div>
        <div id="footer-down" >
            <center><br><p>Copyright &copy; 2018 <a target="_blank" href="https://www.facebook.com/shriyansh.gupta.3">Shriyansh Gupta </a> | All Rights Reserved. <a href="includes/export2.php" target="_blank">Disclaimer</a> | <a href="includes/export.php" target="_blank">Terms of Use</a> | <a href="includes/privacypolicy.php" target="_blank">Privacy Policy</a></p></center>                        
        </div>                
    </section>   
</footer>
</body>
</html>