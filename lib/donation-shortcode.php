<?php

    function velo_theme_donation_shortcode( $atts ) {
        $a = shortcode_atts( array(
            'email' => 'info@velo-autonomus.de',
            'subject' => 'Supporting self-driving bicycles',
            'currency' => 'EUR'
        ), $atts );
        return '<div class="velo-donation-wrapper" email="'.$a['email'].'" subject="'.$a['subject'].'" currency="'.$a['currency'].'"><h1>DONATION</h1><div class="donation-input-wrapper"><input type="number" target="_blank" placeholder="00.00" /></div><a class="velo-button disabled" href="donate" target="_blank">Donate now</a></div>';
    }
?>