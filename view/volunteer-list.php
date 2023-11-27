<?php
session_start();
if (empty($_SESSION['username'])) {
  header("location:../loginpage.php?pesan=belum_login");
}
$username = $_SESSION['username'];
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Volunteer List</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800&family=Poppins:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Poppins", serif;
      }
      section.hero {
        font-family: "Playfair Display", serif;
        background-color: #f2f0ec;
      }
      .container.fw-semibold .redbg {
        position: absolute;
        margin-top: -43px;
        background-color: #e36955;
        font-size: 0.8rem;
      }

      section.list {
        min-height: 100vh;
      }

      .radius-0 {
        border-radius: 0;
      }

      .text-light.mx-2.py-2.px-3 {
        text-decoration: none;
        background: #e36955;
      }

      .text-light.mx-2.py-2.px-3:hover {
        background: #da270c;
        transition: 0.5s;
      }

      section.volunteer {
        padding: 130px 0;
        background: url(../img/love-2.png);
        background-color: #f1ae44;
        background-repeat: no-repeat;
        background-position: center;
      }

      .font-1 {
        font-family: "fairplay Display", serif;
        font-weight: bold;
      }

      .font-2 {
        font-family: "Poppins", serif;
        font-weight: bold;
      }

      .btn.radius-0.text-light.mt-4.py-3.px-4.font-2 {
        background-color: #e36955;
      }

      a.btn.radius-0.text-light.mt-4.py-3.px-4.font-2:hover {
        background: #da270c;
        transition: 0.5s;
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav
      class="navbar sticky-top navbar-expand-lg navbar-dark py-4"
      style="background: #fff"
    >
      <div class="container">
        <a class="navbar-brand" href="../mainpage.php"
          ><img src="../img/logo.png" alt="" style="width: 170px"
        /></a>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav nav-underline fs-6 fw-semibold ms-auto">
          <?php
            if($username == "admin"){?>
              <a class="nav-link text-dark mx-2" href="admin.php"
              >Admin</a>  
            <?php
            }else{?>
              <a class="nav-link text-dark mx-2" href="../mainpage.php#events"
                >Events</a>
            <?php } ?>
            <a class="nav-link text-dark mx-2" href="./register-volunteer.php"
              >Become a Volunteer</a
            >
            <a
              class="nav-link active text-dark mx-2"
              href="./volunteer-list.php"
              >Volunteer</a
            >
            <a class="nav-link text-dark mx-2" href="./donor.php">Donor</a>
            <a class="text-light mx-2 py-2 px-3" href="./donate.php">Donate</a>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-dark"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <?php echo "$username" ?>
              </a>
              <ul class="dropdown-menu radius-0 py-0 mt-2">
                <li>
                  <p class="dropdown-item fw-semibold mt-2">
                    Hello, <br /><?php echo "$username" ?>
                  </p>
                </li>
                <li>
                  <a class="dropdown-item fw-semibold py-2 border-top" href="../session/logout.php"
                    >Logout</a
                  >
                </li>
              </ul>
            </li>
          </div>
        </div>
      </div>
    </nav>
    <!-- hero -->
    <section class="hero text-center">
      <h1 class="fw-bold" style="font-size: 4rem; padding: 4.5rem 0">
        Volunteer
      </h1>
    </section>
    <div class="container fw-semibold">
      <p class="redbg p-2 text-light">HOME / VOLUNTEER</p>
    </div>
    <!-- list -->
    <section class="list pb-5">
      <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-5 g-4">
          <?php
          include '../session/koneksi.php';
          $query2=mysqli_query($konek,"select * from volunteer");
          while($data2=mysqli_fetch_array($query2)){ ?>
          <div class="col">
            <div class="card radius-0">
              <img
                src="../img/profilepicture.webp"
                class="card-img-top radius-0"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title"><?php echo $data2['name_volunteer'] ?></h5>
                <p class="card-text">Event: <?php echo $data2['event'] ?></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <!-- become a volunteer -->
    <section class="volunteer">
      <div class="container text-center">
        <h1 class="font-1 text-light" style="font-size: 4rem">
          Become a Volunteer
        </h1>
        <h6 class="font-2 text-light fw-light">
          JOIN YOUR HAND WITH US FOR A BETTER LIFE AND FUTURE
        </h6>
        <a
          href="./register-volunteer.html"
          type="button"
          class="btn radius-0 text-light mt-4 py-3 px-4 font-2"
          >JOIN US NOW</a
        >
      </div>
    </section>
    <!-- footer -->
    <footer
      class="py-3 text-center align-items-center text-light"
      style="background: #424242"
    >
      Copyright - 2023
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
