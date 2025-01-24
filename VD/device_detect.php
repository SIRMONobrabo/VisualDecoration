<?php
function isMobile() {
    return preg_match('/(android|iphone|ipad|mobile|opera mini|blackberry|iemobile|webos)/i', $_SERVER['HTTP_USER_AGENT']);
}

if (isMobile()) {
    include 'mobile.html'; // Carrega o HTML para dispositivos móveis
} else {
    include 'desktop.html'; // Carrega o HTML para desktops
}
?>
