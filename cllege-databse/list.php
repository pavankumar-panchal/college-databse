<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT LIST</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" -->
    <!-- integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style2.css">
    
</head>
<body>
<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
        <div class='container-fluid'>
            <!-- <a class='navbar-brand' href='#'>Navbar</a> -->
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse'
                data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false'
                aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                    <li class='nav-item'>
                        <a class='navbar-brand' href='welcome.php'>Home</a>
                    </li>
                    <!-- <li class='nav-item'>
                        <a class='navbar-brand' href='#'>TC</a>
                    </li> -->

                    <li class='nav-item'>
                        <a class='navbar-brand' href='addstd.php' tabindex=''>Addstudent</a>
                    </li>
                </ul>
                <form class='d-flex'>
                    <input class='form-control me-2' type='search' placeholder='Search' aria-label='Search'>
                    <button class='btn btn-outline-success' type='submit'>Search</button>
                </form>
            </div>
        </div>
    </nav>

<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col"style="width:1.5%">ID</th>
      <th scope="col"style="width:100px">AdmiNo</th>
      <th scope="col"style="width:100px">Date of Admi.</th>
      <th scope="col"style="width:100px">Names</th>
      <th scope="col"style="width:100px">father name</th>
      <th scope="col"style="width:100px">Mother name</th>
      <th scope="col"style="width:100px">Sex</th>
      <th scope="col"style="width:100px">Religion</th>
      <th scope="col"style="width:100px">Nationality</th>
      <th scope="col"style="width:100px">Cast</th>
      <th scope="col"style="width:100px">Sub-cast</th>
      <th scope="col"style="width:100px">SC/ST</th>
      <th scope="col"style="width:100px">DOB</th>
      <th scope="col"style="width:100px">Place of birth</th>
      <th scope="col"style="width:100px">Tcno</th>
      <th scope="col"style="width:100px">Issue</th>
      <th scope="col"style="width:100px">month</th>
      <th scope="col"style="width:100px">leav</th>
      <th scope="col"style="width:100px">Reg,no</th>
      <th scope="col"style="width:100px">Atted</th>
      <th scope="col"style="width:100px">std-atd</th>
      <th scope="col"style="width:100px">TC</th>
      <th scope="col"style="width:100px;">SC</th>
      <th scope="col"style="width:100px;">update</th>
      <th scope="col"style="width:100px;">Delete</th>

    </tr>
  </thead>
  
</table>
        <style>
            body{
                width:120%;
padding:0;
margin:0;
                
            }
            th{
                border-right:1px solid black;
               margin-right:10px;
               
            }
            td{
                margin-left:10px;
                width:100px;
            }
            a{
          
            
              text-decoration:none;
              color:white;
            
              position:relative;
          

            }
            .one{
              text-align:center;
              height:30px;
              border-radius:30px;
              color:white;
              font-size:18px;
              font-weight:300;
              background-color:blue;
            }
            .three{
              text-align:center;
              height:30px;
              border-radius:30px;
              color:white;
              font-size:18px;
              font-weight:300;
              background-color:forestgreen;
            }
            .two{
              text-align:center;
              height:30px;
              border-radius:30px;
              color:white;
              font-size:18px;
              font-weight:300;
              background-color:red;
            }
            .one:hover{
              text-align:center;
              height:30px;
              border-radius:30px;
              color:white;
              font-size:18px;
              font-weight:300;
              background-color:purple;
            }



            a:hover{
            color:white;
          
        }
        </style>
    
    <?php
    require('db.php');
    $query="SELECT * from fulldata";
    // $query="SELECT * from tc";
       $result=mysqli_query($con,$query);
    $num=mysqli_num_rows($result);
    
    if($num!=0){
        while($total= mysqli_fetch_assoc($result)){
            echo "
            <table class='table table-striped'>

      <th style='width:1%;'>$total[ID]</th>
      <td style='width:100px;'>$total[adno]</td>
      <td style='width:100px;'>$total[dno]</td>
      <td style='width:100px;'>$total[sname]</td>
      <td style='width:100px;'>$total[fname]</td>
      <td style='width:100px;'>$total[mname]</td>
      <td style='width:100px;'>$total[sex]</td>
      <td style='width:100px;'>$total[rel]</td>
      <td style='width:100px;'>$total[nati]</td>
      <td style='width:100px;'>$total[cast]</td>
      <td style='width:100px;'>$total[scast]</td>
      <td style='width:100px;'>$total[scst]</td>
      <td style='width:100px;'>$total[birth]</td>
      <td style='width:100px;'>$total[pbirth]</td>
      <td style='width:100px;'>$total[Tcno]</td>
      <td style='width:100px;'>$total[issue]</td>
      <td style='width:100px;'>$total[Monyear]</td>
      <td style='width:100px;'>$total[cleav]</td>
      <td style='width:100px;'>$total[reg]</td>
      <td style='width:100px;'>$total[tot]</td>
      <td style='width:100px;'>$total[atte]</td>

    
    
      <td style='width:100px;'>
      <div class='one' >
      <a href='tc.php?rn=$total[adno]' onclick='return checkdelete()'>TC</a></td>
      </div>
      <td style='width:100px;'>
      <div class='one'><a href='studycertificate.php?rn=$total[adno]' onclick='return checkdelete()'>SC</a>
      </div>
      </td>
      <td style='width:100px;'>
      <div class='three'>
      <a href='update.php?adno=$total[adno]&Tcno=$total[Tcno]&issue=$total[issue]&Monyear=$total[Monyear]&cleav=$total[cleav]&reg=$total[reg]&tot=$total[tot]&atte=$total[atte]'>update</a>
      </div>
      </td>
      <td style='width:100px;'>
      <div class='two'>
      <a href='delete.php?rn=$total[adno]' onclick='return checkdelete()'>Delete</a>
      </div>
      </td>


     </tr>
        </table>";

        }

    }
    
?>

<style>
 body{

 }
  
</style>
</body>
</html>