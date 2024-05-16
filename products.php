<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php
    wp_head();
    ?>
</head>
<body>
<!-- Header Starts here -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="front-page.php">
            <img src="https://uploads.vw-mms.de/system/production/images/vwn/030/145/images/7a0d84d3b718c9a621100e43e581278433114c82/DB2019AL01950_web_1600.jpg?1649155356" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            SAE OY
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-5 p-2 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="front-page.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Header ends here  -->
<!-- Home page content starts here  -->
<div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Item 1</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="item1.php" class="btn btn-primary">product page</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Item 2</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="item2.php" class="btn btn-primary">product page</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card mb-5 mt-5">
            <div class="card-body">
                <h5 class="card-title">Item 3</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="item3.php" class="btn btn-primary">product page</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card mb-5 mt-5">
            <div class="card-body">
                <h5 class="card-title">Item 4</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="item4.php" class="btn btn-primary">product page</a>
            </div>
        </div>
    </div>
</div>

<!-- Home page content ends here -->


<!-- Footer Starts here -->
<footer class="navbar navbar-expand-lg bg-body-tertiary d-flex justify-content-between align-items-center fixed-bottom">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="#">&copy; 2024 Your Company</a>
    </div>
    <ul class="d-flex justify-content-between align-items-center navbar-nav me-5">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="front-page.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
        </li>
    </ul>
</footer>
<!-- Footer ends here  -->
<?php
wp_footer();
?>

</body>
</html>