<?php
/* ♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛\
	░░░▒█ ▒█▀▀▀ ▀█▀ ▒█░▒█ ▒█▀▀▄ ▒█▀▀▀ ▒█▄░▒█     ▒█▀▀█ ▒█▀▄▀█ ▒█▀▀▀█ 
	░▄░▒█ ▒█▀▀▀ ▒█░ ▒█▀▀█ ▒█░▒█ ▒█▀▀▀ ▒█▒█▒█ ▀▀▀ ▒█░░░ ▒█▒█▒█ ░▀▀▀▄▄ 
	▒█▄▄█ ▒█▄▄▄ ▄█▄ ▒█░▒█ ▒█▄▄▀ ▒█▄▄▄ ▒█░░▀█     ▒█▄▄█ ▒█░░▒█ ▒█▄▄▄█ 
────────────────CMS de Uso Privado 2015  by Jeihden─────────────────────
\ ♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛*/
$config = array(
'DB_HOST'	  => 'localhost:8080',/*HOST*/
'DB_PORT'	  => '3306',     /*PUERTO MYSQL*/
'DB_USER'	  => 'root',     /*USUARIO DEL PHPMYADMIN*/
'DB_PASSWORD' => '',   	 /*CONTRASEÑA DEL PHPMYADMIN*/
'DB_DATABASE' => 'onecms',   /*BASE DE DATOS*/

//CONFIG PARA EL CREADOR
'PATH'			    	=> 'http://localhost:8080',
'AVATARIMAGE'       	=> 'http://localhost:8080/habbo-imaging/avatarimage?figure=',
'SWF'      	        	=> 'http://localhost:8080/swfs/',
'BADGEURL'          	=> 'http://localhost:8080/swfs/c_images/album1584/',
'CDN'    		    	=> 'http://localhost:8080/gallery/',
'PATHCLIENT'        	=> 'http://localhost:8080/client',
'HK'       				=> 'http://localhost:8080/ACP4.0',
'MINRANK'           	=> '5',
'MAXRANK'          		=> '10',
'FOOTER'				=> '&copy; 2015. Todos Los Derechos Reservados.',	
//API CONFIG (FACEBOOK)
'FBID'					=> '578771218820554',
'FBSECRET'				=> '4141b90b353b2429cca5f0f84f46e432',
);?>
