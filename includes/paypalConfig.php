<?php
    require_once("PayPal-PHP-SDK/autoload.php");

    $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AU4ayRTlsUs-TxyRmivJiKqx2swVghuFLSx-hOVnO3tw0ZX1H72h-tIGhYUZa66Scisp3Vm9e5Nic-29',     // ClientID
            'EP-ErHlc2_V26wU4EqyZ46tRyeXJ0PCz_MCrCiXyJaZUHk40r9zJb72Lp3N3YPLQrDfS6gnpWu3kR8DJ'      // ClientSecret
        )
    );
?>