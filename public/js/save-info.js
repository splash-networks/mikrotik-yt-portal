document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('.btn.btn--secondary').addEventListener('click', function (event) {
        const lang = localStorage.getItem('selectedLanguage') || 'en';
        const form = document.getElementById('step1Form');

        const firstName = form.querySelector(`.lang-${lang}[placeholder="${lang === 'en' ? 'First Name' : 'Nombre'}"]`).value.trim();
        const lastName = form.querySelector(`.lang-${lang}[placeholder="${lang === 'en' ? 'Last Name' : 'Apellido'}"]`).value.trim();
        const email = form.querySelector(`.lang-${lang}[placeholder="${lang === 'en' ? 'Email' : 'Correo'}"]`).value.trim();
        const phone = document.getElementById('phoneNumber').value.trim();

        localStorage.setItem('userInfo', JSON.stringify({
            firstName,
            lastName,
            email,
            phone
        }));
    });
});
