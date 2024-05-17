<?php
include 'connect.php';
if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $comments = $_POST['comments'];
  $city = $_POST['city'];
  $zip = $_POST['zip'];
  $state = $_POST['state'];


  if (isset($_POST['checkbox'])) {
    $is_subscribed = 1;
  } else {
    $is_subscribed = 0;
  }

  $sql = "SELECT * FROM contact WHERE email='" . $email . "' ";
  $result = mysqli_query($con, $sql);
  // if email already exists
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Email Already Exists!')</script>";
  }
  // if not exists
  else {
    $sql = "insert into `contact`(name,email,address,comments,city,zip,state,is_subscribed)values('$name','$email','$address','$comments','$city','$zip','$state','$is_subscribed')";
    $result = mysqli_query($con, $sql);
    if ($result) {
      echo "<script>alert('Thankyou! We have Received Your Message')</script>";
    } else {
      echo "<script>alert('Error')</script>";
    }
  }




}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="text-warning">Build</span>Con</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#About">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#Services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#Portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#Team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#Contact">Contact</a>
          </li>
      </div>
    </div>
  </nav>
  <!--  -->
  <!-- Crousal -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://foyr.com/learn/wp-content/uploads/2022/06/types-of-house-styles-and-homes.jpg">
        <div class="carousel-caption">
          <h5>Your dream House</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur fugit quis vel illo
            error possimus consequuntur porro iure eveniet illum.</p>
          <a href="#" class="btn btn-warning mt-3">Learn More</a>
        </div>
      </div>
      <div class="carousel-item">
        <img
          src="https://www.bhg.com/thmb/H9VV9JNnKl-H1faFXnPlQfNprYw=/1799x0/filters:no_upscale():strip_icc()/white-modern-house-curved-patio-archway-c0a4a3b3-aa51b24d14d0464ea15d36e05aa85ac9.jpg">
        <div class="carousel-caption">
          <h5>Always dedicated </h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur fugit quis vel illo
            error possimus consequuntur porro iure eveniet illum.</p>
          <p<a href="#" class="btn btn-warning mt-3">Learn More</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img
          src="https://www.bhg.com/thmb/H9VV9JNnKl-H1faFXnPlQfNprYw=/1799x0/filters:no_upscale():strip_icc()/white-modern-house-curved-patio-archway-c0a4a3b3-aa51b24d14d0464ea15d36e05aa85ac9.jpg"
          class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>True Constructor</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur fugit quis vel illo
            error possimus consequuntur porro iure eveniet illum.</p>
          <p<a href="#" class="btn btn-warning mt-3">Learn More</a></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--  -->
  <!-- about section -->
  <section id="about" class="about section-padding animate__animated animate__fadeInLeft">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
          <div class="about-img">
            <img src="https://images.surferseo.art/fdb08e2e-5d39-402c-ad0c-8a3293301d9e.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
          <div class="about-text">
            <h2>We Provide Best Quality <br> Services Ever</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore nulla quibusdam optio animi
              sapiente? Dolore magni fugit, eum odio, mollitia et commodi nam quod voluptatibus laborum recusandae
              maiores voluptatum quidem error. Sed iusto quidem voluptatibus accusamus perspiciatis aut quisquam,
              non inventore soluta totam! Ea maiores voluptatum quidem error. Sed iusto quidem voluptatibus accusamus
              perspiciatis aut quisquam,
              non inventore soluta totam! Ea maiores voluptatum quidem error. Sed iusto quidem voluptatibus accusamus
              perspiciatis aut quisquam,
              non inventore soluta totam! Eamaiores voluptatum quidem error. Sed iusto quidem voluptatibus accusamus
              perspiciatis aut quisquam,
              non inventore soluta totam! Ea.</p>
            <a href="#" class="btn btn-warning">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  -->

  <!-- services section -->
  <section id="services" class="services section-padding animate__animated animate__fadeInright">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Our services</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
              Est blanditiis distinctio atque tempora dignissimos error!</p>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        $sql = "select *from `services`";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $title = $row['title'];
            $description = $row['description'];
            $status = $row['status'];

            ?>

            <div class="col-md-4 mt-3">
              <div class="card text-white text-center bg-dark pb-2">
                <div class="card-body">
                  <i class="bi bi-snow2"></i>
                  <h3 class="card-title"><?php echo $title; ?></h3>
                  <p><?php echo $description; ?></p>
                  <button class="btn btn-warning text-dark">Read More</button>
                </div>
              </div>
            </div>
            <?php
          }
        }
        ?>
      </div>

    </div>
  </section>


  <!--Portfolio section  -->
  <section id="Portfolio" class="portfolio section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Our Project</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Assumenda commodi, nihil iste laboriosam ipsum ducimus expedita.<br>
              Dolorem vero molestias reprehenderit voluptatem ullam
              perferendis ad sit tempore, sapiente atque harum beatae.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4">
                <img
                  src="https://content.jdmagicbox.com/comp/karimnagar/n8/9999px878.x878.130808170055.v1n8/catalogue/mikhul-projects-boiwada-karimnagar-commercial-builders-qkmk9lu3ij.jpg"
                  alt="" class="img-fluid">
              </div>
              <h3 class="card-title">Building Make</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eveniet dicta assumenda voluptatem reprehenderit accusamus labore quia
                eaque iste distinctio, dolore nulla, odio dolores pariatur at beatae magnam</p>
              <button class="btn bg-warning text-dark">Learn More</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4">
                <img
                  src="https://content.jdmagicbox.com/comp/karimnagar/n8/9999px878.x878.130808170055.v1n8/catalogue/mikhul-projects-boiwada-karimnagar-commercial-builders-qkmk9lu3ij.jpg"
                  alt="" class="img-fluid">
              </div>
              <h3 class="card-title">Building Make</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eveniet dicta assumenda voluptatem reprehenderit accusamus labore quia
                eaque iste distinctio, dolore nulla, odio dolores pariatur at beatae magnam</p>
              <button class="btn bg-warning text-dark">Learn More</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4">
                <img
                  src="https://content.jdmagicbox.com/comp/karimnagar/n8/9999px878.x878.130808170055.v1n8/catalogue/mikhul-projects-boiwada-karimnagar-commercial-builders-qkmk9lu3ij.jpg"
                  alt="" class="img-fluid">
              </div>
              <h3 class="card-title">Building Make</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eveniet dicta assumenda voluptatem reprehenderit accusamus labore quia
                eaque iste distinctio, dolore nulla, odio dolores pariatur at beatae magnam</p>
              <button class="btn bg-warning text-dark">Learn More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  -->

  <!-- team -->
  <section id="team" class="team section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Our Team</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis,<br>
              quod dignissimos adipisicing elit. Facilis,adipisicing elit.<br>
              voluptate assumenda aut quisquam sed accusantium nihil ipsa!</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card text-center">
            <div class="card-body">
              <img
                src="https://www.citrix.com/blogs/wp-content/uploads/2018/03/slack_compressed-e1521621363404-360x360.jpg"
                alt="" class="img-fluid rounded-circle">
              <h3 class="card-title py-2">Jack Wilson</h3>
              <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                recusandae, dicta quo commodi culpa voluptatum labore ab voluptate accusamus ea? !</p>
              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkdin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card text-center">
            <div class="card-body">
              <img
                src="https://www.citrix.com/blogs/wp-content/uploads/2018/03/slack_compressed-e1521621363404-360x360.jpg"
                alt="" class="img-fluid rounded-circle">
              <h3 class="card-title py-2">Jack Wilson</h3>
              <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                recusandae, dicta quo commodi culpa voluptatum labore ab voluptate accusamus ea? !</p>
              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkdin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card text-center">
            <div class="card-body">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7Mkq_tnZZrk2dzXPfaIJZ9JPHd7GRl7bosApR7E28NBLdiUbsOOM_UFLHqyHRC7hG35Q&usqp=CAU"
                alt="" class="img-fluid rounded-circle">
              <h3 class="card-title py-2">Jack Wilson</h3>
              <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                recusandae, dicta quo commodi culpa voluptatum labore ab voluptate accusamus ea? !</p>

              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkdin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card text-center">
            <div class="card-body">
              <img src="https://i.pinimg.com/736x/a4/2a/94/a42a94b71efd8fa64e4be5996ab990a7.jpg" alt=""
                class="img-fluid rounded-circle">
              <h3 class="card-title py-2">Jack Wilson</h3>
              <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                recusandae, dicta quo commodi culpa voluptatum labore ab voluptate accusamus ea? !</p>
              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkdin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!--  -->
  <!-- contact us -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <h2>Contact Us</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">

      <div class="col-md-8">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d55107.349833588596!2d77.99090628699338!3d30.316562113479044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x390929c356c888af%3A0x4c3562c032518799!2sDehradun%2C%20Uttarakhand!3m2!1d30.316494499999997!2d78.03219179999999!5e0!3m2!1sen!2sin!4v1714809015994!5m2!1sen!2sin"
          width="800" height="550" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="col-md-4">
        <form class="row g-3" method="POST" onsubmit="return validateForm()">
          <div class="col-md-6">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name" id="name"><br>
            <span class="formerror name-error"></span>
          </div>
          <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="Enter your email id" name="email">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Enter your address"
              name="address"><br>
            <span class="formerror"></span>
          </div>
          <div class="col-12">
            <label class="form-label">Comments</label>
            <textarea class="form-control" placeholder="Leave a comment here" name="comments"></textarea><br>
            <span class="formerror"></span>
          </div>
          <div class="row">
            <div class="col-md-5">
              <label class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity" placeholder="Enter your city" name="city"><br>
              <span class="formerror"></span>
            </div>
            <div class="col-md-4">
              <label class="form-label">State</label>
              <select id="inputState" class="form-select" name="state">
                <option selected>Choose...</option>
                <option>Uttarakhand</option>
                <option>Uttarakhand</option>
                <option>Uttarakhand</option>
                <option>Uttarakhand</option>
                <option>Uttarakhand</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Zip</label>
              <input type="number" class="form-control" placeholder="Enter Zip code" name="zip">
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="checkbox">
                <label class="form-check-label">
                  Check me out
                </label>
              </div>
            </div>
          </div>
          <div class="row">
      <div class="col-12">
        <button type="submit" name="submit" class="sbutton">Submit</button>
      </div>
    </div>
      </div>
    </div>
    
    </form>

  </div>

  <section class="container my-5 bg-light w-50 text-dark py-3">

    <div class="footer">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom">
        <div class="container">
          <p></b>Address:<br>
            Dehradun Aman vihar<br>
            Zip code -248001<br>
            Contact - 123456767
          </p>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#Home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#About">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#Services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#Portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#Team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#Contact">Contact</a>
              </li>
          </div>
        </div>
      </nav>

    </div>
    <!-- javascript -->
    <script>
      function validateForm() {
        var name = document.getElementById('name').value;
        var nameError = document.querySelector('.name-error');

        if (name.length <= 2) {
          nameError.innerText = 'Name is not valid';
          return false;
        }
        else {
          nameError.innerText = '';
          return true;
        }

      };
      function myFunction() {
        alert("Hello! Data successfully submited!");
      }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--  -->

</html>