<?php
include("../connection.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  if (!empty($name) && !empty($email)) {
    $QUERY = "INSERT INTO users (name, email, password) VALUES  ('$name', '$email', '$password')";
    mysqli_query($con, $QUERY);
    echo "<script type='text/javascript'> alert('successfully registration')</script>";
  } else {
    echo "<script type='text/javascript'> alert('please enterd valid details')</script>";
  }
  $_SESSION["formData"] = $_POST;
  // Redirect to another page
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Seal_of_Maharashtra.svg/800px-Seal_of_Maharashtra.svg.png">
  <title>Digital Grampanchayat</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container-fluid bg-dark p-1 text-light">
    <h3 class="text-center"> Register</h3>
  </div>


  <nav aria-label="breadcrumb ">
    <ol class="breadcrumb p-2">
      <li class="breadcrumb-item"><a href="../index.php">
          << Home</a>
      </li>
    </ol>
  </nav>

  <div class="container">
    <div class="row justify-content-center mt-2">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center">Register</div>
          <div class="card-body">
            <form action="#" method="post" id="registerForm">
              <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input name="name" type="text" class="form-control" id="fullName" placeholder="Enter your full name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Enter your password">
              </div>
              <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input name="confirmPassword" type="password" class="form-control" id="confirmPassword" oninput="checkPasswordMatch()" placeholder="Confirm your password">
                <small id="passwordMismatch" class="text-danger" style="display:none;">Passwords do not match</small>
              </div>
              <div class="container-fluid text-center">
                <button type="submit" class="btn btn-primary" id="submitButton" disabled>Sign Up</button>
              </div>
            </form>
            <div class="text-center mt-3">
              Already have an account? <a href="login.php">Login</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Simple client-side validation
    document.getElementById('registerForm').addEventListener('submit', function(event) {
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirmPassword').value;
      if (!name || !email || !password || !password || !confirmPassword) {
        event.preventDefault();
        alert('All fields are required.');
      }
    });

    function checkPasswordMatch() {
      var password = document.getElementById("password").value;
      var confirmPassword = document.getElementById("confirmPassword").value;

      var passwordMismatch = document.getElementById("passwordMismatch");
      var submitButton = document.getElementById("submitButton");

      if (password === confirmPassword) {
        passwordMismatch.style.display = 'none';
        submitButton.disabled = false;
      } else {
        passwordMismatch.style.display = 'block';
        submitButton.disabled = true;
      }
    }
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>