<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="css/header-footer.css">
<header>
    <nav>
        <i class="fa fa-bars"></i>
        <span class="nav_link">
            <a href="index.php">Home</a>
            <a href="about-us.php">About Us</a>
        </span>
        <a class="logo"><img src="images/brand_logo.png" class="logoImg" alt=""></a>
        <span class="nav_link">
            <a href="contact-us.php">Contact Us</a>
            <a href="+23412345678"><i class="fa fa-phone"></i></a>
        </span>
    </nav>
</header>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/popper.min.js"></script>

<script>
    let browserWidth = document.body.clientWidth;
    // Toggle menu
    // console.log(window.innerHeight, browserWidth)
    if (browserWidth < 770) {
        $(".fa-bars").click(function () {
            $(".nav_link").fadeToggle()
        })
    }
</script>