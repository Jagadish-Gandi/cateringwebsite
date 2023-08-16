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
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<section id="navbar">
  <nav class="navbar navbar-expand-sm p-2" >
    <div class="container-fluid">
      <a class="navbar-brand" href="#" id="myName" title="created by">Jagadish</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav me-auto"></ul> <!-- Use 'me-auto' class to push links to the right -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sign_in.php">Admin</a>
          </li>    
        </ul>
      </div>
    </div>
  </nav>
</section>

<section id="header" >
    <div class="">
        <img class="img-fluid" id="myImage" src="https://images.unsplash.com/photo-1571091655789-405eb7a3a3a8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2072&q=80" onload="getImageWidth()">
    </div>
    <h1 id="Neighbourfoodie"></h1>
</section>
<section class="container pt-5 mt-5" id="about">
    <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <h2 class="" align="center">About</h2>
        <h3 align="center" class="p-4">Our Catering Services</h3>
        <p class="pt-1" id="about_info">Welcome to Foodie limited, your premier choice for exceptional catering services. With a passion for food and a commitment to excellence, we strive to create memorable culinary experiences for every event.</p>
        <p id="about_info">At Foodie limited, we understand the importance of good food in making your event truly special. Whether it's an intimate gathering or a grand celebration, our team of talented chefs and dedicated staff is here to cater to your unique tastes and preferences.</p>
        <p id="about_info">We take pride in using the finest and freshest ingredients to create flavorful and visually appealing dishes that will delight your guests. From elegant plated dinners to lavish buffets and creative food stations, we offer a diverse range of menu options to suit any occasion.</p>
      </div>
      <div class="col-lg-4 pt-5 p-5 mt-5">
        <img src="https://img.freepik.com/premium-photo/fast-food-assortment-junk-food-concept-unhealthy-food-heart-teeth-skin-figure_79830-3080.jpg?w=360" alt="About Image" id="about_image">
      </div>
    </div>
  </div>
</section>

<section id="menu">
  <h2 align="center" class="pt-5">Menu</h2>
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="https://img.freepik.com/free-photo/variety-bread-basket-wheat-stone-surface_114579-40717.jpg?w=1060&t=st=1688141083~exp=1688141683~hmac=8b8f9673df465e414d26d9a499cc6714d5be594eb85b481533f7f70aaaea7a49" target="_blank">
            <img src="https://img.freepik.com/free-photo/variety-bread-basket-wheat-stone-surface_114579-40717.jpg?w=1060&t=st=1688141083~exp=1688141683~hmac=8b8f9673df465e414d26d9a499cc6714d5be594eb85b481533f7f70aaaea7a49" alt="Lights" style="width:100%">
            <div class="caption">
              <p>Bread Basket</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="https://img.freepik.com/free-photo/waffle_95678-13.jpg?size=626&ext=jpg&ga=GA1.1.167709802.1684055545&semt=ais" target="_blank">
            <img src="https://img.freepik.com/free-photo/waffle_95678-13.jpg?size=626&ext=jpg&ga=GA1.1.167709802.1684055545&semt=ais" alt="Nature" style="width:100%">
            <div class="caption">
              <p>Belgian Waffle</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="https://img.freepik.com/free-photo/close-up-healthy-breakfast-table_23-2148407120.jpg?size=626&ext=jpg&ga=GA1.1.167709802.1684055545&semt=ais" target="_blank">
            <img src="https://img.freepik.com/free-photo/close-up-healthy-breakfast-table_23-2148407120.jpg?size=626&ext=jpg&ga=GA1.1.167709802.1684055545&semt=ais" alt="Fjords" style="width:100%">
            <div class="caption">
              <p>Honey Almond Granola With Fruits</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="https://img.freepik.com/free-photo/front-view-yummy-meat-cheeseburger-with-french-fries-dark-background-dinner-burgers-snack-fast-food-sandwich-salad-dish-toast_140725-159215.jpg?size=626&ext=jpg&ga=GA1.1.167709802.1684055545&semt=sph" target="_blank">
            <img src="https://img.freepik.com/free-photo/front-view-yummy-meat-cheeseburger-with-french-fries-dark-background-dinner-burgers-snack-fast-food-sandwich-salad-dish-toast_140725-159215.jpg?size=626&ext=jpg&ga=GA1.1.167709802.1684055545&semt=sph" alt="Lights" style="width:100%">
            <div class="caption">
              <p>BBQ Burger</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="https://img.freepik.com/premium-photo/french-fries-with-ketchup-wood-table_23-2148272961.jpg?size=626&ext=jpg&ga=GA1.1.167709802.1684055545&semt=ais" target="_blank">
            <img src="https://img.freepik.com/premium-photo/french-fries-with-ketchup-wood-table_23-2148272961.jpg?size=626&ext=jpg&ga=GA1.1.167709802.1684055545&semt=ais" alt="Nature" style="width:100%">
            <div class="caption">
              <p>French Friees</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="https://img.freepik.com/premium-photo/stack-pancakes-with-blueberries-blueberries-top_896782-5195.jpg?size=626&ext=jpg&ga=GA1.1.167709802.1684055545&semt=ais" target="_blank">
            <img src="https://img.freepik.com/premium-photo/stack-pancakes-with-blueberries-blueberries-top_896782-5195.jpg?size=626&ext=jpg&ga=GA1.1.167709802.1684055545&semt=ais" alt="Fjords" style="width:100%">
            <div class="caption">
              <p>Blue Berry Pancakes</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<a href="view_more.php" target="_blank" align="center" class="btn btn-info btn-lg text-white" id="view_more">View More</a>

<section id="contact" class="container">
  <h2 align="center">Contact</h2>
  <p class="pt-5">We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria off them all,both look and taste. Do not hesitate to contact us. </p>
  <p id="">You can aslo contact us by phone: 8074702065 or email:Catering_food@gmail.com, or you can send us a message here: we will contact you.</p>
  <address>Catering,Av reddy Nagar,Danalakshmi puram,Nellore-524002</address>
  <div class="container mt-5">
    <h3 align="center">Drop your details</h3>
    <form action="config.php" class="pt-3" method="post">
      <div class="mb-3 mt-4">
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" onsubmit="return validateForm();">
      </div>
      <div class="mb-3 mt-4">
        <input type="number" class="form-control" id="people" placeholder="How many people" name="people" required>
      </div>
      <div class="mb-3 mt-4">
        <input type="datetime-local" class="form-control" id="date_and_time" placeholder="Date & Time" name="date_and_time" required>
      </div>
      <div class="mb-3 mt-4">
        <input type="number" class="form-control" id="mobile" placeholder="Mobile Number" name="mobile" required>
      </div>
      <div class="mb-3 mt-4">
        <textarea type="text" class="form-control" id="message" placeholder="Message/special requirements" name="message"></textarea>
      </div>
      <button type="submit"  class="btn btn-primary m-3" id="button">Send Message</button>
    </form>    
  </div>
</section>

<footer class="p-3">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <p>Contact Me:<b>Jagadish</p>
        <a href="tel:8074702065"><i class="fas fa-phone"></i></a>
        <a href="mailto:gandi.jagadishgjb@gmail.com"><i class="fas fa-envelope"></i></a>
        <p>&copy; 2023 Your Company. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<script src=""><script>

</body>
</html>
