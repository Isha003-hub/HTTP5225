<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Boostrap   -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-5">All Schools</h1>
      </div>
    </div>
    <div class="row">
      <?php
        $connect = mysqli_connect(
        'localhost', //URL
        'root', //Username
        '', ////Your password here, either root or empty
        'school_test' // your database name, check your PHP myAdmin 
        );
        if(!$connect){
          echo 'Error Code:' . mysqli_connect_errno();
          echo 'Error Message: ' . mysqli_connect_error();
        exit;
        }
      ?>

      <?php
       include('reusables/connection.php');
        $query = 'SELECT * FROM schools';
        $schools = mysqli_query($connect, $query);
        

        foreach($schools as $school){
          echo '<div class="col-md-4">
          <div class="card mb-4" style="">
          <div class="card-body">
            <h5 class="card-title">' . $school['Board'] . '</h5>
            <span class="badge bg-primary">' . $school['School Type'] .'</span>
            <span class="badge bg-success">' . $school['Language'] .'</span>
          </div>
        </div>
          </div>';
        }
      ?>
    </div>

</body>
</html>