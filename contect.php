<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contect</title>
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lugrasimo&display=swap" rel="stylesheet">
</head>
<body>

    <!-- navbar open  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand font-weight-bolder" href="#">Akaram Technical</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Services.php">Services</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item active">
        <a class="nav-link" style="background-color:green;" href="contect.php">Contect</a>
      </li>
     
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>  

<section class="my-5">
  <div class="py-5">
     <h2 class="text-center">Contact Us</h2>
 </div>

 <div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
    <div class="form-group">
      <label for="">User Name</label>
      <input type="text" name="user" autocomplete="off" class="form-control">

    </div>
    <div class="form-group">
      <label for="">Email Id</label>
      <input type="text" name="email" autocomplete="off" class="form-control">

    </div>
    <div class="form-group">
      <label for="">Mobile</label>
      <input type="text" name="mobile" autocomplete="off" class="form-control">

    </div>
    <div class="form-group">
      <label for="">Comments</label>
     <textarea type="text" class="form-control"  name="comments" autocomplete="off"></textarea>
    </div>



<div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
 </div> 
</section>   
<footer>
  <p class="p-3 bg-dark text-white text-center" >@akaramtechnicalproduction</p>
 </footer>


 

    
      
    



<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



    