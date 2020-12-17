<?php
/*
Plugin Name: Informações de Loteamento com SVG
Plugin URI: http://www.itshare.com.br
Description: Plugin para gerenciar e guardar informações de prováveis oportunidades de negócio
Version: 1.0.0
Details: http://www.itshare.com.br
Author: Davi Rodrigues da Silva
Author URI: https://www.linkedin.com/in/davirs10
License: EULA
*/

function displayMap() {
    if ( is_user_logged_in() ) {
        include_once plugin_dir_path( __FILE__ ) . "/includes/map.php";
    } else {
        $args = array(
            'label_username' => 'Usuário ',
            'label_password' => 'Senha &nbsp;&nbsp;',
            'label_log_in'   => 'Acessar'
        );
        wp_login_form( $args );
    }
}
add_shortcode('display_loteamentos', 'displayMap');