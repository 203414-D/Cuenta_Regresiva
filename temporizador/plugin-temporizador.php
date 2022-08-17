<?php

// Plugin name: Temporizador
// Description: Plugin para temporizador
// Version: 1.0
// Author: Sebastián ramirez, Diego Chacon, Ángel Gómez, Gerson López.
// Author URI: https://github.com/203419

add_action('admin_menu','CrearMenu');

function CrearMenu(){
    add_menu_page(
        'Cuenta regresiva',
        'Cuenta regresiva (timer)',
        'manage_options',
        'sp_menu',
        'ContenidoDelPlugin',
         plugin_dir_url(__FILE__).'icono/img/icono.svg', 
         '1'
    );
}

function ContenidoDelPlugin(){
    echo "<h1>Ejemplo del contenido del plugin </h1>";
}

?>