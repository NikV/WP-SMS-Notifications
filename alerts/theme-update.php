<?php
function wp_sms_theme_update( $a, $b, $c ) {

    if ( $b['type'] == 'theme' && $b['action'] == 'update' ) {

        wp_sms_send_notification( "Theme has been updated: {$c['destination_name']}" );

    }

}
