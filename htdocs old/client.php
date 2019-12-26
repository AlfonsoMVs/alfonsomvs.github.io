<?php
/* ♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛\
	░░░▒█ ▒█▀▀▀ ▀█▀ ▒█░▒█ ▒█▀▀▄ ▒█▀▀▀ ▒█▄░▒█     ▒█▀▀█ ▒█▀▄▀█ ▒█▀▀▀█ 
	░▄░▒█ ▒█▀▀▀ ▒█░ ▒█▀▀█ ▒█░▒█ ▒█▀▀▀ ▒█▒█▒█ ▀▀▀ ▒█░░░ ▒█▒█▒█ ░▀▀▀▄▄ 
	▒█▄▄█ ▒█▄▄▄ ▄█▄ ▒█░▒█ ▒█▄▄▀ ▒█▄▄▄ ▒█░░▀█     ▒█▄▄█ ▒█░░▒█ ▒█▄▄▄█ 
────────────────CMS de Uso Privado 2015  by Jeihden─────────────────────
\ ♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛*/
    ob_start();
    require_once 'global.php';
    $Functions->Logged("true");
	$myusername = $_SESSION['username'];
	$ticket = $Functions->GenerateTicket(); 
	$query = $db->query("UPDATE users SET  auth_ticket = '{$ticket}', ip_last = '" . USER_IP . "', last_used = '". time() ."' WHERE username = '" . $myusername . "'");
	$users = $db->query("SELECT rank FROM users WHERE username = '" . $myusername . "'");
	$user = $users->fetch_array();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<?php global $db;$result = $db->query("SELECT * FROM cms_settings WHERE id = 1 LIMIT 1");if($result->num_rows > 0){while($data = $result->fetch_array()){ ?> 
<title><?php echo $data['hotelname']; ?> ~ Cliente</title> 
	<script type="text/javascript"> 
		var andSoItBegins = (new Date()).getTime();
		var ad_keywords = "";
		document.habboLoggedIn = true;
		var habboName = "<?php echo $_SESSION['username']; ?>";
		var habboReqPath = "<?php echo PATH; ?>";
		var habboStaticFilePath = "<?php echo CDN; ?>/web-gallery";
		var habboImagerUrl = "https://www.habbo.nl/habbo-imaging/";
		var habboPartner = "";
		var habboDefaultClientPopupUrl = "<?php echo PATH; ?>/client";
		window.name = "habboMain";
		if (typeof HabboClient != "undefined") { HabboClient.windowName = "uberClientWnd"; }
	</script> 
<link rel="shortcut icon" href="<?php echo CDN; ?>/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<script src="<?php echo CDN; ?>/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="<?php echo CDN; ?>/web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="<?php echo CDN; ?>/web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="<?php echo CDN; ?>/web-gallery/static/js/common.js" type="text/javascript"></script>
<script src="<?php echo CDN; ?>/web-gallery/static/js/fullcontent.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo CDN; ?>/web-gallery/styles/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo CDN; ?>/web-gallery/styles/buttons.css" type="text/css" />
<link rel="stylesheet" href="<?php echo CDN; ?>/web-gallery/styles/boxes.css" type="text/css" />
<link rel="stylesheet" href="<?php echo CDN; ?>/web-gallery/styles/tooltips.css" type="text/css" />
<link rel="stylesheet" href="<?php echo CDN; ?>/web-gallery/styles/habboclient.css" type="text/css" />
<link rel="stylesheet" href="<?php echo CDN; ?>/web-gallery/styles/habboflashclient.css" type="text/css" />
<script src="<?php echo CDN; ?>/web-gallery/static/js/habboflashclient.js" type="text/javascript"></script>
<!DOCTYPE html>
<html lang="es_ES">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="Diversión sin limites" />
        <script type="text/javascript" src="<?php echo CDN; ?>/js/libs2.js"></script>
        <style type="text/css"> 
            * { margin: 0; padding: 0; }
            html, #flash-container { height: 100%; text-align: left; background-color: black; }
            #flash-container { position: absolute; overflow: hidden; left: 0; top: 0; right: 0; bottom: 0; }
        </style>
        <script type="text/javascript">
        var flashvars = {
            "client.allow.cross.domain" : "0", 
            "client.notify.cross.domain" : "1", 
            "connection.info.host" : "<?php echo $data['host']; ?>", 
            "connection.info.port" : "<?php echo $data['port']; ?>", 
            "site.url" : "<?php echo PATH; ?>", 
            "url.prefix" : "<?php echo PATH; ?>", 
            "client.reload.url" : "<?php echo PATH; ?>/client.php", 
            "client.fatal.error.url" : "<?php echo PATH; ?>/client.php", 
            "client.connection.failed.url" : "<?php echo PATH; ?>/client.php", 
            "logout.url" : "<?php echo PATH; ?>/client.php", 
            "logout.disconnect.url" : "<?php echo PATH; ?>/client", 
            "external.variables.txt" : "<?php echo $data['external_variables']; ?>",
            "external.texts.txt" : "<?php echo $data['external_texts']; ?>",
			/*"external.figurepartlist.txt" : "http://localhost/swfs/gamedata/figuredata.xml",
            "external.override.texts.txt" : "http://localhost/swfs/gamedata/override/external_flash_override_texts/1.txt",
            "external.override.variables.txt" : "http://localhost/swfs/gamedata/override/external_override_variables/1.txt",*/
			"productdata.load.url" : "<?php echo $data['productdata']; ?>",
            "furnidata.load.url" : "<?php echo $data['furnidata']; ?>",  
            "sso.ticket": "<?php echo $ticket; ?>",
            "processlog.enabled" : "1", 
            "account_id" : "<?php echo $Functions->Get('id'); ?>", 
            "client.starting" : "¡Por favor, espera <?php echo $Functions->Get('username'); ?>! <?php echo $data['hotelname']; ?> se está cargando", 
            "flash.client.url" : "<?php echo $data['flash_client_url']; ?>", 
            "user.hash" : "5690170255dbf26e0275377f436614c91d1a810d", 
            "has.identity" : "1", 
            "flash.client.origin" : "popup", 
            "nux.lobbies.enabled" : "false", 
            "country_code" : "DO" 
        };

         var params = {
            "base" : "<?php echo $data['flash_client_url']; ?>",
            "allowScriptAccess" : "always",
            "menu" : "true"
        };

		swfobject.embedSWF("<?php echo $data['habbo_swf']; ?>", "flash-container", "100%", "100%", "10.1.0", "http://cdn.uber.meth0d.org/expressInstall.swf", flashvars, params, null);
        </script>
    </head>
    <body>
        <div id="flash-container"></div>
    </body>
<?php } } else{ echo '<i>No se encuentra la tabla cms_settings</i>'; }?>
</html>
<?php ob_end_flush(); ?>