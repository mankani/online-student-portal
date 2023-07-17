 <?php

 if(!isset($_GET["id"]))
 {

     header("location:login.php");
 }
 else
 {
    $i=$_GET["id"];
    $t=$_GET["type"];
    echo "$t";
    if($t!="student")
    header("location:login.php");
 }

 ?>

 
 
 
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboardt</title>
 </head>
 <body>

 <h1>Student Home</h1>
 <a href="logout.php">Logout</a>
    
 </body>
 </html>