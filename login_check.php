<?php

error_reporting(0);
$host="localhost";

$user="root";
$password="";
$db="schoolproject";

$link=mysqli_connect($host,$user,$password,$db);

if($link===false)
{
    die("connection error");
}

if(isset($_POST["subbtn"]))
{
    extract($_POST);

    $qry="select * from user where username='$unm' and password='$pwd'";

    $resultSet=mysqli_query($link,$qry);

    $row=mysqli_fetch_array($resultSet);

    if($row["usertype"]=="student")
    {
        header("location:studenthome.php?id=$row[id]&type=$row[usertype]");

    }
    else if($row["usertype"]=="admin")
    {

        header("location:adminhome.php?id=$row[id]&type=$row[usertype]");

    }
    else if($row==null)
    {

        session_start();
        $message="username and password doesnot match";
        $_SESSION['loginMessage']=$message;
        header("location:login.php");
    }


}
?>