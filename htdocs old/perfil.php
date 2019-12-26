<?php
/* ♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛\
	░░░▒█ ▒█▀▀▀ ▀█▀ ▒█░▒█ ▒█▀▀▄ ▒█▀▀▀ ▒█▄░▒█     ▒█▀▀█ ▒█▀▄▀█ ▒█▀▀▀█ 
	░▄░▒█ ▒█▀▀▀ ▒█░ ▒█▀▀█ ▒█░▒█ ▒█▀▀▀ ▒█▒█▒█ ▀▀▀ ▒█░░░ ▒█▒█▒█ ░▀▀▀▄▄ 
	▒█▄▄█ ▒█▄▄▄ ▄█▄ ▒█░▒█ ▒█▄▄▀ ▒█▄▄▄ ▒█░░▀█     ▒█▄▄█ ▒█░░▒█ ▒█▄▄▄█ 
────────────────CMS de Uso Privado 2015  by Jeihden─────────────────────
\ ♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛*/
	ob_start();
	require_once 'global.php';

	$TplClass->SetParam('title', 'Perfiles');
	$Functions->Logged("allow");
	$TplClass->SetParam('HKLINK', '');
	$h = $db->query("SELECT * FROM cms_navi WHERE zone = 'Perfil?p={MYID}'");
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
		$TplClass->SetParam('error', '<div id="generic"><div id="error">'.$_SESSION['ERROR_RETURN'].'</div></div><br>');
		unset($_SESSION['ERROR_RETURN']);
	}
	
	if( $_SESSION['GOOD_RETURN'] ){
		$TplClass->SetParam('error', '<div id="generic"><div id="error" style="background: #88B600;border: 1px solid #88B600;">'.$_SESSION['GOOD_RETURN'].'</div></div><br>');
		unset($_SESSION['GOOD_RETURN']);
	}
	
	$TplClass->AddTemplate("Header", "header");
	$TplClass->Display('generic" style="display:table;');
	
//FUNCIONES DEL PERFIL
	$MYID = $Functions->GetID();
	$getid = $Functions->FilterText($_GET['p']);
	$usersh = $db->query("SELECT * FROM users_badges WHERE user_id = '{$getid}' ORDER by id ASC LIMIT 1");
	$badgeusrhome = $usersh->fetch_array();
	$usersh2 = $db->query("SELECT * FROM users_badges WHERE user_id = '{$getid}'");
	$badgesusrhome = $usersh2->fetch_array();
	$do = $Functions->FilterText($_GET['do']);
	$key = $Functions->FilterText($_GET['key']);
	if(empty($getid)){
		$perfil = $db->query("SELECT * FROM users ORDER BY id DESC LIMIT 1");
		$userhome = $perfil->fetch_array();
		$getid = $Functions->FilterText($userhome['id']);
	}else{
		$perfil = $db->query("SELECT * FROM users WHERE id = '{$getid}' LIMIT 1");
		$userhome = $perfil->fetch_array();
	}
	if($_POST['enviar']){
		if(empty($_POST['comentario'])){
			$_SESSION['ERROR_RETURN'] = "Has dejado campos vac&iacute;os";
			header("LOCATION: ". PATH ."/Perfil?p=".$getid."");
		}else{
			$comentario = $Functions->FilterText($_POST['comentario']);
			$security = $db->query("SELECT * FROM cms_comments WHERE username = '{$_SESSION['username']}' && type = 'profile' ORDER by id DESC LIMIT 1");
			$sec = $security->fetch_array();
			if($security->num_rows > 0){
				if($sec['time'] >= time() - 180){
					$_SESSION['ERROR_RETURN'] = "Debes esperar 3 min. para hacer otra publicaci&oacute;n";
					header("LOCATION: ". PATH ."/Perfil?p=".$getid."");
				}else{
					$sql = $db->query("INSERT INTO cms_comments (username, comentario, type, posted_on, posted_in, time) VALUES ('". $_SESSION['username'] ."', '{$_POST['comentario']}', 'profile', '".date("Y-m-d ")."', '{$getid}', '".time()."')");
					if($sql){
						$_SESSION['GOOD_RETURN'] = "Has dejado un comentario correctamente";
						header("LOCATION: ". PATH ."/Perfil?p=".$getid."");
					}else{
						$_SESSION['ERROR_RETURN'] = "Ha ocurrido un error indeterminado";
						header("LOCATION: ". PATH ."/Perfil?p=".$getid."");
					}
				}
			}else{
				$sql = $db->query("INSERT INTO cms_comments (username, comentario, type, posted_on, posted_in, time) VALUES ('". $_SESSION['username'] ."', '{$_POST['comentario']}', 'profile', '".date("Y-m-d ")."', '{$getid}', '".time()."')");
				if($sql){
					$_SESSION['GOOD_RETURN'] = "Has dejado un comentario correctamente";
					header("LOCATION: ". PATH ."/Perfil?p=".$getid."");
				}else{
					$_SESSION['ERROR_RETURN'] = "Ha ocurrido un error indeterminado";
					header("LOCATION: ". PATH ."/Perfil?p=".$getid."");
				}
			}
		}
	}
	if($do == "dele" && !empty($key)){
		$db->query("INSERT INTO cms_stafflogs (username, action, message, rank, userid, timestamp) VALUES ('". $_SESSION['username'] ."','Borrar Comentarios (Perfil)', 'Ha borrado un comentario del perfil con id {$getid}', '". $user['rank'] ."', '". $user['id'] ."', '".date("Y-m-d ")."')");
		$db->query("DELETE FROM cms_comments WHERE id = '{$key}' && type = 'profile' LIMIT 1");
		$_SESSION['GOOD_RETURN'] = "Comentario borrado correctamente";
		header("LOCATION: ". PATH ."/Perfil?p=".$getid."");					
	}
//END FUNCIONES	
	
//COLUMNA 3
	$TplClass->Display('raven3" style="width:100px;float: right;"');
	$TplClass->Display("column-3");
	$TplClass->AddTemplate("Data/Columnas", "column-3");
	$TplClass->DisplayClosed();
	$TplClass->DisplayClosed();
//COLUMNA CENTRO
	$TplClass->Display('raven" style="width: 758px;height:1000px;float: left;background-image:url('. $userhome['cms_pbackground'] .');border:1px;border-radius:5px;"');
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
	<div id="static">
		<div class="pad-body" style="padding:10px;">
			<div id="column-1" style="width:420;">
			<?php if($MYID == $getid){ echo '<a href="/Ajustes?tab=5"><input type="submit" name="buscador" id="edit_button" style="float:left;height:25px;width:60px;margin-top:-3.5%;" value="Editar"></a>'; } ?>	
				<div id="box_homes">
					<div class="box_<?php echo $userhome['cms_style'] ?>LFT">Mi Libro de invitados</div>
					<div class="box_<?php echo $userhome['cms_style'] ?>LFT-content">
						<div style="max-height:300px;display: block;overflow: auto;margin-bottom:5px;">
							<?php global $db;
								$comentarios = $db->query("SELECT * FROM cms_comments WHERE posted_in = '{$getid}' && type = 'profile' ORDER BY id DESC");
								if($comentarios->num_rows > 0){
									while($coment = $comentarios->fetch_array()){
										$userinfo = $db->query("SELECT * FROM users WHERE username = '".$coment['username']."'");
										$emoji = $Functions->FilterTextEmoji($coment['comentario']);
										while($userrinf = $userinfo->fetch_array()){?>
											<table style="padding: 5px;width:100%;">
												<tbody>
													<td valign="middle" width="25">
														<a href="/Perfil?p=<?php echo $userrinf['id']; ?>"><img style="margin-top: -10px;" src="<?php echo AVATARIMAGE; ?><?php echo $userrinf['look']; ?>&size=s&direction=2&head_direction=2&gesture=sml"></a>
													</td>
													<td valign="top">
														<?php 	global $db;
															$users2 = $db->query("SELECT * FROM users WHERE username = '{$_SESSION['username']}' AND password = '{$_SESSION['password']}'");
															$user1 = $users2->fetch_array();	
															if($user1['rank'] >= 9){
																echo '<u style="font-size:12px;color:orange;float:right;"><i><a href="'. PATH .'/Perfil?p='.$coment['posted_in'].'&do=dele&key='.$coment['id'].'">Borrar comentario</a></i></u>';
															}
														?>
														<a href="/Perfil?p=<?php echo $userrinf['id']; ?>"><b style="font-size:13px;"><?php echo utf8_encode($coment['username']); ?></b></a><p>
														<i style="font-size:13px;"><?php echo $emoji ?></i>
														<div style="font-size:12px;color:gray;float:right;"><?php echo $coment['posted_on']; ?></div>
														</br>
														<hr  style="border:1px dotted black;" width="100%">
													</td>					  
												</tbody>
											</table>
							<?php }}}else{echo "<center><b style='color:red'>No hay ning&uacute;n mensaje en el libro de invitados</b></center>";}?>	
						</div>
					</div>
				</div>
				<div id="box_homes">
					<div class="box_<?php echo $userhome['cms_style'] ?>LFT">Publicar un nuevo mensaje</div>
					<div class="box_<?php echo $userhome['cms_style'] ?>LFT-content">
						<form name="coment" id="coment" action="" method="post">
							<table cellpadding="0" cellspacing="0">
								<tbody>
									<script type="text/javascript">
										function Emoticons(texto)
										{
											document.getElementById('commentsaa').value += ' '+texto;
										}
										function traspaso() 
										{ 
											document.forms['formulario']['comentario'].value=document.forms['formulario']['color'].value; 
										}
									</script>
									<tr>
										<td>
											<center>										
												<a onclick="Emoticons(':D');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_sonriente.png' width='24' height='24'></a>												
												<a onclick="Emoticons(':P');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_lengua3.png' width='24' height='24'></a>												
												<a onclick="Emoticons('*guino*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_guino.png' width='24' height='24'></a>												
												<a onclick="Emoticons(':|');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_plana2.png' width='24' height='24'></a>												
												<a onclick="Emoticons('x_x');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_xx.png' width='24' height='24'></a>												
												<a onclick="Emoticons('*risa*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_sonriente2.png' width='24' height='24'></a>												
												<a onclick="Emoticons('*heart*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_corazon.png' width='24' height='24'></a>												
												<a onclick="Emoticons(':poop:');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_poop.png' width='24' height='24'></a>												
												<a onclick="Emoticons('*triste*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_triste.png' width='24' height='24'></a>												
												<a onclick="Emoticons('XD');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_sonriente3.png' width='24' height='24'></a>												
												<a onclick="Emoticons('*lengua*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_lengua2.png' width='24' height='24'></a>												
												<a onclick="Emoticons(';P');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_lengua1.png' width='24' height='24'></a>												
												<a onclick="Emoticons(':O');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_ooh.png' width='24' height='24'></a>												
												<a onclick="Emoticons('*sexy*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_sonriente4.png' width='24' height='24'></a>												
												<a onclick="Emoticons(':*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_kiss1.png' width='24' height='24'></a>												
												<a onclick="Emoticons('*kiss*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_kiss.png' width='24' height='24'></a>												
												<a onclick="Emoticons('O_O');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_ooh1.png' width='24' height='24'></a>												
												<a onclick="Emoticons('^_^');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_sonriente5.png' width='24' height='24'></a>												
												<a onclick="Emoticons(':@');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_enojado.png' width='24' height='24'></a>												
												<a onclick="Emoticons('Q.Q');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_triste2.png' width='24' height='24'></a>												
												<a onclick="Emoticons(':/');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_triste1.png' width='24' height='24'></a>												
												<a onclick="Emoticons('*love*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_ojos.png' width='24' height='24'></a>												
												<a onclick="Emoticons('-_-');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_plana.png' width='24' height='24'></a>												
												<a onclick="Emoticons('*angel*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_angel.png' width='24' height='24'></a>												
												<a onclick="Emoticons('*lentes*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_lentes.png' width='24' height='24'></a>												
												<a onclick="Emoticons('*applause*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_applause.png' width='24' height='24'></a>												
												<a onclick="Emoticons('*god*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_god.png' width='24' height='24'></a>												
												<a onclick="Emoticons('*strong*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_strong.png' width='24' height='24'></a>												
												<a onclick="Emoticons('*decepcionado*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_decepcion.png' width='24' height='24'></a>												
												<a onclick="Emoticons('*sinpalabras*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_sinpalabras.png' width='24' height='24'></a>												
												<a onclick="Emoticons('*star*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_star.png' width='24' height='24'></a>												
												<a onclick="Emoticons('*contodo*');"><img src='<?php echo CDN; ?>/images/icons/emojis/carita_golpe.png' width='24' height='24'></a>
											</center>
										</td>
										<tr>
											<td><textarea name="comentario" id="commentsaa" maxlength="500"></textarea></td>
										</tr>
										<tr>
											<td><input style="margin-top:5px;" type="submit" name="enviar" id="enviar" value="Enviar" /></td>
										</tr>	 
									</tr>
								</tbody>
							</table>						 
						</form>
					</div>
				</div>
				<div id="box_homes">
					<div class="box_<?php echo $userhome['cms_style'] ?>LFT">Mi V&iacute;deo Favorito</div>
					<div class="box_<?php echo $userhome['cms_style'] ?>LFT-content">
						<iframe width="100%" height="325" src="https://www.youtube.com/embed/<?php echo $userhome['cms_video']; ?>" frameborder="0" ></iframe>
					</div>
				</div>
			</div>
			<div id="column-2" style="width:300;">
				<a href="http://facebook.com/<?php echo $userhome['facebook']; ?>" target="_blank"><img style="float:right;margin-top:-6%;" src="https://fbstatic-a.akamaihd.net/rsrc.php/yl/r/H3nktOa7ZMg.ico" /></a>
				<a href="http://twitter.com/<?php echo $userhome['cms_twitter']; ?>" target="_blank"><img style="float:right;margin-top:-6%;" src="https://abs.twimg.com/favicons/favicon.ico" /></a>				
				<div id="box_homes">
					<div class="box_<?php echo $userhome['cms_style'] ?>RH">MI PERFIL</div>
					<div class="box_<?php echo $userhome['cms_style'] ?>RH-content" style="padding:30px;padding-top:5px;">
						<img style="border-radius:5px;margin-left:10px;" src="<?php echo $userhome['cms_pprofile'] ?>" width="130" height="130">
						<div style="background-color: rgba(0, 0, 0, 0.10);width:80px;height:130px;border-radius:3px;float:right;margin-right:10px;">
							<center>
								<a href=""><b><?php echo $userhome['username']; ?></b></a>
								<a href=""><?php if($userhome['online'] == 1){echo '<img src="/gallery/images/1.gif">';}else{echo '<img src="/gallery/images/0.gif">';}?></a>
								<img style="margin-top:-10px;" src="<?php echo AVATARIMAGE; ?><?php echo $userhome['look']; ?>&size=1&direction=4&head_direction=4&img_format=gif"/>
							</center>
						</div><br>
						<div style="background-color: rgba(0, 0, 0, 0.10);width:150px;height:75px;margin-bottom:5px;border-radius:3px;margin-left:10px;">	
								<b>Misi&oacute;n:</b> <?php echo $userhome['motto']; ?><p>
								<b>&Uacute;ltima Cnx:</b> <?php setlocale(LC_TIME,"spanish"); echo utf8_encode(strftime("%x", $userhome['last_online'])); ?>
								<b>Se registr&oacute; el:</b> <?php setlocale(LC_TIME,"spanish"); echo utf8_encode(strftime("%A %d de %B del %Y", $userhome['account_created'])); ?>
						</div>
						<div style="background-color: rgba(0, 0, 0, 0.10);width:60px;height:75px;border-radius:3px;float:right;margin-right:10px;margin-top:-33.5%;">
							<center><b>Es de:</b><p>
							<img style="margin-top:12%;" src="<?php echo BADGEURL . $badgeusrhome['badge_id'] ?>.gif"></center>
						</div>
					</div>
				</div>
				<div id="box_homes">
					<div class="box_<?php echo $userhome['cms_style'] ?>RH">Placas y Recompensas</div>
					<div class="box_<?php echo $userhome['cms_style'] ?>RH-content">
						<div style="max-height:200px;display: block;overflow: auto;margin-bottom:5px;">	
							<?php 	$query_user = $db->query("SELECT * FROM users_badges WHERE user_id = '{$getid}'");
									if($query_user->num_rows > 0){
										while($perfil = $query_user->fetch_array()){?>
											<img style="padding:5px;"src="<?php echo BADGEURL . $perfil['badge_id']; ?>.gif">
							<?php  	}}else{echo '<center><b style="color:red;">El usuario no cuenta con ninguna Placa a&uacute;n</b></center>';}?>
						</div>
					</div>
				</div>
				<div id="box_homes">
					<div class="box_<?php echo $userhome['cms_style'] ?>RH">Buscar a un Usuario</div>
					<div class="box_<?php echo $userhome['cms_style'] ?>RH-content">
						<form action="/functions.php" method="POST">
							<input placeholder="Buscar usuario..." type="text" style="margin-top:5px;min-height:30px;background:#ffffff;border-radius: 3px 3px 3px 3px;padding: 5px 20px;vertical-align: middle;font-size:12px;width:65%;" name="palabra" />
							<input type="submit" name="buscador" id="accept_button" style="height:40px;width:auto;margin:1%;" value="Buscar">
						</form>
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