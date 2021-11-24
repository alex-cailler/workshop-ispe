<?php

function ispe_theme_enablle_HSTS () {
     header('Strict-Transport-Security: max-age=0');
}

add_action('send_headers', 'ispe_theme_enablle_HSTS');