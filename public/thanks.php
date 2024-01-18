<?php

require 'header.php';

$redirect_url = $_SERVER['REDIRECT_URL'];

?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <title><?php echo htmlspecialchars($business_name); ?> WiFi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="assets/styles/bulma.min.css" />
  <link rel="stylesheet" href="vendor\fortawesome\font-awesome\css\all.css" />
    <meta http-equiv="refresh" content="5;url=<?php echo htmlspecialchars($redirect_url); ?>" />
  <link rel="icon" type="image/png" href="assets\images\favicomatic\favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="assets\images\favicomatic\favicon-16x16.png" sizes="16x16" />
  <link rel="stylesheet" href="assets/styles/style.css" />
</head>

<body>
<div class="page">

  <div class="head">
    <br>
    <figure id="logo">
      <img src="assets/images/logo.png">
    </figure>
  </div>

  <div class="main">
    <seection class="section">
      <div class="container">
        <div id="margin_zero" class="content has-text-centered is-size-6">Thank you!</div>
        <div id="margin_zero" class="content has-text-centered is-size-6">You have been successfully</div>
        <div id="margin_zero" class="content has-text-centered is-size-6">authorized on the network!</div>
      </div>
    </seection>
  </div>

</div>
</body>

</html>