<html><head><title>css</title>

<link rel="stylesheet" href="2.css">
</head>
<body>
    <div >
        <div id="diva" >
              <form method="post" action="">
                  <div id="head">                  
                         Contact me 
                    </div><br>
                  <label for="name">Enter Name</label><br>
                  <input class="in" type="text" name="name" placeholder="Your name" required><br>
                  <label for="email">Enter Email</label><br>
                  <input type="email" name="email" placeholder="Your email" ><br>
                  <label for="email">Enter Subject</label><br>
                  <input type="text" name="txt1" placeholder="enter subject"required><br>
                  <label for="txt" placeholder="Enter Your massage">Enter Massage</label><br>
                  <textarea  rows="13" cols="52" name="txt" placeholder="Enter your massage..." required></textarea><br>
                  <input class="sub" type="submit" value="submit"><br>
                  
              </form>
        </div>

    </div>
</body>




</html>


<?php

$n=$_POST["name"];
$e=$_POST["email"];
$s=$_POST["txt1"];
$m=$_POST["txt"];

$con=pg_connect("host=localhost dbname=postgres user=postgres password=1234");
if(!$con){
    echo "connection failed";
    return false;
}

$result=pg_query("insert into contacts values(('$n'),('$e'),('$s'),('$m'))");

if($result){
echo '<script>alert("succeeded")</script>';
}
else{
    echo '<script>alert("failed")</script>';
}
     
pg_close($con);
?>