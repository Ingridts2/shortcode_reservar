<?php

add_action('wp_enqueue_scripts','reserva_orizonte_adiciona_scripts');
function reserva_orizonte_adiciona_scripts(){
    wp_enqueue_style(
        'reserva_orizonte_estilo',
        plugins_url().'/reserva_orizonte/css/reserva_orizonte_estilos.css'
    );
}

