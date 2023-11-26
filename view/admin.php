<?php
session_start();
if (empty($_SESSION['username'])) {
  header("location:loginpage.php");
}
$username = $_SESSION['username'];
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800&family=Poppins:wght@400;600;700&display=swap"
    rel="stylesheet" />
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
      padding: 100px 0;
      background: url(../img/love-bnw.png);
      background-color: #505050;
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

    .newdonate {
      position: absolute;
      top: -500%;
    }

    .newdonate.active {
      position: static;
      top: 0%;
    }

    .donor {
      position: absolute;
      top: -500%;
    }

    .donor.active {
      position: static;
      top: 0%;
    }

    .volunteer {
      position: absolute;
      top: -500%;
    }

    .volunteer.active {
      position: static;
      top: 0%;
    }
  </style>
</head>

<body>
  <?php
      echo '<script type ="text/JavaScript">';  
      echo 'alert("Selamat Datang Wahai Admin!:>3")';  
      echo '</script>';?>
  <!-- navbar -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark py-4" style="background: #fff">
    <div class="container">
      <a class="navbar-brand" href="../mainpage.php"><img src="../img/logo.png" alt="" style="width: 170px" /></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav nav-underline fs-6 fw-semibold ms-auto">
          <a class="nav-link text-dark mx-2" href="../mainpage.php#events">Events</a>
          <a class="nav-link text-dark mx-2" href="./register-volunteer.php">Become a Volunteer</a>
          <a class="nav-link text-dark mx-2" href="./volunteer-list.php">Volunteer</a>
          <a class="nav-link text-dark mx-2" href="./donor.php">Donor</a>
          <a class="text-light mx-2 py-2 px-3" href="./donate.php">Donate</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <?php echo "$username"?>
            </a>
            <ul class="dropdown-menu radius-0 py-0 mt-2">
              <li>
                <p class="dropdown-item fw-semibold mt-2">
                  Hello, <br /><?php echo "$username"?>
                </p>
              </li>
              <li>
                <a class="dropdown-item fw-semibold py-2 border-top" href="../session/logout.php">Logout</a>
              </li>
            </ul>
          </li>
        </div>
      </div>
    </div>
  </nav>
  <!-- hero -->
  <section class="hero text-center">
    <h1 class="fw-bold" style="font-size: 4rem; padding: 4.5rem 0">Admin</h1>
  </section>
  <div class="container fw-semibold">
    <p class="redbg p-2 text-light">HOME / ADMIN</p>
  </div>
  <!-- list -->
  <div class="container">
    <ul class="nav nav-underline justify-content-center">
      <li class="nav-item">
        <a id="req" class="req nav-link text-dark font-2 active" style="text-decoration: none" href="#">Request</a>
      </li>
      <li class="nav-item">
        <a id="don" class="don nav-link text-dark font-2" style="text-decoration: none" href="#">Donor</a>
      </li>
      <li class="nav-item">
        <a id="vol" class="vol nav-link text-dark font-2" style="text-decoration: none" href="#">Volunteer</a>
      </li>
    </ul>
  </div>
  <!-- new donate -->
  <div class="newdonate active">
    <div class="text-center mt-5" style="min-height: 100vh">
      <div class="container">
        <h3 class="font-2 fw-light">New Donate</h3>
        <table class="table table-hover">
          <tr class="row">
            <td class="col-1 fw-semibold">Id</td>
            <td class="col fw-semibold">Full Name</td>
            <td class="col fw-semibold">Email</td>
            <td class="col fw-semibold">Amount</td>
            <td class="col fw-semibold">VA Number</td>
            <td class="col-2 fw-semibold">Action</td>
          </tr>
          <tr class="row">
            <td class="col-1">1</td>
            <td class="col">Seftian Alung</td>
            <td class="col">example@goolge.com</td>
            <td class="col">100</td>
            <td class="col">1279813298</td>
            <td class="col-2">
              <button type="submit" class="btn btn-success py-0 radius-0 fw-semibold">
                CONFIRM
              </button>
              |
              <button type="submit" class="btn btn-danger py-0 radius-0 fw-semibold">
                DECLINE
              </button>
            </td>
          </tr>
          <tr class="row">
            <td class="col-1">2</td>
            <td class="col">bagas Duta</td>
            <td class="col">example@goolge.com</td>
            <td class="col">1000</td>
            <td class="col">189869132</td>
            <td class="col-2">
              <button type="submit" class="btn btn-success py-0 radius-0 fw-semibold">
                CONFIRM
              </button>
              |
              <button type="submit" class="btn btn-danger py-0 radius-0 fw-semibold">
                DECLINE
              </button>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div id="volunteer"></div>
  <!-- donor -->
  <div class="donor">
    <div class="text-center mt-5" style="min-height: 100vh">
      <div class="container">
        <h3 class="font-2 fw-light">Donor List</h3>
        <table class="table table-hover">
          <tr class="row">
            <td class="col-1 fw-semibold">Id</td>
            <td class="col fw-semibold">Full Name</td>
            <td class="col fw-semibold">Email</td>
            <td class="col fw-semibold">Amount</td>
            <td class="col-2 fw-semibold">Action</td>
          </tr>
          <tr class="row">
            <td class="col-1">1</td>
            <td class="col">Seftian Alung</td>
            <td class="col">example@goolge.com</td>
            <td class="col">100</td>
            <td class="col-2">
              <button type="submit" class="btn btn-success py-0 radius-0 fw-semibold">
                UPDATE
              </button>
              |
              <button type="submit" class="btn btn-danger py-0 radius-0 fw-semibold">
                DELETE
              </button>
            </td>
          </tr>
          <tr class="row">
            <td class="col-1">2</td>
            <td class="col">bagas Duta</td>
            <td class="col">example@goolge.com</td>
            <td class="col">1000</td>
            <td class="col-2">
              <button type="submit" class="btn btn-success py-0 radius-0 fw-semibold">
                UPDATE
              </button>
              |
              <button type="submit" class="btn btn-danger py-0 radius-0 fw-semibold">
                DELETE
              </button>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <!-- volunteer -->
  <div class="volunteer">
    <div class="text-center mt-5" style="min-height: 100vh">
      <div class="container">
        <h3 class="font-2 fw-light">Volunteer List</h3>
        <table class="table table-hover">
          <tr class="row">
            <td class="col-1 fw-semibold">Id</td>
            <td class="col fw-semibold">Full Name</td>
            <td class="col fw-semibold">Email</td>
            <td class="col fw-semibold">Phone Number</td>
            <td class="col fw-semibold">Occupation</td>
            <td class="col fw-semibold">Event</td>
            <td class="col-2 fw-semibold">Action</td>
          </tr>
          <tr class="row">
            <td class="col-1">1</td>
            <td class="col">Seftian Alung</td>
            <td class="col">example@goolge.com</td>
            <td class="col">0123456778</td>
            <td class="col">Student</td>
            <td class="col">Sport Charity Run</td>
            <td class="col-2">
              <button type="submit" class="btn btn-success py-0 radius-0 fw-semibold">
                UPDATE
              </button>
              |
              <button type="submit" class="btn btn-danger py-0 radius-0 fw-semibold">
                DELETE
              </button>
            </td>
          </tr>
          <tr class="row">
            <td class="col-1">2</td>
            <td class="col">bagas Duta</td>
            <td class="col">example@goolge.com</td>
            <td class="col">0123456778</td>
            <td class="col">Student</td>
            <td class="col">Sport Charity Run</td>
            <td class="col-2">
              <button type="submit" class="btn btn-success py-0 radius-0 fw-semibold">
                UPDATE
              </button>
              |
              <button type="submit" class="btn btn-danger py-0 radius-0 fw-semibold">
                DELETE
              </button>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <!-- footer -->
  <footer class="py-3 text-center align-items-center text-light" style="background: #424242">
    Copyright - 2023
  </footer>
  <script src="../script/script-admin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>