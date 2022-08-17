<?php

// Plugin name: Temporizador
// Description: Plugin para temporizador
// Version: 1.0
// Author: Sebastián ramirez, Diego Chacon, Ángel Gómez, Gerson López.
// Author URI: https://github.com/203419
function Activar(){
  
}
function Desactivar(){

}
register_activation_hook(__FILE__,'Activar');
register_deactivation_hook(__FILE__,'Desactivar');

add_action('admin_menu','CrearMenu');

function CrearMenu(){
    add_menu_page(
        'Cuenta regresiva',
        'Cuenta regresiva (timer)',
        'manage_options',
        plugin_dir_path(__FILE__).'admin/Temporizador.php',
        null,
         plugin_dir_url(__FILE__).'icono/img/icono.svg', 
         '1'
    );
}

?>