<?php
session_start();

// Check if form data exists in session
if (isset($_SESSION["formData"])) {
    $formData = $_SESSION["formData"];
    unset($_SESSION["formData"]);
} else {
    header("Location: signup.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">Success</div>
                    <div class="card-body">
                        <p>Your form has been submitted successfully!</p>
                        <p>Here are the details you provided:</p>
                        <ul>
                            <li><strong>Full Name:</strong> <?php echo $formData['fullName']; ?></li>
                            <li><strong>Email:</strong> <?php echo $formData['email']; ?></li>
                            <!-- Add other form fields as needed -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>