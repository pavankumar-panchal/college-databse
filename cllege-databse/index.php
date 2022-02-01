<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

   <link rel="stylesheet" href="style2.css">
   <link rel="preload" href="./scene.json" as="fetch">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="navbar-brand" href="#"><i class="fas fa-home"></i>&nbsp Home</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="addstd.php"><i class="fas fa-address-card"></i>&nbsp AddStudent</a>
        </li>
      <!--  <li class="nav-item">
          <a class="navbar-brand    " href="#" tabindex="">Certificate</a>
        </li>-->
        <li class="nav-item">
          <a class="navbar-brand    " href="list.php" tabindex=""><i class="fas fa-list-ul"></i>&nbsp Students-list</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id='container'>
			<canvas id="canvas3d"></canvas>
			
		</div>
		<script type="module">
			import { Application } from './runtime.js';
			const app = new Application();
			app.load('./scene.json');
		</script>


    <style>
        *{
    padding: 0;
    margin: 0;
}
body {
				width: 100%;
				height: 100%;
				margin: 0;
				position: fixed;
				background: rgba(0,0,0, 1);
			}
			canvas { width: 100%; height: 100%; outline: none; }
			#container { width: 100%; height: 100%; position: relative; }

    </style>
</body>
</html>