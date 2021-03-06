<?php
/* ♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛\
	░░░▒█ ▒█▀▀▀ ▀█▀ ▒█░▒█ ▒█▀▀▄ ▒█▀▀▀ ▒█▄░▒█     ▒█▀▀█ ▒█▀▄▀█ ▒█▀▀▀█ 
	░▄░▒█ ▒█▀▀▀ ▒█░ ▒█▀▀█ ▒█░▒█ ▒█▀▀▀ ▒█▒█▒█ ▀▀▀ ▒█░░░ ▒█▒█▒█ ░▀▀▀▄▄ 
	▒█▄▄█ ▒█▄▄▄ ▄█▄ ▒█░▒█ ▒█▄▄▀ ▒█▄▄▄ ▒█░░▀█     ▒█▄▄█ ▒█░░▒█ ▒█▄▄▄█ 
────────────────CMS de Uso Privado 2015  by Jeihden─────────────────────
\ ♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛*/

	ob_start();

	require_once 'global.php';

	$Functions->Logged("false");

	$TplClass->SetParam('username', '');
	$TplClass->SetParam('password', '');
	$TplClass->SetParam('FBID', FBID);
	$TplClass->SetParam('CAPTCHA', $Functions->GenerateCaptcha());
	
	if( $_SESSION['REG_ERROR'] ){
		$TplClass->SetParam('error', '<div id="error">'.$_SESSION['REG_ERROR'].'</div>');
		unset($_SESSION['REG_ERROR'], $_SESSION['REG_USERNAME'], $_SESSION['REG_MAIL'], $_SESSION['REG_PASSWORD'], $_SESSION['REG_PASSWORD2']);
	}

	if( $_SESSION['LOGIN_ERROR'] ){
		$TplClass->SetParam('error', '<div id="error">'.$_SESSION['LOGIN_ERROR'].'</div>');
		$TplClass->SetParam('username', $_SESSION['LOGIN_USERNAME']);
		$TplClass->SetParam('password', $_SESSION['LOGIN_PASSWORD']);
		unset($_SESSION['LOGIN_ERROR'], $_SESSION['LOGIN_USERNAME'], $_SESSION['LOGIN_PASSWORD']);
	}
	
	$TplClass->SetParam('FBID', FBID);
	$TplClass->AddTemplate("Index", "register");
	$TplClass->DisplayClosed();
	ob_end_flush(); 
?>