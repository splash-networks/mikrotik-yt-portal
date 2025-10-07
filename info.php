<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="canonical" href="https://gitnet-wifi.com/info" />
    <link rel="stylesheet" href="public/css/components/components.css" />
    <link rel="stylesheet" href="public/css/info.css" />

    <link rel="shortcut icon" type="image/x-icon" href="public/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="public/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="public/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="public/favicon-16x16.png" />
    <link rel="manifest" href="public/site.webmanifest" />
    
    <link
      rel="stylesheet"
      href="public/libs/intl-tel-input/intlTelInput.min.css"
    />
    <script src="public/libs/intl-tel-input/intlTelInput.min.js"></script>
    <script src="public/libs/intl-tel-input/utils.js"></script>
    <script src="public/libs/jquery/jquery-3.6.0.min.js"></script>

    <title id="main-title">Information</title>
  </head>

  <body>
    <div class="main-container">
      <div id="toast" class="custom-toast"></div>
      <div class="container">
        <div class="container-logo">
          <video class="video-background" id="bgVideo" autoplay muted loop>
            <source
              src="public/media/videos/info_screenvideo.mp4"
              id="bgVideo"
              type="video/mp4"
            />
            Your browser does not support the video tag.
          </video>
          <img src="public/img/Layer_1.svg" alt="GigNet Logo" />
          <a href="https://www.bookit.com"
            >bookit (“bookit”) <br />Powered by BSE Ventures, LLC</a
          >
        </div>
        <div class="container-information">
          <form id="step1Form">
            <div class="input-container">
              <input
                class="lang-en input-text"
                type="text"
                name="firstName"
                placeholder="First Name"
              />
              <input
                class="lang-es input-text"
                type="text"
                name="firstName"
                style="display: none"
                placeholder="Nombre"
              />
              <input
                class="lang-en input-text"
                type="text"
                name="lastName"
                placeholder="Last Name"
              />
              <input
                class="lang-es input-text"
                type="text"
                name="lastName"
                style="display: none"
                placeholder="Apellido"
              />
              <input
                class="lang-en input-text"
                type="text"
                name="email"
                placeholder="Email"
              />
              <input
                class="lang-es input-text"
                type="text"
                name="email"
                style="display: none"
                placeholder="Correo electrónico"
              />
              <input class="input-text" type="tel" id="phoneNumber" />
            </div>
            <div class="checkbox-container">
              <input type="checkbox" id="termsCheckbox" />
              <label class="lang-en" for="termsCheckbox">
                By clicking the checkbox, you agree and consent to receive
                promotional emails, SMS texts and calls, including pre-recorded
                messages and/or calls or texts made from an Auto-dial telephone
                dialing system from
                <a href="https://www.bookit.com">bookit.com</a> (“bookit”)
                powered by BSE Ventures, LLC, and its affiliates, parents and
                subsidiaries (text/data and other charges may apply) at the
                address/numbers provided regardless of that number being on any
                Do not Call Registry. Your consent is not a condition of any
                purchase. As an alternative to the consent above you may enter
                the Promotion here.
              </label>
              <label class="lang-es" style="display: none" for="termsCheckbox">
                Al hacer clic en la casilla de verificación, aceptas y das tu
                consentimiento para recibir correos electrónicos promocionales,
                mensajes de texto SMS y llamadas, incluyendo mensajes
                pregrabados y/o llamadas o textos realizados mediante un sistema
                de marcación telefónica automática de parte de
                <a href="https://www.bookit.com">bookit.com</a> (“bookit”),
                operado por BSE Ventures, LLC, y sus afiliadas, empresas
                matrices y subsidiarias (pueden aplicarse cargos por mensajes de
                texto/datos y otros cargos), a la dirección/números
                proporcionados, independientemente de que dicho número esté
                registrado en alguna Lista Nacional de No Llamar. Tu
                consentimiento no es una condición para realizar ninguna compra.
                Como alternativa al consentimiento anterior, puedes ingresar a
                la Promoción aquí.
              </label>
            </div>
            <button class="btn btn--secondary" type="submit">
              <span class="lang-en">Next</span>
              <span class="lang-es" style="display: none">Conectar</span>
            </button>
          </form>
        </div>
      </div>
      <div class="terms-container">
        <div class="terms-text">
          <a
            class="lang-en"
            href="https://gignet.mx/en/about-us/privacy-notice/"
            >Terms and Conditions <span>|</span>
          </a>
          <a
            class="lang-en"
            href="https://gignet.mx/en/about-us/privacy-notice/"
            >Privacy Policy</a
          >
          <a
            class="lang-es"
            style="display: none"
            href="https://gignet.mx/nosotros/aviso-privacidad/"
            >Términos y Condiciones <span>|</span></a
          >
          <a
            class="lang-es"
            style="display: none"
            href="https://gignet.mx/nosotros/aviso-privacidad/"
            >Política de Privacidad</a
          >
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
      function buildPayload() {
        const urlParams = new URLSearchParams(window.location.search);
        return {
          UID: "",
          utm_medium: urlParams.get("utm_medium") || "",
          email: document.querySelector(
            '.lang-en[placeholder="Email"], .lang-es[placeholder="Correo electrónico"]'
          ).value,
          utm_term: urlParams.get("utm_term") || "",
          fname: document.querySelector(
            '.lang-en[placeholder="First Name"], .lang-es[placeholder="Nombre"]'
          ).value,
          lname: document.querySelector(
            '.lang-en[placeholder="Last Name"], .lang-es[placeholder="Apellido"]'
          ).value,
          phone: document.getElementById("phoneNumber").value,
          utm_source: urlParams.get("utm_source") || "",
          marketing_consent: document.getElementById("termsCheckbox").checked
            ? "yes"
            : "no",
          utm_content: urlParams.get("utm_content") || "",
          utm_campaign: urlParams.get("utm_campaign") || "",
          language: localStorage.getItem("selectedLanguage") || "en"
        };
      }

      function getValidationMessage(key) {
        const lang = localStorage.getItem("selectedLanguage") || "en";
        const messages = {
          empty: {
            en: "Fields cannot be left empty.",
            es: "No puede dejar campos vacíos.",
          },
          firstName: {
            en: "First name must be at least 2 characters.",
            es: "El nombre debe tener al menos 2 caracteres.",
          },
          lastName: {
            en: "Last name must be at least 2 characters.",
            es: "El apellido debe tener al menos 2 caracteres.",
          },
          email: {
            en: "Enter a valid email address.",
            es: "Ingresa un correo electrónico válido.",
          },
          phone: {
            en: "Enter a valid phone number.",
            es: "Ingresa un número de teléfono válido.",
          },
          terms: {
            en: "You must accept the terms and conditions.",
            es: "Debe aceptar los términos y condiciones.",
          },
        };
        return messages[key][lang];
      }

      function showToast(message) {
        const toast = document.getElementById("toast");
        toast.textContent = message;
        toast.classList.add("show");
        setTimeout(() => toast.classList.remove("show"), 2500);
      }

      function applyLanguage() {
        const lang = localStorage.getItem("selectedLanguage") || "en";
        document.querySelectorAll(".lang-en").forEach((el) => {
          el.style.display = lang === "en" ? "" : "none";
        });
        document.querySelectorAll(".lang-es").forEach((el) => {
          el.style.display = lang === "es" ? "" : "none";
        });
        const title = document.getElementById("main-title");
        if (title) {
            title.textContent = lang === "es" ? "Información" : "Information";
        }
      }

      document.addEventListener("DOMContentLoaded", function () {
        applyLanguage();
        const input = document.getElementById("phoneNumber");
        const lang = localStorage.getItem("selectedLanguage") || "en";
        const countryMap = { en: "us", es: "mx" };
        const initialCountry = countryMap[lang] || "us";
        window.intlTelInput(input, {
          initialCountry: initialCountry,
          preferredCountries: ["us", "ca", "mx"],
          nationalMode: false,
          utilsScript: "public/libs/intl-tel-input/utils.js",
        });

        document
          .querySelectorAll(
            '.input-text[placeholder="First Name"], .input-text[placeholder="Last Name"]'
          )
          .forEach((input) => {
            input.addEventListener("input", function () {
              this.value = this.value.replace(/[^\p{L}0-9\s]/gu, "");
            });
          });

        document
          .getElementById("step1Form")
          .addEventListener("submit", function (e) {
            e.preventDefault();
            e.stopPropagation();

            const lang = localStorage.getItem("selectedLanguage") || "en";
            const form = document.getElementById("step1Form");

            const firstNameInput = form.querySelector(
              `.lang-${lang}[name="firstName"]:not([style*="display: none"])`
            );
            const lastNameInput = form.querySelector(
              `.lang-${lang}[name="lastName"]:not([style*="display: none"])`
            );
            const emailInput = form.querySelector(
              `.lang-${lang}[name="email"]:not([style*="display: none"])`
            );
            const termsCheckbox = document.getElementById("termsCheckbox");
            const phoneInput = document.getElementById("phoneNumber");

            const firstName = firstNameInput ? firstNameInput.value.trim() : "";
            const lastName = lastNameInput ? lastNameInput.value.trim() : "";
            const email = emailInput ? emailInput.value.trim() : "";

            let phone = "";
            let phoneCountry = "";
            let isValidPhone = false;
            if (phoneInput) {
              const iti =
                window.intlTelInputGlobals &&
                window.intlTelInputGlobals.getInstance(phoneInput);
              if (iti) {
                isValidPhone = iti.isValidNumber();
                phone = iti.getNumber();
                phoneCountry = iti.getSelectedCountryData().iso2;
              } else {
                phone = phoneInput.value.trim();
                phoneCountry = "";
              }
            }

            if (!firstName || !lastName || !email || !phone) {
              showToast(
                lang === "es"
                  ? "Los campos no pueden quedar vacíos."
                  : "Fields cannot be left empty."
              );
              return;
            }
            if (!/^[\p{L}0-9\s]{2,}$/u.test(firstName)) {
              showToast(
                lang === "es"
                  ? "El nombre debe contener solo letras, números o espacios."
                  : "First name must contain only letters, numbers or spaces."
              );
              return;
            }
            if (!/^[\p{L}0-9\s]{2,}$/u.test(lastName)) {
              showToast(
                lang === "es"
                  ? "El apellido debe contener solo letras, números o espacios."
                  : "Last name must contain only letters, numbers or spaces."
              );
              return;
            }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
              showToast(
                lang === "es"
                  ? "Introduce una dirección de correo electrónico válida."
                  : "Enter a valid email address."
              );
              return;
            }
            if (!isValidPhone) {
              showToast(
                lang === "es"
                  ? "Ingresa un número de teléfono válido."
                  : "Enter a valid phone number."
              );
              return;
            }
            if (!termsCheckbox.checked) {
              showToast(
                lang === "es"
                  ? "Por favor acepta los términos y condiciones."
                  : "Please accept the terms and conditions."
              );
              return;
            }

            const payload = {
              UID: "",
              email: email,
              fname: firstName,
              lname: lastName,
              marketing_consent: termsCheckbox.checked ? "yes" : "no",
              phone: phone,
              phoneCountry: phoneCountry,
              utm_campaign: "",
              utm_content: "",
              utm_medium: "",
              utm_source: "",
              utm_term: "",
              language: lang
            };

            localStorage.setItem("hookierPayload", JSON.stringify(payload));
            window.location.href = "offer.php";
          });
      });
    </script>
  </body>
</html>
