<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://gitnet-wifi.com/connected">
    <link rel="stylesheet" href="public/css/components/components.css">
    <link rel="stylesheet" href="public/css/connected.css">

    <link rel="shortcut icon" type="image/x-icon" href="public/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="public/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="public/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="public/favicon-16x16.png" />
    <link rel="manifest" href="public/site.webmanifest" />
    <title id="main-title">Connected</title>
</head>
<body>
    <div class="connected-container">
        <video class="background-video" autoplay muted loop>
            <source src="public/media/videos/GettyImages-2152044914.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        <div class="logo">
            <img src="public/img/208b85e10cc442eced176087a11a4c7c682b7958.png" alt="GigNet Logo">
        </div>

        <div class="lang-en connected-text">
            YOU ARE <span>CONNECTED</span>
        </div>

        <div class="lang-es connected-text" style="display: none;">
            ESTÁS <span>CONECTADO</span>
        </div>

        <p class="lang-en">Enjoy the Best Internet</p>
        <p class="lang-es" style="display: none;">Disfruta tu Internet Gratis</p>

        <div class="footer">
            <h5 class="lang-en message-center">Powered By <span>GIGNET</span></h5>
            <h5 class="lang-es message-center" style="display: none;">Desarrollado por <span>GIGNET</span></h5>
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
        function applyLanguage() {
        const lang = localStorage.getItem("selectedLanguage") || "en";
        document.querySelectorAll(".lang-en").forEach(el => {
            el.style.display = lang === "en" ? "" : "none";
        });
        document.querySelectorAll(".lang-es").forEach(el => {
            el.style.display = lang === "es" ? "" : "none";
        });
        const title = document.getElementById("main-title");
        if (title) {
            title.textContent = lang === "es" ? "Conectado" : "Connected";
        }
    }
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", applyLanguage);
    } else {
        applyLanguage();
    }
    </script>
</body>
</html>