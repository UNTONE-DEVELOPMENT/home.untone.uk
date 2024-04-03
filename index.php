<?php
$eref = "";
$erefs = [
    "reddark" => "Reddark has now shut down."
];

if(isset($_GET['eref'])) {
	if(array_key_exists($_GET['eref'], $erefs)) {
	    $eref = $erefs[$_GET['eref']];
	}
}
?>
<!DOCTYPE html>
<html>

<head>
<meta name="title" content="UNTONE">
<meta name="description" content="We make music, websites, games, and more.">
<meta name="keywords" content="company,homepage,games,video games,music,record,record label,websites,development,it">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">


<title>UNTONE</title>
    <link type="text/css" rel="stylesheet" href="https://id.untone.uk/css/global.css?v2">
    <link type="text/css" rel="stylesheet" href="main.css?v2">
    <link rel="stylesheet" type="text/css" href="https://shared.untone.uk/share.css?v2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

        <script rel="preload" src="https://kit.fontawesome.com/91ad005f46.js" crossorigin="anonymous"></script>
</head>

<body class="theme_dark" style="display: none;">
    <?php
    if($eref != "") {
        ?>
        <div class="eref-bar">
            <p><?= $eref ?></p>
        </div>
        <?php
    }
    ?>
    <div class="cover">
        <img src="img/untone-icon.svg">
    </div>
    <div class="page">
        <div class="page-header">
            <h1>Hi, we’re <strong>UNTONE</strong></h1>
            <h3>We're a small team of people from the music industry to web development making cool projects across the internet</h3>
            <h3>Please have a look at our various projects <span class="desktop">on the right</span><span class="mobile">down below</span>!</h3>
        </div>
        <div class="items">
            <div class="items-1w">
                <a href="https://music.untone.uk" class="item" style="--img: url('img/item/untone-music-cover.png')">
                    <div class="background"></div>
                    <img src="img/item/untone-music.svg">
                    <div class="info">A modern record label publishing a wide range of fun and exciting genres</div>
                </a>
            </div>


            <div class="items-2w">
                <a href="https://id.untone.uk" class="item" style="--img: url('img/item/untone-id-cover.png')">
                    <div class="background"></div>
                    <img src="img/item/untone-id.svg">
                    <div class="info">A simple login solution for all UNTONE products</div>
                </a>
                <a href="https://cubey.cc" class="item" style="--img: url('img/item/cubey-cover.png')">
                    <div class="background"></div>
                    <img src="img/item/cubey.svg">
                    <div class="info">A fun retro platformer game, jump around and get the keys!</div>
                </a>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-inner">

            <div class="footer-left">
                <img src="https://id.untone.uk/public/img/branding/logo-light.svg">
                <p>(C) UNTONE 2020-2023</p>
            </div>

            <div class="footer-right">

            <div class="footer-right-row">
                    <a href="https://twitter.com/_UNTONE"><i class="fab fa-twitter"></i></a>

                    <a href="https://bsky.app/profile/untone.uk"><img src="https://bsky.app/static/apple-touch-icon.png"></a>
                </div>
                <div class="footer-right-row">
                    <!-- <a href="a">Contact</a> -->
                    <a href="https://id.untone.uk/legal/terms">Terms of service</a>
                    <a href="https://id.untone.uk/legal/privacy">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
