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
    <title>Update Data</title>
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

      section.form-volunteer div h1 {
        font-family: "Fairplay Display", serif;
        font-size: 3.5rem;
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

      .font-1 {
        font-family: "fairplay Display", serif;
        font-weight: bold;
      }

      .font-2 {
        font-family: "Poppins", serif;
        font-weight: bold;
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
            <a class="nav-link text-dark mx-2" href="./volunteer-list.php"
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
                    Hello, <br /> <?php echo "$username" ?>
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
      <h1 class="fw-bold" style="font-size: 4rem; padding: 4.5rem 0">Update</h1>
    </section>
    <div class="container fw-semibold">
      <p class="redbg p-2 text-light">HOME / UPDATE</p>
    </div>
    <!-- form -->
    <section class="form-volunteer" style="min-height: 100vh">
      <div class="container mt-5">
        <h1 class="fw-bold text-center">
            Make sure to update the data  <br> carefully, accurate and up to date.
        </h1>
        <h6 class="text-center">UPDATE DATA NOW</h6>
      </div>
      <?php
        include '../session/koneksi.php';
        $id = $_GET['id'];
        $query=mysqli_query($konek,"select * from donatur where no_id = '$id'");
        $data=mysqli_fetch_array($query);
      ?>
      <div class="container mt-5 w-50">
          <div class="">
            <form action="../session/update_data.php" method="POST">
            <input type="hidden" name="no_id" value="<?php echo $data['no_id']; ?>">
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control form-control-lg w-100 radius-0"
                  placeholder="Full Name *"
                  style="height: 12%"
                  name="name"
                  value="<?php echo $data['name'] ?>"
                  required
                />
              </div>
              <div class="mb-3">
                <input
                  type="email"
                  class="form-control form-control-lg w-100 radius-0"
                  placeholder="Email Address *"
                  style="height: 12%"
                  name="email"
                  value="<?php echo $data['donatur_email'] ?>"
                  required
                />
              </div>
              <div class="mb-3 d-flex justify-content-between">
                <input
                  type="radio"
                  class="btn-check"
                  name="options"
                  id="option-1"
                  autocomplete="off"
                />
                <label
                  class="btn btn-outline-danger radius-0 py-3 px-4"
                  for="option-1"
                  >$10</label
                >
                <input
                  type="radio"
                  class="btn-check"
                  name="options"
                  id="option-2"
                  autocomplete="off"
                />
                <label
                  class="btn btn-outline-danger radius-0 py-3 px-4"
                  for="option-2"
                  >$20</label
                >
                <input
                  type="radio"
                  class="btn-check"
                  name="options"
                  id="option-3"
                  autocomplete="off"
                />
                <label
                  class="btn btn-outline-danger radius-0 py-3 px-4"
                  for="option-3"
                  >$50</label
                >
                <input
                  type="radio"
                  class="btn-check"
                  name="options"
                  id="option-4"
                  autocomplete="off"
                />
                <label
                  class="btn btn-outline-danger radius-0 py-3 px-4"
                  for="option-4"
                  >$100</label
                >
                <input
                  type="radio"
                  class="btn-check"
                  name="options"
                  id="custom"
                  autocomplete="off"
                />
                <label
                  class="btn btn-outline-danger radius-0 py-3 px-5 w-50"
                  for="custom"
                  >Custom Amount</label
                >
              </div>
              <div class="input-group mb-3">
                <input type="radio" class="btn-check" autocomplete="on" />
                <label
                  class="btn btn-danger input-group-text py-3 px-4 radius-0"
                  for="custom"
                  >$</label
                >
                <input
                  type="number"
                  min="10"
                  id="donate-amount"
                  name="donate-amount"
                  value="<?php echo $data['donate'] ?>"
                  class="form-control radius-0 py-3"
                  required
                />
              </div>
              <div class="mb-2">
                <textarea
                  class="form-control form-control-lg radius-0 p-3"
                  rows="4"
                  placeholder="Message"
                  style="max-height: 24.8%"
                  name="komentar"
                ><?php echo $data['komentar'] ?></textarea>
              </div>
              <div class="form-check mb-2">
                <input
                  class="form-check-input"
                  type="checkbox"
                  name="anonim"
                  value="yes"
                  id="gridCheck"
                />
                <label class="form-check-label" for="gridCheck">
                  Don't show my name publicy
                </label>
              </div>
              <button
                class="btn btn-warning radius-0 px-4 py-3 text-light fw-semibold"
                type="submit"
              >
                Update Now
              </button>
            </form>
          </div>
      </div>
      <h1 class="text-center font-2 fw-light mt-5 fs-5 py-4">
        Thank you to all our donors!
      </h1>
    </section>
    <!-- footer -->
    <footer
      class="py-3 text-center align-items-center text-light mt-5"
      style="background: #424242"
    >
      Copyright - 2023
    </footer>
    <script src="../script/script-donate.js"></script>
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
