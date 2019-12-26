<?php
/* ♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛\
	░░░▒█ ▒█▀▀▀ ▀█▀ ▒█░▒█ ▒█▀▀▄ ▒█▀▀▀ ▒█▄░▒█     ▒█▀▀█ ▒█▀▄▀█ ▒█▀▀▀█ 
	░▄░▒█ ▒█▀▀▀ ▒█░ ▒█▀▀█ ▒█░▒█ ▒█▀▀▀ ▒█▒█▒█ ▀▀▀ ▒█░░░ ▒█▒█▒█ ░▀▀▀▄▄ 
	▒█▄▄█ ▒█▄▄▄ ▄█▄ ▒█░▒█ ▒█▄▄▀ ▒█▄▄▄ ▒█░░▀█     ▒█▄▄█ ▒█░░▒█ ▒█▄▄▄█ 
────────────────CMS de Uso Privado 2015  by Jeihden─────────────────────
\ ♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛*/
	ob_start();
	require_once 'global.php';

	$TplClass->SetParam('title', 'Ajustes');
	$Functions->Logged("true");
	$TplClass->SetParam('HKLINK', '');
	$h = $db->query("SELECT * FROM cms_navi WHERE zone = 'Ajustes'");
	$head = $h->fetch_array();
	$TplClass->SetParam('TAB', $head['TAB']);
	$TplClass->SetParam('zone', $head['zone']);


	$users = $db->query("SELECT rank FROM users WHERE username = '{$_SESSION['username']}' AND password = '{$_SESSION['password']}'");
	$user = $users->fetch_array();
	if($user['rank'] >= MINRANK){
		$TplClass->SetParam('HKLINK', '<a href='.HK.'>ACP</a>');
	}
	
	$TplClass->SetAll();

	if( $_SESSION['ERROR_RETURN'] ){
		$TplClass->SetParam('error', '<div id="generic"><div id="error">'.$_SESSION['ERROR_RETURN'].'</div></div>');
		unset($_SESSION['ERROR_RETURN']);
	}
	
	if( $_SESSION['GOOD_RETURN'] ){
		$TplClass->SetParam('error', '<div id="generic"><div id="error" style="background: #88B600;border: 1px solid #88B600;">'.$_SESSION['GOOD_RETURN'].'</div></div>');
		unset($_SESSION['GOOD_RETURN']);
	}
	
	$TplClass->AddTemplate("Header", "header");
	$TplClass->Display('generic" style="display:table;');
	
//FUNCIONES DE LOS AJUSTES
	$tab  = "8";
	if($_GET['tab'] == "2"){
		$pagenum = "2";
		$pn = "Mi email";
		$png = "Cambia tu email";
	}elseif($_GET['tab'] == "3"){
		$pagenum = "3";
		$pn = "Mi contrase&ntilde;a";
		$png = "Cambia tu contrase&ntilde;a";
	}elseif($_GET['tab'] == "5"){
		$pagenum = "5";
		$pn = "Mi perfil";
		$png = "Configuración de tu Perfil";
	}elseif($_GET['tab'] == "4"){
		$pagenum = "4";
		$pg = "Vinculaci&oacute;n";
		$png = "Vincula tu cuenta!";
	}else{
		$pagenum = "1";
		$pn = "Mi Perfil";
		$png = "Cambiar tu perfil";
	}
	$page = $png;
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	if($pagenum == "2"){
		if(isset($_POST['save'])){
			$emaila = $Functions->FilterText($_POST['emaila']);
			$emailn = $Functions->FilterText($_POST['emailn']);
			$email_check = preg_match("/^[a-z0-9_\.-]+@([a-z0-9]+([\-]+[a-z0-9]+)*\.)+[a-z]{2,7}$/i", $emailn);
			if(empty($emaila) || empty($emailn)){
				$_SESSION['ERROR_RETURN'] = 'Rellena todos los campos';
				header("LOCATION: ". PATH ."/Ajustes?tab=2&return");
			}elseif($emaila !== $Functions->Get('mail')){
				$_SESSION['ERROR_RETURN'] = 'El email que pusiste no es igual al actual';
				header("LOCATION: ". PATH ."/Ajustes?tab=2&return");
			}elseif($Functions->ComprobateExist($emailn)){
				$_SESSION['ERROR_RETURN'] = 'Ese email ya esta en uso';
				header("LOCATION: ". PATH ."/Ajustes?tab=2&return");
			}elseif($email_check !== 1){
				$_SESSION['ERROR_RETURN'] = 'Inserta un nuevo email v&aacute;lido';
				header("LOCATION: ". PATH ."/Ajustes?tab=2&return");
			}else{
				$db->query("UPDATE users SET mail = '{$emailn}' WHERE id = '{$Functions->Get('id')}' LIMIT 1");													
				$_SESSION['GOOD_RETURN'] = 'Actualizado con &eacute;xito';
				header("LOCATION: ". PATH ."/Ajustes?tab=2&return");
			}
		}
	}
	if($pagenum == "3"){
		if(isset($_POST['save'])){
			$pp = $Functions->FilterText($_POST['ppassword']);
			$pnp = $Functions->FilterText($_POST['pnpass']);
			$prp = $Functions->FilterText($_POST['pnrp']);
			$orpassword = $Functions->Hash($Functions->Get('username'), $pp);
			$newpassword = $Functions->Hash($Functions->Get('username'), $pnp);
			if($orpassword !== $Functions->Get('password')){
				$_SESSION['ERROR_RETURN'] = 'Tu contrase&ntilde;a actual no coincide';
				header("LOCATION: ". PATH ."/Ajustes?tab=3&return");
			}else{
				if(strlen($pnp) < 6 || strlen($pnp) > 32){
				$_SESSION['ERROR_RETURN'] = 'Inserta una contraseña v&aacute;lida';
				header("LOCATION: ". PATH ."/Ajustes?tab=3&return");
				}else{
					if($pnp !== $prp){
					$_SESSION['ERROR_RETURN'] = 'Las contrase&ntilde;as no son iguales';
					header("LOCATION: ". PATH ."/Ajustes?tab=3&return");
					}else{
						$db->query("UPDATE users SET password = '{$newpassword}' WHERE id = '{$Functions->Get('id')}' LIMIT 1");
						$_SESSION['password'] = $newpassword;
						$_SESSION['GOOD_RETURN'] = 'Actualizado con &eacute;xito';
						header("LOCATION: ". PATH ."/Ajustes?tab=3&return");
					}
				}
			}
		}
	}
	if($pagenum == "1"){
		if(isset($_POST['save'])){
			$m = $Functions->FilterText($_POST['motto']);
			$fr = $Functions->FilterText($_POST['friendRequestsAllowed']);
			if($fr){
				$fr = "0";
			}else{
				$fr = "1";
			}
			$so = $Functions->FilterText($_POST['showOnlineStatus']);
			if($so == "0"){
				$so = "0";
			}else{
				$so = "1";
			}
			$ff = $Functions->FilterText($_POST['followFriendMode']);
			if($ff == "1"){
				$ff = "0";
			}else{
				$ff = "1";
			}
			$db->query("UPDATE users SET block_newfriends = '{$fr}', motto = '{$m}', hide_online = '{$so}', hide_inroom = '{$ff}' WHERE id = '{$Functions->Get('id')}' LIMIT 1");
			$_SESSION['GOOD_RETURN'] = 'Actualizado con &eacute;xito';
			header("LOCATION: ". PATH ."/Ajustes?tab=1&return");
		}
	}
	if($pagenum == "5"){
		if(isset($_POST['save'])){
			$fb = $Functions->FilterText($_POST['fb']);
			$tw = $Functions->FilterText($_POST['tw']);
			$ptd = $Functions->FilterText($_POST['ptd']);
			$prf = $Functions->FilterText($_POST['prf']);
			$vid = $Functions->FilterText($_POST['vid']);
			$addons = $Functions->FilterText($_POST['addons']);
			$db->query("UPDATE users  SET facebook = '{$fb}', cms_twitter = '{$tw}', cms_pbackground = '{$ptd}', cms_pprofile = '{$prf}', cms_video = '{$vid}', cms_style = '{$addons}' WHERE id = '{$Functions->Get('id')}' LIMIT 1");
			$_SESSION['GOOD_RETURN'] = 'Perfil Actualizado con &eacute;xito';
			header("LOCATION: ". PATH ."/Ajustes?tab=5&return");
		}		
	}
//END FUNCIONES	
	
//COLUMNA 3
	$TplClass->Display('raven3" style="width:100px;float: right;"');
	$TplClass->Display("column-3");
	$TplClass->AddTemplate("Data/Columnas", "column-3");
	$TplClass->DisplayClosed();
	$TplClass->DisplayClosed();
//COLUMNA CENTRO
	$TplClass->Display('raven" style="width: 758px;float: left;"');
	$TplClass->AddTemplate("Data/Columnas", "column-custom");
//COLUMNA 1	
	$TplClass->Display("column-1");
	$TplClass->AddTemplate("Data/Columnas", "column-1");
	$TplClass->DisplayClosed();
//COLUMNA 2
	$TplClass->Display("column-2");
	$TplClass->AddTemplate("Data/Columnas", "column-2");
	$TplClass->DisplayClosed();
?>
<style>li{list-style:none;}</style>
<style type="text/css">input[type="text"],input[type="password"]{background-color:#F1F1F1;border:1px solid #999999;width:175px;padding:5px;font-family:verdana;font-size:10px;color:#666666;}input[type="submit"]{background-color:#F1F1F1;border:1px solid #999999;padding:5px;font-family:verdana;font-size:10px;color:#666666;}textarea{background-color:#F1F1F1;border:1px solid #999999;padding:5px;width:100%;height:70px;font-family:verdana;font-size:10px;color:#666666;}select{background-color:#F1F1F1;border:1px solid #999999;padding:5px;font-family:verdana;font-size:10px;color:#666666;}</style>
<style type="text/css">p{white-space:p-wrap;white-space:-moz-p-wrap!important;white-space:-p-wrap;white-space:-o-p-wrap;word-wrap:break-word;}</style>	
<div id="generic-body">
	<div class="pad-body">
		<style>li{list-style:none;}</style>
			<div id="column-1" style="width:200px;">
				<div id="box">
					<div class="box-title-blue"><center>Ajustes</center></div>
					<div class="box-content" style="padding-top:0px">
						<div id="settingsNavigation">
							<ul>
								<?php
								if($pagenum == "3"){ $class3 = ' class="selected" style="font-weight:bold;"'; $a_3 = ""; }
								else{ $class3 = '><a href="'. PATH .'/Ajustes?tab=3"'; $a_3 = "</a>"; } 
								
								if($pagenum == "2"){ $class2 = ' class="selected" style="font-weight:bold;"'; $a_2 = ""; }
								else{ $class2 = '><a href="'. PATH .'/Ajustes?tab=2"'; $a_2 = "</a>"; } 
								
								if($pagenum == "1"){ $class1 = ' class="selected" style="font-weight:bold;"'; $a_1 = ""; }
								else{ $class1 = '><a href="'. PATH .'/Ajustes?tab=1"'; $a_1 = "</a>"; } 
								
								if($pagenum == "5"){ $class5 = ' class="selected" style="font-weight:bold;"'; $a_5 = ""; }
								else{ $class5 = '><a href="'. PATH .'/Ajustes?tab=5"'; $a_5 = "</a>"; } 
								
								if($pagenum == "4"){ $class4 = ' class="selected" style="font-weight:bold;"'; $a_4 = ""; }
								else{ $class4 = '><a href="'. PATH .'/Ajustes?tab=4"'; $a_4 = "</a>"; } 
								?><br>
								<li<?php echo $class1; ?>>&#9758; MI ESTADO<?php echo $a_1; ?> &#187;</li>
								<li<?php echo $class2; ?>>&#9758; EMAIL Y VERIFICACI&Oacute;N<?php echo $a_2; ?> &#187;</li>
								<li<?php echo $class3; ?>>&#9758; MI CONTRASE&Ntilde;A<?php echo $a_3; ?> &#187;</li>
								<li<?php echo $class5; ?>>&#9758; MI PERFIL<?php echo $a_5; ?> &#187;</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="column-2" style="width:550px;">
				<div id="box">
					<div class="box-title-orange"><center><?php echo $png; ?></center></div>
					<div class="box-content">
						<?php if($pagenum == "3"){ ?>
							<form action="<?php echo PATH; ?>/Ajustes?save=true&tab=3" method="post" id="profileForm">
								<h3>Cambia tu contrase&ntilde;a</h3>
								<p>
									<label>Contrase&ntilde;a Actual:
										<input type="password" style="min-height: 15px;background:#ffffff;border-radius: 3px 3px 3px 3px;padding: 5px 20px;vertical-align: middle;font-size:12px;width:30%;" name="ppassword" size="32" maxlength="32" value="" id="avatarmotto" />
									</label>
								</p><br>
								<p>
									<label>Nueva Contrase&ntilde;a:
										<input type="password" style="min-height: 15px;background:#ffffff;border-radius: 3px 3px 3px 3px;padding: 5px 20px;vertical-align: middle;font-size:12px;width:30%;" name="pnpass" size="32" maxlength="32" value="" id="avatarmotto" />
									</label>
								</p><br>
								<p>
									<label>Repite la nueva Contrase&ntilde;a:
										<input type="password" style="min-height: 15px;background:#ffffff;border-radius: 3px 3px 3px 3px;padding: 5px 20px;vertical-align: middle;font-size:12px;width:30%;" name="pnrp" size="32" maxlength="32" value="" id="avatarmotto" />
									</label>
								</p><br>
								<p>
									<label>
										<img style="float:right;margin-top:-120px;" src="https://cdn.habtium.com/articles/Frank_Imagen_1.gif">
									</label>
								</p><br>
								<input type="submit" name="save" id="accept_button" style="height:40px;width:auto;margin-top:-5%;" value="Guardar Cambios"><br>
							</form>
						<?php }elseif($pagenum == "5"){ ?>
							<form action="<?php echo PATH; ?>/Ajustes?save=true&tab=5" method="post" id="profileForm">
								<h3>Ajustes de tu Perfil</h3><br>
								<p>
									<label><b>Tu Facebook:</b><br>
										http://facebook.com/<input type="text" style="min-height: 15px;background:#ffffff;border-radius: 3px 3px 3px 3px;padding: 5px 20px;vertical-align: middle;font-size:12px;width:30%;" name="fb" size="32" maxlength="32" value="<?php echo $Functions->Get('facebook'); ?>" id="avatarmotto" />
									</label>
								</p><br>
								<p>
									<label><b>Tu Twitter:</b><br>
										http://twitter.com/<input type="text" style="min-height: 15px;background:#ffffff;border-radius: 3px 3px 3px 3px;padding: 5px 20px;vertical-align: middle;font-size:12px;width:30%;" name="tw" size="32" maxlength="32" value="<?php echo $Functions->Get('cms_twitter'); ?>" id="avatarmotto" />
									</label>
								</p><br>
								<p>
									<label><b>Imagen de Fondo:</b> <a target="_blank" href="https://www.google.com.mx/search?q=habbo+home+backgrounds&es_sm=93&source=lnms&tbm=isch&sa=X&ved=0CAcQ_AUoAWoVChMI_ICg-ImHyAIVAzo-Ch35uwDL&biw=1440&bih=799">Sugerencias</a> <br>
										<input type="text" style="min-height: 15px;background:#ffffff;border-radius: 3px 3px 3px 3px;padding: 5px 20px;vertical-align: middle;font-size:12px;width:30%;" name="ptd" size="32" maxlength="500" value="<?php echo $Functions->Get('cms_pbackground'); ?>" id="avatarmotto" />
									</label>
								</p><br>
								<p>
									<label><b>Foto de Perfil:</b><br>
										<input type="text" style="min-height: 15px;background:#ffffff;border-radius: 3px 3px 3px 3px;padding: 5px 20px;vertical-align: middle;font-size:12px;width:30%;" name="prf" size="32" maxlength="500" value="<?php echo $Functions->Get('cms_pprofile'); ?>" id="avatarmotto" />
									</label>
								</p><br>
								<p>
									<label><b>Tu V&iacute;deo favorito:</b><br>
										https://www.youtube.com/watch?v=<input type="text" style="min-height: 15px;background:#ffffff;border-radius: 3px 3px 3px 3px;padding: 5px 20px;vertical-align: middle;font-size:12px;width:30%;" name="vid" size="32" maxlength="500" value="<?php echo $Functions->Get('cms_video'); ?>" id="avatarmotto" />
									</label>
								</p><br>
									<label><b>Diseño de tu P&aacute;gina:</b><br>
										<select name="addons" class="browser-default">
											<option value="<?php echo $Functions->Get('cms_style'); ?>"  selected>Diseño</option>
											<option value="girl">Almohada</option><option value="block">Bloc de notas</option><option value="speech">Bocadillo de di&aacute;logo</option><option value="default">Staff</option><option value="gold">Dorado</option><option value="note">Sticker</option><option value="silver">Metal</option><option value="hc">M&aacute;quina</option>
										</select>
									</label>
								</p><br>
								<p>
									<label>
										<img style="float:right;margin-top:-120px;" src="https://cdn.habtium.com/articles/Frank_Imagen_1.gif">
									</label>
								</p><br>
								<input type="submit" name="save" id="accept_button" style="height:40px;width:auto;margin-top:-5%;" value="Guardar Cambios"><br>
							</form>	
						<?php }elseif($pagenum == "2"){ ?>
							<form action="<?php echo PATH; ?>/Ajustes?save=true&tab=2" method="post" id="profileForm">
								<h3>Cambiar Email</h3>
								<p>
									<label>Email Actual:
										<input type="text" style="min-height: 15px;background:#ffffff;border-radius: 3px 3px 3px 3px;padding: 5px 20px;vertical-align: middle;font-size:12px;width:30%;" name="emaila" size="32" maxlength="32" value="" id="avatarmotto" />
									</label>
								</p><br>
								<p>
									<label>Nuevo Email:
										<input type="text" style="min-height: 15px;background:#ffffff;border-radius: 3px 3px 3px 3px;padding: 5px 20px;vertical-align: middle;font-size:12px;width:30%;" name="emailn" size="32" maxlength="32" value="" id="avatarmotto" />
									</label>
								</p><br>
								<p>
									<label>
										<img style="float:right;margin-top:-120px;" src="https://cdn.habtium.com/articles/Frank_Imagen_1.gif">
									</label>
								</p><br>
								<input type="submit" name="save" id="accept_button" style="height:40px;width:auto;margin-top:-5%;" value="Guardar Cambios"><br>
							</form>
						<?php }else{ ?>
							<form action="<?php echo PATH; ?>/Ajustes?save=true&tab=1" method="post" id="profileForm">
								<h3>Tu estado</h3>
								<p>Tu estado podr&aacute; ser visto por todos, &iexcl;pi&eacute;nsalo bien!</p>
								<p>
									<label>Estado:
										<input type="text" style="min-height: 15px;background:#ffffff;border-radius: 3px 3px 3px 3px;padding: 5px 20px;vertical-align: middle;font-size:12px;width:30%;" name="motto" size="32" maxlength="60" value="<?php echo $Functions->Get('motto'); ?>" id="avatarmotto" />
									</label>
								</p>
								<?php
									if($Functions->Get('hide_online') == "1"){ $c2 = ' checked="checked"'; $c2_ = ""; }else{ $c2_ = ' checked="checked"'; $c2 = ""; }
								?>
								<h3>Estado de la conexi&oacute;n</h3>
								<p>Elige qui&eacute;n puede ver si est&aacute;s conectado:<br />
									<label><input type="radio" name="showOnlineStatus" value="1"<?php echo $c2; ?>/>Nadie</label>
									<label><input type="radio" name="showOnlineStatus" value="0"<?php echo $c2_; ?>/>Todos</label>
								</p>
								<h3>Ajustes 'S&iacute;gueme'</h3>
								<p>Elige qui&eacute;n puede seguirte de una Sala a otra:<br />
									<?php
										if($Functions->Get('hide_inroom') == "1"){ $c3 = ' checked="checked"'; $c3_ = ""; }else{ $c3_ = ' checked="checked"'; $c3 = ""; }
									?>
									<label><input type="radio" name="followFriendMode" value="0" <?php echo $c3; ?>/>Nadie</label>
									<label><input type="radio" name="followFriendMode" value="1" <?php echo $c3_; ?> />Mis Amigos</label>
								</p>
								<p>
									<label>
										<img style="float:right;margin-top:-120px;" src="https://cdn.habtium.com/articles/Frank_Imagen_1.gif">
									</label>
								</p><br>
								<input type="submit" name="save" id="accept_button" style="height:40px;width:auto;margin-top:-5%;" value="Guardar Cambios">
							</form>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
//COLUMNA FOOTER	
	$TplClass->DisplayClosed();
	$TplClass->DisplayClosed();
	$TplClass->Display('generic" style="display:table;');
	$TplClass->Display('raven" style="width: 748px;float: left;');
	$TplClass->AddTemplate("Data", "footer");
	$TplClass->DisplayClosed();
	$TplClass->DisplayClosed();
	$TplClass->DisplayClosed();
	
	ob_end_flush(); 
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>