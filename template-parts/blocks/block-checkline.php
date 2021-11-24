<?php
    $v = get_field('check_logo_primary');
    $i = current( array_filter( ispe_setup_theme_color(), function($e) use($v) {
        return $e['slug'] == $v;
    }));
?>

<div class="d-flex align-items-center mb-3">
    <div class="svg">
        <i>
            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" class="svg-icon">
                <rect id="Rectangle_2293"
                      width="29"
                      height="29"
                      rx="12"
                      fill="<?= $i['color'] ?>"
                />
                <g id="checked_1_"
                   transform="translate(8 9.083)">
                    <path id="Tracé_2153"
                          d="M.15,8.51a.484.484,0,0,1,0-.7l.7-.7a.484.484,0,0,1,.7,0l.05.05,2.755,2.955a.242.242,0,0,0,.351,0L11.42,3.15h.05a.484.484,0,0,1,.7,0l.7.7a.484.484,0,0,1,0,.7h0L4.858,12.867a.484.484,0,0,1-.7,0L.25,8.66l-.1-.15Z" transform="translate(0 -3)"
                          fill="#fff"/>
                </g>
            </svg>
        </i>
    </div>
    <div>
        <!-- TEXT ONLY -->
        <p class="ms-3 mb-0 text-muted has-md-font-size"><?php the_field('line_label'); ?></p>
        <p class="ms-3 mb-0 text-muted has-sm-font-size"><?php the_field('line_content'); ?></p>
    </div>
</div>
