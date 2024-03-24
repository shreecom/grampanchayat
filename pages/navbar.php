<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <title>Grampanchayat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <style>
        <?php include "navbar.css" ?>
    </style>
    <div class="navbar-brand container-fluid bg-light d-flex justify-content-between align-items-center" href="#" style="font-size: 23px; font-weight: bold; color: #5a5a5a;">
        <img src="https://grampanchayat.org.in/images/logo.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-center">
        Digital Grampanchayat
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Seal_of_Maharashtra.svg/800px-Seal_of_Maharashtra.svg.png" style="margin-left: auto;" width="70" height="70" />
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav ">
                    <li class="nav-item px-3">
                        <a class="nav-link active" onclick="changeTabColor(this)" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#" onclick="changeTabColor(this);">Grampanchayat App</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#" onclick="changeTabColor(this);">Grampanchayat Dashboard</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#" onclick="changeTabColor(this);">Government Yojna</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="pages/online_services/online_services.php" onclick="changeTabColor(this);">Online Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- add javascript for change color  -->
    <script>
        let currentTab = null;

        function changeTabColor(tab) {
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            if (currentTab) {
                currentTab.classList.remove('active');
            }

            tab.classList.add('active');

            // Update currentTab
            currentTab = tab;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>