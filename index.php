<?php
$eref = "";
$erefs = [
    "reddark" => "Reddark has now shut down."
];

if(isset($_GET['eref'])) {
	if(in_array($_GET['eref'], $erefs)) {
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
    <link type="text/css" rel="stylesheet" href="https://id.untone.uk/css/global.css">
    <link type="text/css" rel="stylesheet" href="main.css">
    <link rel="stylesheet" type="text/css" href="https://shared.untone.uk/share.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

        <script rel="preload" src="https://kit.fontawesome.com/91ad005f46.js" crossorigin="anonymous"></script>
</head>

<body class="theme_dark">
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
            <h1>Hi, we’re UNTONE.</h1>
            <h3>We make games, websites, music, and more.</h3>
        </div>
        <div class="items">
            <div class="items-1w">
                <a href="https://music.untone.uk" class="item" style="--img: url('img/item/untone-music-cover.png')">
                    <div class="background"></div>
                    <img src="img/item/untone-music.svg">
                </a>
            </div>


            <div class="items-2w">
                <a href="https://id.untone.uk" class="item" style="--img: url('img/item/untone-id-cover.png')">
                    <div class="background"></div>
                    <img src="img/item/untone-id.svg">
                </a>
                <a href="https://cubey.cc" class="item" style="--img: url('img/item/cubey-cover.png')">
                    <div class="background"></div>
                    <img src="img/item/cubey.svg">
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
