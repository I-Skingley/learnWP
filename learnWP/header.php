

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php wp_head(); ?>
</head>

<body>
<?php $slug = $_SERVER['REQUEST_URI'];
// echo "<script>alert('$slug')</script>";
?>

    <header>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="news.html">News</a>
            </li>
            <li>
                <a href="shop.html">Shop</a>
            </li>
            <li>
                <a href="checkout.htmnl">Checkout</a>
            </li>
            <li>
                <a href="about.html">About Us</a>
            </li>
            <li>
                <a href="contact.html">Contact</a>
            </li>
            <li>
                <input type="text" placeholder="Search Here">
                <br>
                <a href="#"> </a>
            </li>
        </ul>
    </div>
    <nav>
        <div id="logo-img">
            <a href="/index.html">
                <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="learninglogo">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <ul>
            <li>
                <!-- Dynamically colour link text based on current page -->
                <a class = "<?php if($slug=="/") {echo "active";}?>" href="/../">Home</a>
                <!-- <a class = "<?php if($slug=="/") {echo "active";}?>" href="<?php echo site_url('');?>">Home</a> Alternate Method-->
            </li>
            <li>
                <a class = "<?php if($slug=="/news/") {echo "active";}?>" href="/../news/">News</a>
            </li>
            <li>
                <a class = "<?php if($slug=="/shop/") {echo "active";}?>" href="/../shop/">Shop</a>
            </li>
            <li>
                <a class = "<?php if($slug=="/cart/") {echo "active";}?>" href="/../cart/">Checkout</a>
            </li>
            <li>
                <a class = "<?php if($slug=="/about/") {echo "active";}?>" href="/../about/">About Us</a>
            </li>
            <li>
                <a class = "<?php if($slug=="/contact/") {echo "active";}?>" href="/../contact/">Contact</a>
            </li>
            <li>
                <div id="search-icon">
                    <i class="fa fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>

    <div id="searchbox">
        <input type="text" placeholder="Search Here">
    </div>
    <br>
    <br>
    <br>
    </header>