<?php
function ispe_logo() { ?>
    <style type="text/css">
        .login {
            background: #08002E;
        }

        .login h1 a {
            background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/ispe-blanc-jaune.svg) no-repeat center !important;
            height: 100px !important;
            width: 100% !important;
        }

        .login #backtoblog a,
        .login #nav a,
        .privacy-policy-link {
            color: #fff !important;
        }

        .login.wp-core-ui .input['text'],
        .login.wp-core-ui .input['text'] {
            background: #F4F4F4 !important;
            border-radius: 10px !important;
        }

        .login.wp-core-ui .input['text']::placeholder,
        .login.wp-core-ui .input['text']::placeholder {
            font-weight: 500;
            font-size: 15px;
            line-height: 20px;
        }

        .login.wp-core-ui .button-primary,
        .login.wp-core-ui .button-primary:hover {
            background: #FED330 !important;
            border-color: #FED330 !important;
            color: #08002E;
            font-weight: bold;
            box-shadow: none !important;
            text-shadow: none !important;
        }

        .login #login_error,
        .login .message,
        .login .success {
            border-color: #ffc000 !important;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'ispe_logo' );
