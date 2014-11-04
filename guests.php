<?php

function convertBase10ToBase62($num){
    $charset="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $endChar=$charset[$num%62];
    $rtn="";

    if ( $num == "62" ) { 
        $rtn=$rtn.$charset[1]; 
    } else if ( $num >= 62 ) { 
        $rtn=$rtn.$charset[intval($num/62)%62+1]; 
    }

    $num=intval($num/62);

    while ($num > 61) {
        if ( is_int($num/62) == true ) { 
            $rtn=$rtn.$charset[0]; 
        } else { 
            $rtn=$rtn.$charset[$num%62]; 
        }

        $num=intval($num/62);
    }
    $rtn=$rtn.$endChar;
    echo "\n";
    echo $rtn;

    return $rtn;
}

function getGuests()
{
	return array(
	'xwKJqVY0xwKJqVY0' => array(
		'name' => 'Hola Ana, Tony, Dami, Pablo, Cami y Pipi',
		'singular' => false
	),
	'tsjvYWYPtsjvYWYP' => array(
		'name' => 'Hola Vivi, Sergio, Meli y Yani',
		'singular' => false
	),
	'qpSgwYYEqpSgwYYE' => array(
		'name' => 'Hola Pochi, Eric e Ivan',
		'singular' => false
	),
	'nmr240Ztnmr240Zt' => array(
		'name' => 'Hola Paolo',
		'singular' => true
	),
	'kj0OB1Zikj0OB1Zi' => array(
		'name' => 'Hola Pablo y Grabriela',
		'singular' => false
	),
	'hgzz93Z7hgzz93Z7' => array(
		'name' => 'Hola Andres y Xxxxxxxxxxx',
		'singular' => false
	),
	'dc8lH4ZWdc8lH4ZW' => array(
		'name' => 'Hola Peti y Anto',
		'singular' => false
	),
	'a9H6f6ZLa9H6f6ZL' => array(
		'name' => 'Hola Richard y Analía',
		'singular' => false
	),
	'76gSM7ZA76gSM7ZA' => array(
		'name' => 'Hola Gonza y Xxxxxxxxxxx',
		'singular' => false
	),
	'43PDk9Zp43PDk9Zp' => array(
		'name' => 'Hola Norma, Daniela, Ailén y Alan',
		'singular' => false
	),
	'10opSaZe10opSaZe' => array(
		'name' => 'Hola Wally y Xxxxxxxxxxxxx',
		'singular' => false
	),
	'YXWaqcZ3YXWaqcZ3' => array(
		'name' => 'Hola Marcelo, Irene, Ayelen y Federico',
		'singular' => false
	),
	'UTvWXdZSUTvWXdZS' => array(
		'name' => 'Hola Pipo y Graciela',
		'singular' => false
	),
	'RQ4IvfZHRQ4IvfZH' => array(
		'name' => 'Hola Florencia y Agustín',
		'singular' => false
	),
	'ONDt3hZwONDt3hZw' => array(
		'name' => 'Hola Noe, Ale, Cami y Agos',
		'singular' => false
	),
	'LKcfBiZlLKcfBiZl' => array(
		'name' => 'Hola Marida, Marido e Hijo postizo',
		'singular' => false
	),
	'IHL09kZaIHL09kZa' => array(
		'name' => 'Hola Javi, Yesi, Bri y Valen',
		'singular' => false
	),
	'EDkMGlZZEDkMGlZZ' => array(
		'name' => 'Hola Romi',
		'singular' => true
	),
	'BATxenZOBATxenZO' => array(
		'name' => 'Hola Naty',
		'singular' => true
	),
	'yxsjMoZDyxsjMoZD' => array(
		'name' => 'Hola Cyn',
		'singular' => true
	),
	'nmqXiYZynmqXiYZy' => array(
		'name' => 'Hola Sol y Pablo',
		'singular' => false
	),
	'tsiqdVZUtsiqdVZU' => array(
		'name' => 'Hola Rosi y Ricardo',
		'singular' => false
	),
	'216ZdEZR216ZdEZR' => array(
		'name' => 'Hola Mery, Leo y Matu',
		'singular' => false
	),
	'65xdGCZ265xdGCZ2' => array(
		'name' => 'Hola Naty',
		'singular' => false
	),
	'98Yr8BZd98Yr8BZd' => array(
		'name' => 'Hola Mery y Pato',
		'singular' => false
	),
	'feQU2yZzfeQU2yZz' => array(
		'name' => 'Hola Ami',
		'singular' => true
	),
	'feQU2yZzfeQU2yZz' => array(
		'name' => 'Hola Vero',
		'singular' => true
	),
	'ihh9vwZKihh9vwZK' => array(
		'name' => 'Hola Marshe',
		'singular' => true
	),
	'lkInXuZVlkInXuZV' => array(
		'name' => 'Hola San y Mao',
		'singular' => false
	),
	'po9CptZ6po9CptZ6' => array(
		'name' => 'Hola Bren',
		'singular' => true
	),
	'srAQRrZhsrAQRrZh' => array(
		'name' => 'Hola Lili y Alexis',
		'singular' => false
	),
	'vu15kqZsvu15kqZs' => array(
		'name' => 'Hola Oche, Vilitas y Cata',
		'singular' => false
	),
	'hgyuo10chgyuo10c' => array(
		'name' => 'Hola Cari y Diego',
		'singular' => false
	)
	);
}