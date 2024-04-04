<?php
include("../connection.php");
session_start(); // Start session to manage user sessions

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both email and password are provided
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        // Sanitize input
        $email = $_POST['email'];
        $password = $_POST['password'];


        // Prepare SQL statement to retrieve user from the database
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if user exists
        if ($result->num_rows == 1) {
            // Fetch user record
            $row = $result->fetch_assoc();

            // Verify password
            if (password_verify($password, $row['password'])) {
                // Authentication successful
                $_SESSION['id'] = $row['id']; // Store user ID in session
                $_SESSION['email'] = $email; // Store user email in session
                $_SESSION['success_message'] = "Login successful.";
                header("Location: ../index.php"); // Redirect to dashboard page
                exit;
            } else {
                // Authentication failed
                $error_message = "Invalid email or password.";
            }
        } else {
            // Authentication failed
            $error_message = "Invalid email or password.";
        }

        // Close connection
        $stmt->close();
        $con->close();
    } else {
        // Missing email or password
        $error_message = "Both email and password are required.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Seal_of_Maharashtra.svg/800px-Seal_of_Maharashtra.svg.png">
    <title>Digital Grampanchayat</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid bg-dark p-1 text-light">
        <h3 class="text-center"> Login</h3>
    </div>


    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb p-2">
            <li class="breadcrumb-item"><a href="../index.php">
                    << Home</a>
            </li>
        </ol>
    </nav>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">Login</div>
                    <div class="card-body">
                        <form action="#" method="post" id="loginForm">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" placeholder="Enter your email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" placeholder="Enter your password" class="form-control" id="password">
                            </div>
                            <div class="container-fluid text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="mt-3 text-center">Don't have an account? <a href="./signup.php">Register</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>