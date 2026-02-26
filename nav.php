<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'header-link.php'; ?>
</head>

<body>
    <?php include 'header.php'; ?>
    <!-- content sections start -->
    <nav class="navbar">

        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>

        <div class="nav-links" id="navMenu">
            <a href="#">Home</a>

            <div class="dropdown" id="aboutDropdown">
                <a href="#">About Us ▼</a>
                <div class="dropdown-content">
                    <a href="#">Mission</a>
                    <a href="#">Vision</a>
                </div>
            </div>
    
            <a href="#">Our Schools</a>
            <a href="#">Admissions</a>
            <a href="#">Contact Us</a>
            <a href="#">Blogs</a>
            <a href="#">Gallery</a>

            <a href="#" class="admission-btn">
                Admissions Inquiry →
            </a>
        </div>

        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </nav>

    <!-- content section end -->
    <?php include 'footer.php'; ?>
</body>

</html>