<!DOCTYPE html>
<!-- This is the Communist Micronations website -->

<html>
<head>
    <link rel="stylesheet" type="text/css" href="Styles/stylesheet.css"/>

    <title>Icup</title>
</head>
<body>
<header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="?polls">polls</a></li>
            <li><a href="?articles">articles</a></li>
            <li><a href="">account</a></li>
            <li><a href="?faq">FAQ</a></li>
        </ul>
    </nav>
    <h2 class="CommunismRed centered" >
        This is the (main) website of the communist MicroNation
    </h2>

</header>

<?php
if (isset($_GET["polls"])){
    include "includes/polls.php";
    exit();
}
if (isset($_GET["articles"])){
    include "includes/articles.php";
    exit();
}
if (isset($_GET["faq"])){
    include "includes/faq.php";
    exit();
}
?>

<img id="commieflag" src="Pictures/communistflag.png" alt="flag" class="RightSideBar">
</body>
</html>
