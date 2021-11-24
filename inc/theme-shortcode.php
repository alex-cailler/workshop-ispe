<?php

function ispe_signup_newsLetter_shortcode() {
    return "<div id=\"newsletters\" class='row mt-9 mb-5 p-md-6 p-4 bg-darker rounded-3 shadow-lg position-relative'>
        <div class='position-absolute' style='top: 0; bottom: -30px; left: 0; right: 0;'>
            <img class='h-100' style='width: auto' title=\"Ispe - Donwload\" alt=\"Ispe - Google play\" src=\"" . get_template_directory_uri() . '/assets/images/news-letter.png' . "\" />
        </div>
        <div class='col-lg-6 col-12 position-relative'>
            <div style='z-index: 2'>
                <h2 class='text-white mb-3'>Ispe.fr in your inbox</h2>
                <p class='font-weight-300 short-text' style='color: white!important'>A weekly rundown of the news that matter, plus educational resources and updates on products & services that support economic freedom</p>
            </div>
        </div>
        <div class='col-lg-6 col-12 position-relative'>
            <form action=\"https://alexandre-cailler.us1.list-manage.com/subscribe/post?u=dcbe7dc84ce267ce10bf875ca&amp;id=ccb1d33b2c\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" novalidate>
                <div id=\"mc_embed_signup_scroll\">
                    <div class=\"form-group\">
                        <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"required email form-control\" id=\"mce-EMAIL\" placeholder='Votre adresse email'>
                    </div>
                    <div id=\"mce-responses\" class=\"clear my-4\">
                        <div class=\"alert alert-danger\" id=\"mce-error-response\" style=\"display:none\"></div>
                        <div class=\"alert alert-success\" id=\"mce-success-response\" style=\"display:none\"></div>
                    </div> 
                    <div class=\"clear\"><input type=\"submit\" value=\"Je m'inscris !\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"btn btn-success text-white\"></div>
                    <div style=\"position: absolute; left: -5000px;\" aria-hidden=\"true\"><input type=\"text\" name=\"b_dcbe7dc84ce267ce10bf875ca_ccb1d33b2c\" tabindex=\"-1\" value=\"\"></div>
                </div>
            </form>
        </div>
    </div>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email'}(jQuery));var $mcj = jQuery.noConflict(true);</script>";
}

add_shortcode("signup_newsLetter",'ispe_signup_newsLetter_shortcode');
