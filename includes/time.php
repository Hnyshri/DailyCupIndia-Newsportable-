<html>
<script>
            function myclock(){
                time = new Date();
                hours = time.getHours();
                mins = time.getMinutes();
                sec = time.getSeconds();
                if(sec<10)
                {
                    sec = "0"+ sec;
                }                    
                if(mins<10)
                {
                    mins = "0"+ mins;
                }
                document.getElementById("clock").innerHTML= hours+" : "+mins+" : "+sec;
                timer = setTimeout(function() {myclock()},500);                        
                }
</script>
<body onload="myclock()">
 <div id="top"><p>Today is:&nbsp;&nbsp; <?php echo date("l jS , F Y");?></p><div id="clock" class="clock"></div></div>
</body>
</html>