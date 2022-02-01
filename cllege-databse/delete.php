<?php
require('db.php');
$adno=$_GET['rn'];
$query="DELETE from `fulldata`Where adno='$adno'";
$result=mysqli_query($con,$query);

if($result)
{
    echo " 
            <center>
            <div class='ins'>
            <h3>
            The student data deleted successfully.
            </h3>
            <a href='list.php' class='a'>S-list</a>
            <a href='welcome.php' class='b'>HOME</a>
            </div>
            </center>
            
            ";
}
else{
    echo " 
    <center>
    <div class='ins'>
    <h3>
    The student data not deleted.
    </h3>
    <a href='list.php' class='a'>S-list</a>
    <a href='welcome.php' class='b'>HOME</a>
    </div>
    </center>
    
    ";
}
?>
<style>
    <style>
        *{
            padding:0;
            margin:0;
        }
        body{
            background-image:linear-gradient(lightblue,#f0fff0);
            background-size:cover;
            background-repeat:no-repeat;
            height:100vh;
            overflow:hidden;
            
        }
        .ins{
            width:500px;
            height:100px;
            background-color:black;
            color:white;
            border-radius:30px;
            align-items:center;
            margin-top:200px;
        }
        h3{
            position:relative;
            top:20%;
        }
        .a{
            position:relative;
            top:20%;
            font-size:25px;
            text-decoration:none;
            color:white;
            right:20px;
            border:1px solid white;
        }
        .b{
            position:relative;
            top:20%;
            font-size:25px;
            text-decoration:none;
            color:white;
            left:20px;
            border:1px solid white;
        }
    </style>
</style>