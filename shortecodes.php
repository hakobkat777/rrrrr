<?php

// BUTTON
function button($attr, $content = null)
{
    return '<a href="' . $attr['link'] . '" class="button"><span class="button-text">' . $content . '</span></a>';
}

add_shortcode('BUTTON', 'button');
// END BUTTON

?>