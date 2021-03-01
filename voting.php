
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>online voting portal</title>
  
  </head>
  <body >
    <h1 style= "text-align:center">vote for your future</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">vote</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signp.php">register</a>
        </li>
        <li><button type="button" class="btn btn-primary">
  Notifications <span class="badge bg-secondary">4</span>
</button></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            parties
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#bjp">bjp</a></li>
            <li><a class="dropdown-item" href="#congress">congress</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#aap">aap</a></li>
           
          </ul>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<br>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey</strong> wanna create own party?
  <h3>get surprise rewards<span class=" badge bg-danger">New</span></h3>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div><br>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/2800x900/?politics,politics" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>vote for your future</h5>
        <p>your future depends on your a single vote</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/2800x900/?election,election" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>vote for your future</h5>
        <p>Syour future depends on your a single vote</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/2800x900/?bjp,congress" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>vote for your future</h5>
        <p>your future depends on your a single vote</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<img src="bjp.jpeg" id ="image" style="margin-left:37%">
<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body" id="bjp">
    <h5 class="card-title">thanks for coming here</h5>
    <p class="card-text">your single vote will decide your children's future</p>
    
    <a href="bjp.php" class="btn btn-primary">vote for bjp</a>
  </div>
  <div class="card-footer text-muted">
    vote is live
  </div>
</div><br><br>
<img src="congress.jpeg" id ="image" style="margin-left:37%">

<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body" id="congress">
    <h5 class="card-title">thanks for coming here</h5>
    <p class="card-text">your single vote will decide your children's future</p>
    <a href="congress.php" class="btn btn-primary">vote for congress</a>
  </div>
  <div class="card-footer text-muted">
    vote is live
  </div>
</div><br><br>
<img src="aap.jpeg" id ="image" style="margin-left:37%">

<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body" id="aap">
    <h5 class="card-title">thanks for coming here</h5>
    <p class="card-text">your single vote will decide your children's future</p>
    <a href="aap.php" class="btn btn-primary">vote for aap</a>
  </div>
  <div class="card-footer text-muted">
    vote is live
  </div>
</div><br><br><br>
<p style="text-align:center">© 2021 All Rights Reserved.      your vote is valuable</a></p><br>
<p style="text-align:center">Developer: Avinash kumar</a></p>


</body>
</html>