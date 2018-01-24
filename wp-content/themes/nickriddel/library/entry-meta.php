<?php
if(!function_exists('FoundationPress_entry_meta')) :
    function FoundationPress_entry_meta() {
        echo '<time class="updated fade-in-down" datetime="'. get_the_time('c') .'">'. sprintf(__('%s', 'FoundationPress'), get_the_date(), get_the_time()) .'</time>';
    }
endif;
?>
