<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="canonical" href="https://gitnet-wifi.com/AD" />
    <link rel="stylesheet" href="public/css/components/components.css" />
    <link rel="stylesheet" href="public/css/AD.css" />

    <link rel="shortcut icon" type="image/x-icon" href="public/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="public/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="public/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="public/favicon-16x16.png" />
    <link rel="manifest" href="public/site.webmanifest" />

    <script src="public/libs/jquery/jquery-3.6.0.min.js"></script>
    <script
      src="https://auto.myonedash.com/scripts/js/async"
      id="hookierFramework"
      crossorigin="anonymous"
    ></script>
    <title id="main-title">Offer</title>
  </head>
  <body>
    <div
      id="spinner"
      style="
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        z-index: 9999;
        background: rgba(255, 255, 255, 0.7);
        justify-content: center;
        align-items: center;
      "
    >
      <div class="loader"></div>
    </div>

    <div class="main-container-2">
      <div id="toast" class="custom-toast"></div>
      <div class="container">
        <div class="text-header">
          <h1 class="lang-en">While you’re here</h1>
          <h1 class="lang-es" style="display: none">Mientras estás aquí</h1>
          <h5 class="lang-en">
            Take Advantage of these <br class="hidden" />
            Exclusive Offers from our <br class="hidden" />
            Partners
          </h5>
          <h5 class="lang-es" style="display: none">
            Aprovecha estas ofertas <br class="hidden" />
            exclusivas de nuestros socios.
          </h5>
        </div>

        <div class="offers">
          <div class="card-offers">
            <div class="option-1">
              <div class="lang-en option-text">
                GET FREE CANCUN <br class="hidden" />
                ATTRACTION TICKETS
              </div>
              <div class="lang-es option-text" style="display: none">
                OBTÉN BOLETOS GRATIS PARA ATRACCIONES EN CANCÚN
              </div>
              <a
                id="seeOfferBtn_en1"
                href="https://deals.vacationvip.com/gignet-cancun-tickets/"
                class="lang-en btn option-button"
              >
                SEE OFFER</a
              >
              <a
                id="seeOfferBtn_es1"
                href="https://deals.vacationvip.com/gignet-cancun-tickets/"
                class="lang-es btn option-button"
                style="display: none"
              >
                VER OFERTA</a
              >
            </div>

            <div class="option-2">
              <div class="lang-en option-text">
                GET EXCLUSIVE CANCUN <br class="hidden" />
                RESORT VACATION <br class="hidden" />
                OFFERS
              </div>
              <div class="lang-es option-text" style="display: none">
                OBTÉN OFERTAS EXCLUSIVAS DE VACACIONES EN RESORTS DE CANCÚN
              </div>
              <a
                id="seeOfferBtn_en2"
                href="https://deals.vacationvip.com/gignet-cancun-vacation/"
                class="lang-en btn option-button"
              >
                SEE OFFER</a
              >
              <a
                id="seeOfferBtn_es2"
                href="https://deals.vacationvip.com/gignet-cancun-vacation/"
                class="lang-es btn option-button"
                style="display: none"
              >
                VER OFERTA</a
              >
            </div>
          </div>
        </div>

        <div class="text-footer">
          <button
            id="skipBtn_en"
            class="lang-en btn btn--medium btn--secondary"
          >
            Skip
          </button>
          <button
            id="skipBtn_es"
            class="lang-es btn btn--medium btn--secondary"
            style="display: none"
          >
            Omitir
          </button>
        </div>
      </div>
    </div>
  </body>

  <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5KXKHZPC');</script>
    <!-- End Google Tag Manager -->
     
  <script>
    function showToast(message) {
      const toast = document.getElementById("toast");
      toast.textContent = message;
      toast.classList.add("show");
      setTimeout(() => toast.classList.remove("show"), 2500);
    }

    function showSpinner(show) {
      document.getElementById("spinner").style.display = show ? "flex" : "none";
    }

    function setOfferButtonsDisabled(disabled) {
      document.querySelectorAll(".option-button, #skipBtn_en, #skipBtn_es").forEach((btn) => {
        btn.disabled = disabled;
        btn.classList.toggle("disabled", disabled);
      });
    }

    function sendToHookier(callback) {
      const lang = localStorage.getItem("selectedLanguage") || "en";
      const payload = JSON.parse(
        localStorage.getItem("hookierPayload") || "{}"
      );
      if (!payload.email) {
        showToast(
          lang === "es"
            ? "No hay datos para enviar."
            : "There is no data to send."
        );
        setOfferButtonsDisabled(false);
        return;
      }
      showSpinner(true);
      Hookier.load(function () {
        let optIn = new HookierAutomation({
          id: "15b16e30-912e-4b19-94e6-20f00b52b941",
          listenEvents: true,
          onBeforeSend: function () {
            Hookier.$(":submit").prop("disabled", true);
          },
          onRequestSent: async function () {
            async function sha256Email(email) {
              const encoder = new TextEncoder();
              const data = encoder.encode(email.trim());
              const hashBuffer = await crypto.subtle.digest("SHA-256", data);
              const hashArray = Array.from(new Uint8Array(hashBuffer));
              const hashHex = hashArray
                .map((b) => b.toString(16).padStart(2, "0"))
                .join("");
              return hashHex;
            }
            if (window.dataLayer) {
              dataLayer.push({
                event: "generate_lead",
                sha256_email_address: await sha256Email(payload.email),
              });
            }
            if (typeof vgo === "function") {
              vgo("setEmail", payload.email);
              vgo("process");
            }
          },
          onAutomationFinished: function (event) {
            showSpinner(false);
            let $response = event.detail;
            console.log("Hookier response:", $response);

            const leadId = $response.event_data && $response.event_data.lead && $response.event_data.lead.lead_id;

            if (leadId) {
              let payload = JSON.parse(localStorage.getItem("hookierPayload") || "{}");
              payload.UID = leadId;
              localStorage.setItem("hookierPayload", JSON.stringify(payload));
              localStorage.setItem("UID", leadId);
              console.log("UID guardado en localStorage:", leadId);

              if (typeof callback === "function") {
                setTimeout(callback, 100); 
              }
            } else {
              showToast(
                "No UID received, please try again."
              );
              setOfferButtonsDisabled(false);
            }
          },
          onError: function (event) {
            showSpinner(false);
            setOfferButtonsDisabled(false);
            showToast("Error sending data. Please try again.");
            console.log("Error Hookier:", event.detail);
          },
        });
        optIn.payload = payload;
        console.log("Sending data to Hookier:", optIn.payload);
        optIn.run();
      });
    }

    function handleOfferClick(lang, href) {
      setOfferButtonsDisabled(true);
      localStorage.setItem("selectedLanguage", lang);
      sendToHookier(() => {
        let tries = 0;
        function checkUIDAndRedirect() {
          const uid = localStorage.getItem("UID");
          if (uid && uid.length > 0) {
            window.location.href = href;
          } else if (tries < 20) {
            tries++;
            setTimeout(checkUIDAndRedirect, 100);
          } else {
            showToast(
              lang === "es"
                ? "Hubo un problema generando tu registro. Intenta de nuevo."
                : "There was a problem generating your registration. Please try again."
            );
            setOfferButtonsDisabled(false);
          }
        }
        checkUIDAndRedirect();
      });
    }

    document
      .getElementById("seeOfferBtn_en1")
      .addEventListener("click", function (e) {
        e.preventDefault();
        handleOfferClick("en", this.href);
      });
    document
      .getElementById("seeOfferBtn_es1")
      .addEventListener("click", function (e) {
        e.preventDefault();
        handleOfferClick("es", this.href);
      });
    document
      .getElementById("seeOfferBtn_en2")
      .addEventListener("click", function (e) {
        e.preventDefault();
        handleOfferClick("en", this.href);
      });
    document
      .getElementById("seeOfferBtn_es2")
      .addEventListener("click", function (e) {
        e.preventDefault();
        handleOfferClick("es", this.href);
      });

    document
      .getElementById("skipBtn_en")
      .addEventListener("click", function (e) {
        e.preventDefault();
        handleOfferClick("en", this.href);
      });
    document
      .getElementById("skipBtn_es")
      .addEventListener("click", function (e) {
        e.preventDefault();
        handleOfferClick("es", this.href);
      });

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
            title.textContent = lang === "es" ? "Ofertas" : "Offers";
        }
    }
    if (document.readyState === "loading") {
      document.addEventListener("DOMContentLoaded", applyLanguage);
    } else {
      applyLanguage();
    }
  </script>
</html>
