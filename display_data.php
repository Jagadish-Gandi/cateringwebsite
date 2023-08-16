<!DOCTYPE html>
<html lang="en">
<head>
  <title>www.catering.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lobster&family=Rajdhani&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <style>
    #myName{
    letter-spacing:4px;
    color: #140202 ;
    font-weight:bold;
    border-top: 2px solid black ;
    border-bottom: 2px solid black;
    width: 75px;
    }
.nav-link{
    color: green;
    font-weight: 900;
    border:4px solid white;
    margin-left: 5px;    
}
.nav-link:hover{
    background-color:black;
    color:white;
    font-weight: 900;
    border:4px solid black;
    text-decoration:;
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
  }
  span:hover{
    background-color: black;
    color:white;
  }
i:hover{
  color: red;
  font-size: larger;
}

#button:hover{
  background-color: green;
}
*{
  font-size: 20px;
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
      <a class="navbar-brand" href="#" id="myName" title="please logout">Jagadish</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav me-auto"></ul> <!-- Use 'me-auto' class to push links to the right -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <form action="secure.php" method="post">
                <button class="nav-link"><span id="logout" class="material-symbols-outlined">
logout
</span></button>
            </form>
          </li>   
        </ul>
      </div>
    </div>
  </nav>
</section>
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
<?php
$localhost = "localhost:3306";
$username = "root";
$password = "";
$database = "catering";

$conn = mysqli_connect($localhost, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare and execute the SQL query
$sql = "SELECT id, username, people, date_of_event, mobile, message FROM client_details";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<div class="table-responsive">'; // Responsive container

    // Output table
    echo '<table class="table table-bordered">';
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Username</th>";
    echo "<th>People</th>";
    echo "<th>Date of Event</th>";
    echo "<th>Mobile</th>";
    echo "<th>Message</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Output table rows with data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['people'] . "</td>";
        echo "<td>" . $row['date_of_event'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        echo "<td>" . $row['message'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo '</div>'; // Close responsive container
} else {
    echo '<div style="display: flex; justify-content: center;">';
    echo "No data found.";
    echo '</div>';
}

mysqli_close($conn);
?>

