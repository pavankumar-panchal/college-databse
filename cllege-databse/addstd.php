<!doctype html>
<html lang='en'>

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Bootstrap CSS -->
    <!-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' -->
        <!-- integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'> -->
        <link rel="stylesheet" href="style2.css">
    <title>ADD STUDENT</title>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM'
        crossorigin='anonymous'></script>


</head>

<body>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p'
        crossorigin='anonymous'></script>

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
                        <a class='navbar-brand' href='index.php'>Home</a>
                    </li>
                 <!--   <li class='nav-item'>
                        <a class='navbar-brand' href='#'>TC</a>
                    </li>-->

                    <li class='nav-item'>
                        <a class='navbar-brand' href='list.php' tabindex=''>StudentList</a>
                    </li>
                </ul>
                <form class='d-flex'>
                    <input class='form-control me-2' type='search' placeholder='Search' aria-label='Search'>
                    <button class='btn btn-outline-success' type='submit'>Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- complete navbar -->

    <div class='form'>
        <form class='row g-3 needs-validation' action='strdata.php' method='post'>
            <div class='col-md-4'>
                <label for='validationCustom01' class='form-label'>Admission No.</label>
                <input type='text' class='form-control' id='validationCustom01' placeholder='Enter your admition no....'
                     name='adno' required>
                <div class='valid-feedback'>
                    Looks good!
                </div>
            </div>
            <div class='col-md-4'>
                <label for='validationCustom02' class='form-label'>Date of Admission</label>
                <input type='date' class='form-control' id='validationCustom02'  name='dno'required placeholder='DD/MM/yyyy'>
                <div class='valid-feedback'>
                    Looks good!
                </div>
            </div>
            <div class='col-md-4'>
                <label for='validationCustom01' class='form-label'> Name of the student</label>
                <input type='text' class='form-control' id='validationCustom01' placeholder='Name of the student'
                     name='sname'required>
                <div class='valid-feedback'>
                    Looks good!
                </div>
            </div>
            <div class='col-md-4'>
                <label for='validationCustom01' class='form-label'>Enter father name</label>
                <input type='text' class='form-control' id='validationCustom01' placeholder='Enter father name' 
                    name='fname'required>
                <div class='valid-feedback'>
                    Looks good!
                </div>
            </div>
            <div class='col-md-4'>
                <label for='validationCustom02' class='form-label'>Enter mother name</label>
                <input type='text' class='form-control' id='validationCustom02' placeholder='Mother name' 
                    name='mname'required>
                <div class='valid-feedback'>
                    Looks good!
                </div>
            </div>

            <div class='col-md-4'><br><br>
                <label for='validationCustom02' class='form-label'>SEX </label>
                <input class='form-check-input' type='radio' name='sex' id='inlineRadio1' value='MALE'>
                <label class='form-check-label' for='inlineRadio1'>M</label>
                <input class='form-check-input' type='radio' name='sex' id='inlineRadio1' value='FEMALE'>
                <label class='form-check-label' for='inlineRadio1'>F</label>
                <input class='form-check-input' type='radio' name='sex' id='inlineRadio1' value='OTHER'>
                <label class='form-check-label' for='inlineRadio1'>OT</label>
                <div class='valid-feedback'>
                    Looks good!
                </div>
            </div>
            <div class='col-md-4'>
                <label for='validationCustom01' class='form-label'> Religion</label>
                <input type='text' class='form-control' id='validationCustom01' placeholder='Religion..' 
                    name='rel'required>
                <div class='valid-feedback'>
                    Looks good!
                </div>
            </div>

            <div class='col-md-4'>
                <label for='validationCustom01' class='form-label'> Nationality</label>
                <input type='text' class='form-control' id='validationCustom01' placeholder='Nationality' 
                    name='nati'required>
                <div class='valid-feedback'>
                    Looks good!
                </div>
            </div>
            <div class='col-md-4'>
                <label for='validationCustom01' class='form-label'> Cast</label>
                <input type='text' class='form-control' id='validationCustom01' placeholder='cast.' 
                    name='cast'required>
                <div class='valid-feedback'>
                    Looks good!
                </div>
            </div>
            <div class='col-md-4'>
                <label for='validationCustom01' class='form-label'>Sub-cast</label>
                <input type='text' class='form-control' id='validationCustom01' placeholder='sub-cast' 
                    name='scast'required>
                <div class='valid-feedback'>
                    Looks good!
                </div>
            </div>
            <div class='col-md-4'>
                <label for='validationCustom01' class='form-label'> SC/ST</label>
                <input type='text' class='form-control' id='validationCustom01' placeholder='SC/ST' 
                    name='scst'required>
                <div class='valid-feedback'>
                    Looks good!
                </div>
            </div>
            <div class='col-md-4'>
                <label for='validationCustom01' class='form-label'>Date of birth</label>
                <input type='date' class='form-control' id='validationCustom01'  name='birth' required placeholder='DD/MM/YYYY'>
                <div class='valid-feedback'>
                    Looks good!
                </div>
            </div>
            <div class='col-md-4'>
                <label for='validationCustom01' class='form-label'> Date of birth in words</label>
                <input type='text' class='form-control' id='validationCustom01' placeholder='Date of birth in words..'
                     name='dbirth'required>
                <div class='valid-feedback'>
                    Looks good!
                </div>
            </div>
            <div class='col-md-4'>
                <label for='validationCustom01' class='form-label'> place of birth</label>
                <input type='text' class='form-control' id='validationCustom01' placeholder='place of birth' 
                    name='pbirth'required>
                <div class='valid-feedback'>
                    Looks good!
                </div>
            </div>
            <div class='mb-3'>
                <label for='formGroupExampleInput' class='form-label'>ENTER TC-NO</label>
                <input type='text' class='form-control' id='formGroupExampleInput' placeholder='Enter TC-NO'
                    name='Tcno'required>
            </div>
            <div class='mb-3'>
                <label for='formGroupExampleInput2' class='form-label'>First language</label>
                <input type='text' class='form-control' id='formGroupExampleInput2' placeholder='Enter the class'
                    name='firthl'required>
            </div>
            <div class='mb-3'>
                <label for='formGroupExampleInput2' class='form-label'>Second language</label>
                <input type='text' class='form-control' id='formGroupExampleInput2' placeholder='Enter the class'
                    name='secondl'required>
            </div>
            <div class='mb-3'>
                <label for='formGroupExampleInput2' class='one'>Issue date</label>
                <input type='date' class='form-control public one' id='formGroupExampleInput2'
                    placeholder='DD/MM/YYYY' name='issue'required readonly value='update'>
            </div>
            <div class='mb-3'>
                <label for='formGroupExampleInput2' class='two'>Month and year</label>
                <input type='text' class='form-control public two' id='formGroupExampleInput2'
                    placeholder='Enter the month anad year' name='Monyear'required>
            </div>
            <div class='mb-3'>
                <label for='formGroupExampleInput' class='form-label f'>Class in which the student was studying at the
                    time of leaving.</label>
                <input type='text' class='form-control f' id='formGroupExampleInput' placeholder='Medium of instruction'
                    name='cleav'required readonly value='update'>
            </div>  
            <div class='col-md-4 '>
                <label for='validationCustom01' class='form-label reg'>Enter the Register number.</label><br><br>
                <input type='number' class='form-control reg' id='validationCustom01' placeholder='Enter the register number.'
                     name='reg' required>
                <div class='valid-feedback'>
                    Looks good!
                </div>
            </div>
            <div class='col-md-4 '>
                <label for='validationCustom02' class='form-label total'>Total number of classes conducted</label>
                <input type='number' class='form-control total' id='validationCustom02'  name='tot'required placeholder='Enter the total number of calsses conducted' readonly value='update'>
                <div class='valid-feedback'>
                    Looks good!
                </div>
            </div>
            <div class='col-md-4 '>
                <label for='validationCustom01' class='form-label no'>Total number of classes attended by student</label>
                <input type='number' class='form-control no' id='validationCustom01' placeholder='Name of the student'
                     name='atte'required readonly value='update'>
                <div class='valid-feedback'>
                    Looks good!
                </div>
            </div>
            <div class='col-12'>
                <button class='btn btn-primary b' type='submit' name='submit'>Submit form</button>
            </div>
        </form>
    </div>

    <style>
        .reg{
            position:relative;
            bottom:100px;
        }
        .total{
            position:relative;
            bottom:100px;
        }
        .no{
            position:relative;
            bottom:100px;
        }
        .b {
            margin-bottom: 200px;
            margin-left: 300px;
        }

        body {
            
            color:white;
            display: block;
            background: rgb(0,0,0);
background: radial-gradient(circle, rgba(0,0,0,0.9976365546218487) 0%, rgba(39,45,78,1) 95%);
        }

        .mb-3 {
            width: 100%;
            margin-left: ;
        }

        .form-label {
            font-size: 20px;
            font-style: bold;
        }

        .public {
            width: 45%;

        }

        .one {
            position: relative;
            left: 50%;
        }

        .two {
            position: relative;
            bottom: 90px;

        }

        .f {
            position: relative;
            bottom: 90px;
        }

        .A {
            position: relative;
            bottom: 178px;
        }

        .s {
            position: relative;
            bottom: 90px;
        }

        .form {
            width: 50%;
            margin-left: 25%;
            position: relative;
            margin-top: 50px;

        }
        input{
          
        }
    </style>


</body>

</html>