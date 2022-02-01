<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student data</title>
</head>
<body>
   
    <?php
    require('db.php');
    if(isset($_REQUEST['submit'])){
     
        $adno=stripcslashes($_REQUEST['adno']);
        $adno=mysqli_real_escape_string($con,$adno);
     
        $dno=stripcslashes($_REQUEST['dno']);
        $dno=mysqli_real_escape_string($con,$dno);
       
        $sname=stripcslashes($_REQUEST['sname']);
        $sname=mysqli_real_escape_string($con,$sname);
       
        $fname=stripcslashes($_REQUEST['fname']);
        $fname=mysqli_real_escape_string($con,$fname);
      
        $mname=stripcslashes($_REQUEST['mname']);
        $mname=mysqli_real_escape_string($con,$mname);

        $sex=stripcslashes($_REQUEST['sex']);
        $sex=mysqli_real_escape_string($con,$sex);

        $rel=stripcslashes($_REQUEST['rel']);
        $rel=mysqli_real_escape_string($con,$rel);

        $nati=stripcslashes($_REQUEST['nati']);
        $nati=mysqli_real_escape_string($con,$nati);

        $cast=stripcslashes($_REQUEST['cast']);
        $cast=mysqli_real_escape_string($con,$cast);

        $scast=stripcslashes($_REQUEST['scast']);
        $scast=mysqli_real_escape_string($con,$scast);

        $scst=stripcslashes($_REQUEST['scst']);
        $scst=mysqli_real_escape_string($con,$scst);

        $birth=stripcslashes($_REQUEST['birth']);
        $birth=mysqli_real_escape_string($con,$birth);

        $dbirth=stripcslashes($_REQUEST['dbirth']);
        $dbirth=mysqli_real_escape_string($con,$dbirth);
        
        $pbirth=stripcslashes($_REQUEST['pbirth']);
        $pbirth=mysqli_real_escape_string($con,$pbirth);
       
        $Tcno=stripcslashes($_REQUEST['Tcno']);
        $Tcno=mysqli_real_escape_string($con,$Tcno);

        $firthl=stripcslashes($_REQUEST['firthl']);
        $firthl=mysqli_real_escape_string($con,$firthl);

        $secondl=stripcslashes($_REQUEST['secondl']);
        $secondl=mysqli_real_escape_string($con,$secondl);

        $Monyear=stripcslashes($_REQUEST['Monyear']);
        $Monyear=mysqli_real_escape_string($con,$Monyear);

        $issue=stripcslashes($_REQUEST['issue']);
        $issue=mysqli_real_escape_string($con,$issue);

        $cleav=stripcslashes($_REQUEST['cleav']);
        $cleav=mysqli_real_escape_string($con,$cleav);
       
        $reg=stripcslashes($_REQUEST['reg']);
        $reg=mysqli_real_escape_string($con,$reg);

        $tot=stripcslashes($_REQUEST['tot']);
        $tot=mysqli_real_escape_string($con,$tot);

        $atte=stripcslashes($_REQUEST['atte']);
        $atte=mysqli_real_escape_string($con,$atte);
          
        $query="INSERT into `fulldata`(adno,dno,sname,fname,mname,sex,rel,nati,cast,scast,scst,birth,dbirth,pbirth,Tcno,firthl,secondl,issue,Monyear,cleav,reg,tot,atte) VALUES ('$adno','$dno','$sname','$fname','$mname','$sex','$rel','$nati','$cast','$scast','$scst','$birth','$dbirth','$pbirth','$Tcno','$firthl','$secondl','$issue','$Monyear','$cleav','$reg','$tot','$atte')";
        $result=mysqli_query($con,$query);
       
        if($result){
            echo " 
            <center>
            <div class='ins'>
            <h3>
            The student data added successfully
            </h3>
            <a href='list.php' class='a'>HOME</a>
            </div>
            </center>
            
            ";
        }
        else{
            echo "  <center>
            <div class='ins'>
            <h3>
            The data does't inserted 
            </h3>
            <a href='addstd.php' class='a'>TRY AGAIN</a>
            </div>
            </center>";
        }

    }
    ?>
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
            top:35%;
            font-size:25px;
            text-decoration:none;
            color:white;
            border:1px solid white;
        }
    </style>
</body>
</html>