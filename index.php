<?php

require 'header.php';
//
$_SESSION["mac"] = $_POST['mac'] ?? $_SESSION['mac'] ?? null;
$_SESSION["ip"] = $_POST['ip'] ?? $_SESSION['ip'] ?? null;
$_SESSION["link-login"] = $_POST['link-login'] ?? $_SESSION['link-login'] ?? null;
$_SESSION["link-login-only"] = $_POST['link-login-only'] ?? $_SESSION['link-login-only'] ?? null;
//
//
if (isset($_REQUEST['redirURL'])) {
    $_SESSION['redirURL'] = $_REQUEST['redirURL'];
} elseif (isset($_POST['link-orig'])) {
    $_SESSION['redirURL'] = $_POST['link-orig'];
}
//
header("Location: connect.php");
exit();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://gitnet-wifi.com/language">
    <link rel="stylesheet" href="public/css/components/components.css">
    <link rel="stylesheet" href="public/css/language.css">

    <link rel="shortcut icon" type="image/x-icon" href="public/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="public/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="public/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="public/favicon-16x16.png" />
    <link rel="manifest" href="public/site.webmanifest" />
    <title>Language</title>
</head>
<body>
    <div class="main-container">
        <div class="container">
            <video class="video-background" id="bgVideo" autoplay muted loop>
                <source src="public/media/videos/Language_screenvideo.mp4" id="bgVideo" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
            
            <img src="public/img/Layer_1.svg" alt="GigNet Logo">
            <div class="language-selector">
                <button class="btn btn--primary" onclick="setLanguageAndNavigate('en')">ENGLISH</button>
                <button class="btn btn--primary" onclick="setLanguageAndNavigate('es')">ESPAÑOL</button>
            </div>
        </div>
    </div>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5KXKHZPC');</script>
    <!-- End Google Tag Manager -->

    <script>
        function setLanguageAndNavigate(lang) {
        localStorage.setItem('selectedLanguage', lang);
        window.location.href = 'welcome.php';
        }
    </script>
</body>
</html>