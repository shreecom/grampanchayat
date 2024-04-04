<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Seal_of_Maharashtra.svg/800px-Seal_of_Maharashtra.svg.png">
    <title>Digital Grampanchayat</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require("./pages/navbar.php");
    require("./pages/slider.php");
    require("./pages/important_websites.php");
    require("./pages/vision.php");
    require("./pages/map.php");
    require("./pages/contact_us.php");
    require("./pages/footer.php");
    ?>
</body>

</html>