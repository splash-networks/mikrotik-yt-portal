<?php
require 'header.php';
//
$mac = $_SESSION["mac"];
$ip = $_SESSION["ip"];
$link_login = $_SESSION["link-login"];
$link_login_only = $_SESSION["link-login-only"];
$redirURL = $_SESSION['redirURL'] ?? "https://www.google.com";

//username form
$username = "admin";

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo htmlspecialchars($business_name); ?> WiFi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
</head>
<body>
<div class="page">
    <div class="main">
        <section class="section">
            <div class="container">
                <div id="margin_zero" class="content has-text-centered is-size-6">Please wait, you are being</div>
                <div id="margin_zero" class="content has-text-centered is-size-6">authorized on the network</div>
            </div>
        </section>
    </div>
</div>

<script type="text/javascript">
    function doLogin() {
        document.sendin.username.value = document.login.username.value;
        document.sendin.password.value = hexMD5('\011\373\054\364\002\233\266\263\270\373\173\323\234\313\365\337\356');
        document.sendin.submit();
        return false;
    }
</script>

<script type="text/javascript">
    function formAutoSubmit() {
        var frm = document.getElementById("login");
        document.getElementById("login").submit();
        frm.submit();
    }
  
    window.onload = formAutoSubmit;
</script>

<form id="login" method="post" action="<?php echo $link_login_only; ?>" onSubmit="return doLogin()">
    <input name="dst" type="hidden" value="<?php echo $linkorig; ?>" />
    <input name="popup" type="hidden" value="false" />
    <input name="username" type="hidden" value="<?php echo $username; ?>"/>
    <input name="password" type="hidden"/>
</form>

</body>
</html>

