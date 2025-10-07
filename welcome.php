<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://gitnet-wifi.com/welcome">
    <link rel="stylesheet" href="public/css/components/components.css">
    <link rel="stylesheet" href="public/css/welcome.css">

    <link rel="shortcut icon" type="image/x-icon" href="public/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="public/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="public/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="public/favicon-16x16.png" />
    <link rel="manifest" href="public/site.webmanifest" />
    <title id="main-title">Welcome</title>
</head>

<body>
    <div class="main-container">
        <div class="container">
            <div class="container-logo">
                <video class="video-background" id="bgVideo" autoplay muted loop>
                <source src="public/media/videos/Welcome_screenvideo.mp4" id="bgVideo" type="video/mp4" />
                Your browser does not support the video tag.
                </video>
            <img src="public/img/Layer_1.svg" alt="GigNet Logo">
            </div>
            <div class="container-information">
                <div class="header-text">
                    <h5 class="lang-en">Connect for the internet</h5>
                    <h5 class="lang-es" style="display:none;">Conéctate a internet</h5>
                    <h1 class="lang-en">FOR FREE</h1>
                    <h1 class="lang-es" style="display:none;">GRATIS</h1>
                </div>

                <div class="message-center">
                    <span class="lang-en">Powered By <span class="outstanding">GIGNET</span></span>
                    <span class="lang-es" style="display:none;">Desarrollado por <span class="outstanding">GIGNET</span></span>
                </div>

                <button 
                    class="btn btn--secondary" 
                    onclick="window.location.href='info.php'">
                    <span class="lang-en">CONNECT</span>
                    <span class="lang-es" style="display:none;">COMENCEMOS</span>
                </button>
            </div>
        </div>
        
        <div class="terms-container">
            <div class="terms-text">
                <a class="lang-en" href="https://gignet.mx/en/about-us/privacy-notice/">Terms and Conditions | </a> 
                <a class="lang-en" href="https://gignet.mx/en/about-us/privacy-notice/">Privacy Policy</a> 

                <a class="lang-es" style="display:none;" href="https://gignet.mx/nosotros/aviso-privacidad/">Términos y Condiciones |</a>
                <a class="lang-es" style="display:none;" href="https://gignet.mx/nosotros/aviso-privacidad/">Política de Privacidad</a> 
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
        function applyLanguage() {
            const lang = localStorage.getItem('selectedLanguage') || 'en';
            document.querySelectorAll('.lang-en').forEach(el => {
                el.style.display = (lang === 'en') ? '' : 'none';
            });
            document.querySelectorAll('.lang-es').forEach(el => {
                el.style.display = (lang === 'es') ? '' : 'none';
            });
            const title = document.getElementById("main-title");
            if (title) {
                title.textContent = lang === "es" ? "Bienvenido" : "Welcome";
            }
        }
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', applyLanguage);
        } else {
            applyLanguage();
        }
    </script>
</body>
</html>