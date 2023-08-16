<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lobster&family=Rajdhani&display=swap" rel="stylesheet">
  <style>
      #myName{
    letter-spacing:4px;
    color: #140202 ;
    font-weight:bold;
    border-top: 2px solid black ;
    border-bottom: 2px solid black;
    width: 75px;
    }


#navbar{
       box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
       position:sticky;
       top: 0;
       background-color: white;

}
@media only screen and (max-width: 700px) {
    .responsive {
      width: 49.99999%;
      margin: 6px 0;
    }
  }
  
  @media only screen and (max-width: 500px) {
    .responsive {
      width: 100%;
    }
  }
  footer{
    height: ;
    font-weight:;
    padding: 50px;
    background-color: white;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
    margin-top: 20px;
    padding:10px 10px 10px 10px;
    margin: bottom;
    background-color:forestgreen;
    color:whitesmoke
  }
  span{
    color: black;
    font-size: ;
  }
  .nav-link:hover{
    background-color: black;
    color: whitesmoke;
    border: 2px solid black;
  }
  span:hover{
    color: whitesmoke;
  }
i:hover{
  color: maroon;
  font-size: larger;
}

#button:hover{
  background-color: green;
}
*{
  font-size: 20px;
  background-color: ;
}
#jag{
  color: white;
}
</style>
</head>
<body>
<section id="navbar">
  <nav class="navbar navbar-expand-sm p-2" >
    <div class="container-fluid">
      <a class="navbar-brand" href="" id="myName">Jagadish</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav me-auto"></ul> <!-- Use 'me-auto' class to push links to the right -->
        <ul class="navbar-nav">    
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <form action="index.php" method="post">
                <button class="nav-link" title="admin"><span class="material-symbols-outlined">
home
</span></button>
            </form>
          </li>   
        </ul>
      </div>
    </div>
  </nav>
</section>

<div class="container text-center pt-5">
  <h3>It is only for admin</h3>
  <form action="check_data.php" method="post">
    <div class="input-group pt-3">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email" type="email" class="form-control p-3" name="email" placeholder="Email" required>
    </div>
    <div class="input-group pt-4">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control p-3" name="password" placeholder="Password" required>
    </div>
    <br>
    <button type="submit" class="btn btn-primary m-3 p-3" id="button" action="check_data.php">Sign in</button>

  </form>    
</div>
<footer class="p-3 fixed-bottom">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <p>Contact Me:<span id="jag">Jagadish</span></p>
        <a href="tel:8074702065"><i class="fas fa-phone"></i></a>
        <a href="mailto:gandi.jagadishgjb@gmail.com"><i class="fas fa-envelope"></i></a>
        <p>&copy; 2023 Your Company. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
</body>

</html>


