<?php
    // ini_set('display_errors',1);
    // ini_set('display_startup_errors',1);
    // error_reporting(-1);

    $nameArray = array(
        'Hugo',
        'Francisco',
        'Luis',
        'Erick',
        'Fernanda',
        'Alejandra',
        'Alex',
        'Isaias',
        'Humberto',
        'Ismael',
        'Raúl'
    );

    $lastnameArray = array(
        'Martínez',
        'López',
        'Gómez',
        'González',
        'Montes',
        'Villa',
        'Hernández',
        'Ramírez',
        'Burgos',
        'Calera',
        'Bassol',
        'Santos',
        'Rivero',
        'Castillo'
    );

    $branchArray = array(
        'Walmart Copilco',
        'Walmart Miramontes',
        'Walmart Tlalpan',
        'Walmart Tlahuac',
        'Walmart Buenavista',
        'Walmart Plateros',
        'Walmart Aeropuerto',
        'Walmart Feliz Cuevas',
        'Walmart Feliz Cuajimapla',
        'Walmart',
        'Sumesa',
        'Bodega Aurrera'
    );

    $gameArray = array(
        'Maratón',
        'Serpientes y Escaleras',
        'Dominó',
        'Lotería'
    );

    $statusArray = array(
        'Sobresaliente',
        'Bueno',
        'Medio',
        'Bajo'
    );

    $userRolArray = array(
        'Administrador',
        'Gerente',
        'Gerente',
        'Supervisor',
        'Supervisor',
        'Supervisor',
        'Supervisor',
        'Promotor',
        'Promotor',
        'Promotor',
        'Promotor',
        'Promotor',
        'Promotor',
        'Promotor',
        'Promotor',
        'Promotor',
        'Promotor'
    );

    $embotelladoraArray = array(
        'FEMSA',
        'Arca Continental',
        'CDF',
        'Bepensa',
        'Rica'
    );

    $stateArray = array(
        'Distrito Federal',
        'Aguascalientes',
        'Baja California',
        'Baja California Sur',
        'Campeche',
        'Chiapas',
        'Chihuahua',
        'Coahuila',
        'Colima',
        'Durango',
        'Guanajuato',
        'Estado de Guerrero',
        'Estado de Hidalgo',
        'Jalisco',
        'Estado de México',
        'Michoacán',
        'Morelos',
        'Nayarit',
        'Nuevo León',
        'Oaxaca',
        'Puebla',
        'Querétaro',
        'Quintana Roo',
        'San Luis Potosí',
        'Sinaloa',
        'Sonora',
        'Tabasco',
        'Tamaulipas',
        'Tlaxcala',
        'Veracruz',
        'Yucatán',
        'Zacatecas'
    );

    function randomString($array){
        $randomInt = rand(0, sizeof($array)-1);
        $randomArray = $array;

        return $array[$randomInt];
    }

?>