<?php
add_action('media_buttons', 'add_sc_select', 11);
function add_sc_select()
{
    global $shortcode_tags;

    /* ------------------------------------- */
    /* enter names of shortcode to exclude bellow */
    /* ------------------------------------- */
    $exclude = array("wp_caption", "embed");
    echo '&nbsp;<select id="sc_select"><option>Shortcode</option>';
    if ($key = "BUTTON") {
        if (!in_array($key, $exclude)) {
            $shortcodes_list .= '<option value="[' . $key . ' link= ]text here[/' . $key . ']">' . $key . '</option>';
        }
    }
    echo $shortcodes_list;
    echo '</select>';
}

add_action('admin_head', 'button_js');
function button_js()
{
    echo '<script type="text/javascript">
    jQuery(document).ready(function(){
       jQuery("#sc_select").change(function() {
              send_to_editor(jQuery("#sc_select :selected").val());
                  return false;
        });
    });
    </script>';
}

?>