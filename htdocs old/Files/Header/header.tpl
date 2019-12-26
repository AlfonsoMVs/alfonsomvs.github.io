<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"/>
		<title>{SHORTNAME}: {title}</title>
		<link rel="shortcut icon" href="{CDN}/images/favicon.ico" type="image/vnd.microsoft.icon">
		<?php global $db;
			$a = $db->query("SELECT * FROM cms_settings WHERE id = '1' LIMIT 1");
			while($style = $a->fetch_array()){ 
			if($style['design'] == 'normal'){?>
				<style><?php require_once 'generic.php'; ?></style>
		<?php
			}elseif($style['design'] == 'halloween'){?>
				<style><?php require_once 'halloween.php'; ?></style>
		<?php 
			}elseif($style['design'] == 'navidad'){?>
				<style><?php require_once 'navidad.php'; ?></style>
		<?php 
			}elseif($style['design'] == 'valentine'){?>
				<style><?php require_once 'valentine.php'; ?></style>
		<?php 
			}elseif($style['design'] == 'summer'){?>
				<style><?php require_once 'summer.php'; ?></style>
		<?php } } ?>
		<script src="{CDN}/js/v3_landing_top.js" type="text/javascript"></script>
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script>
			var andSoItBegins = (new Date()).getTime();
			var countryCode = "MX";
			var habboPageInitQueue = [];
			var habboStaticFilePath = "https://habboo-a.akamaihd.net/habboweb/63_1d5d8853040f30be0cc82355679bba7c/3389/web-gallery";
		</script>
		<link rel="stylesheet" href="{CDN}/css/v3_landing.css" type="text/css" />
	</head>

	<body>
		<!--FORGOT-->
		<div id="overlay"></div>
		<div id="change-password-form" class="overlay-dialog" style="display: none;">
			<div id="change-password-form-container" class="clearfix form-container">
				<h2 id="change-password-form-title" class="bottom-border">¿Encontraste un problema?</h2>
				<div id="change-password-form-content" style="display: none;">
					<form method="post" action="/functions.php" id="forgotten-pw-form">
						<span>Por favor, introduce de forma breve y concreta el error o inconforme:</span>
						<div id="email" class="center bottom-border">
							<textarea style="height:100px;text-align:left;font-size:14px;" type="text" id="change-password-email-address" name="BugReporter" value="" class="email-address" maxlength="500"/></textarea>
							<div id="change-password-error-container" class="error" style="display: none;">Por favor, introduce un texto</div>
						</div>
					</form>
					<div class="change-password-buttons">
						<a href="#" id="change-password-cancel-link">Cancelar</a>
						<a href="#" id="change-password-submit-button" class="new-button"><b>Enviar</b><i></i></a>
					</div>
				</div>
			</div>
			<div id="change-password-form-container-bottom" class="form-container-bottom"></div>
		</div>
		<script type="text/javascript">
			function initChangePasswordForm() {
				ChangePassword.init();
			}
			if (window.HabboView) {
				HabboView.add(initChangePasswordForm);
			} else if (window.habboPageInitQueue) {
				habboPageInitQueue.push(initChangePasswordForm);
			}
		</script>
		 <!--END FORGOT-->
		<div id="header-container">
			<div id="header" class="clearfix">																																																																																																																																																																																																																																																																																																																																																																																										<?php echo'<i style="color: white;text-align: center;font-size:0px;"> &#79;&#110;&#101;&#67;&#77;&#83; &#98;&#121; &#74;&#101;&#105;&#104;&#100;&#101;&#110;</i>'; ?>
				<h1><a href="/"><img src="{LOGO}"></a></h1>
				<div id="jeihden">
				<div id="subnavi-search">
					<div id="subnavi-search-upper">
						<ul id="subnavi-search-links">
							<li><a href="" target="habbohelp">{HKLINK}</a></li>
							<li><a href='#' id='forgot-password' class='sub-label'><u>Reportar un Bug</u></a></li>
							<li><a href="/logout.php" style="color:black">Salir</a></li>
						</ul>
					</div>
				</div>
				</div>
				<?php global $db;
					$results = $db->query("SELECT * FROM cms_settings WHERE id = '1' LIMIT 1");
					while($info = $results->fetch_array()){ 
					if($info['v3_style'] == 0){?>
				<!--NAVEGADOR-->
				<ul id="navi">
					<?php 	global $db;
						$search = $db->query("SELECT * FROM cms_header ORDER BY id ASC");
						if($search->num_rows > 0){
							while($navis = $search->fetch_array()){?>
							
							<li <?php if($TAB == $navis['id']){?> class="selected"<?php }else{?>id="<?php if($navis['new'] == 1){ echo 'tab-register-now'; }else{ echo ''; } ?>" class="<?php if($navis['new'] == 1){ echo 'tab-register-now'; }else{ echo ''; } ?>"<?php }?>><?php if($TAB == $navis['id']){ ?> <a><?php }else{?><a href="<?php echo $navis['zone'];?>"><?php } ?><?php echo $navis['name']?></a><span></span></li>
					
					<?php } }else{ echo '<i>No hay navis a mostrar</i>'; } ?>
				</ul>
				<!-- END NAVEGADOR-->
				<?php } }?>
				<div id="habbos-online"><div class="rounded"><span><b>{USERSON}</b> Usuarios Conectados<span id="clock" style="padding-bottom:0px;padding-top:5px;"><a href="/">Refrescar</a></span></div></div>
			</div>
			
			<?php global $db;
					$resultados = $db->query("SELECT * FROM cms_settings WHERE id = '1' LIMIT 1");
					while($infos = $resultados->fetch_array()){ 
					if($infos['v3_style'] == 1){?>
			<!--	HEADER V3 STYLE -->
			<div id="content-container">
				<div id="navi1-container" class="pngbg">
					<div id="navi1" class="pngbg clearfix">
					<ul>
					
						<?php 	global $db;
						$search = $db->query("SELECT * FROM cms_header ORDER BY id ASC");
						if($search->num_rows > 0){
							while($navis = $search->fetch_array()){?>
							
							<li <?php if($TAB == $navis['id']){?> class="selected left_<?php echo $navis['color'];?>"<?php }else{?>class="left_<?php echo $navis['color'];?>"<?php }?>><?php if($TAB == $navis['id']){ ?> <a><?php }else{?><a href="<?php echo $navis['zone'];?>"><?php } ?><?php echo $navis['name']?></a><span></span></li>
					
						<?php } }else{ echo '<i>No hay navis a mostrar</i>'; } ?>
					
						
						<a href="{PATH}/logout.php"><li class="right_red">Salir</li></a>
						<a href="{PATHCLIENT}" target="_blank"><li class="right_green">Entrar a {SHORTNAME}</li></a>
					</ul>
					</div>
				</div>
			</div>
			<!--END HEADER V3 STYLE-->
			<?php } }?>
		</div>

		<div id="content-container">
			<div id="navi2-container" class="pngbg">
				<div id="navi2" class="pngbg clearfix">
					<ul><!--SUB-NAVEGADOR-->
						<?php 	global $db;
						$buscar = $db->query("SELECT * FROM cms_navi WHERE TAB = '$TAB' ORDER BY id ASC");
						if($buscar->num_rows > 0){
							while($subnav = $buscar->fetch_array()){?>
							
							<li <?php if($zone == $subnav['zone']){?> class="selected"<?php }else{?>class=""<?php }?>><?php if($zone == $subnav['zone']){ ?><?php }else{?><a href="<?php echo $subnav['zone'];?>"><?php } ?><?php echo $subnav['name']?></a><span></span></li>
					
						<?php } } ?>
					</ul>
				</div>
			</div>
		</div><br>
		<script src="{CDN}/js/v3_landing_bottom.js" type="text/javascript"></script>
{ERROR}