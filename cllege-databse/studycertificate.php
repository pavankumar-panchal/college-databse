<?php
require('db.php');

$adno=$_GET['rn'];


$query="SELECT * from fulldata where adno='$adno'";
$result=mysqli_query($con,$query);

$new=mysqli_fetch_assoc($result);
// $total=mysqli_num_rows($result);



echo "<center>
<div class='o'>
    <label for='' class='header'><i><u>STUDY CERTIFICATE</u></i></label>
</div>
</center>
<div class='content'>
    <p>
        This is certify that sri/smt/kum &nbsp <u>$new[sname]</u> &nbsp D/O &nbsp <u>$new[fname]</u> &nbsp has studies from &nbsp<i><u><b>PUC-1</b></u></i>&nbsp
         year to&nbsp <i><u><b>  PUC-2  </b> </u> </i> &nbsp year in our institution from academic year &nbsp<i><u><b>2021-22</b></u></i>&nbsp to &nbsp<i><u><b>2022-23</b></u></i>&nbsp as per admission register of the institution bearing admission number &nbsp <u><b>$new[adno] </b></u>. 
    </p>
    <p class='ack'>The above details are correct and true to the best of my knowladge.</p>
    <p class='seal'>(Institution seal)</p>
    <p class='pri'>  Principal</p>
    <p class='pri1'>(Sign with stamp)</p>
    <p class='pri2'>Name in block letters.............</p>
    <h1 class='line'></h1>
    <center>
    <h4><i><u>COUNTER SIGNED BY ME</u></i></h4>
    <br>
    <p>Address,seal & office Telephone number of the Block office/DDPI</p>
    </center>
</div>";


echo"  <style>
.o{
    font-size: 25px;
    margin-top: 30px;
    font-weight: 900;
}
.content{
    width: 90%;
    height: auto;
    margin-left: 5%;
    margin-top: 100px;
    font-size: 20px;
}
.ack{
    font-size: 20px;
    margin-top: 60px;
}
.seal{
    margin-top: 250px;
}
.pri{
    margin-left:70%
}
.pri1{
    margin-left: 67%;
    position: relative;
    top: -10px;
}
.pri2{
    margin-left: 40%;
    position: relative;
    top: px;
}
.line{
 width: 100%;
 height: 2px;
 background-color: black;
}
</style>";

?>