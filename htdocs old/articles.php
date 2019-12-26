<?php
/* ♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛\
	░░░▒█ ▒█▀▀▀ ▀█▀ ▒█░▒█ ▒█▀▀▄ ▒█▀▀▀ ▒█▄░▒█     ▒█▀▀█ ▒█▀▄▀█ ▒█▀▀▀█ 
	░▄░▒█ ▒█▀▀▀ ▒█░ ▒█▀▀█ ▒█░▒█ ▒█▀▀▀ ▒█▒█▒█ ▀▀▀ ▒█░░░ ▒█▒█▒█ ░▀▀▀▄▄ 
	▒█▄▄█ ▒█▄▄▄ ▄█▄ ▒█░▒█ ▒█▄▄▀ ▒█▄▄▄ ▒█░░▀█     ▒█▄▄█ ▒█░░▒█ ▒█▄▄▄█ 
────────────────CMS de Uso Privado 2015  by Jeihden─────────────────────
\ ♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛♛*/
	ob_start();
	require_once 'global.php';

	$TplClass->SetParam('title', 'Noticias');
	$Functions->Logged("true");
	$TplClass->SetParam('HKLINK', '');
	$h = $db->query("SELECT * FROM cms_navi WHERE zone = 'Noticias'");
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
//FUNCIONES NEWS
	$do = $Functions->FilterText($_GET['do']);
	$key = $Functions->FilterText($_GET['key']);
	$getid = $Functions->FilterText($_GET['id']);
	$info = $db->query("SELECT * FROM cms_comments WHERE type = 'news' && posted_in = '{$getid}'");
	$cntr = $info->num_rows;
	if(empty($getid)){
		$news_new = $db->query("SELECT * FROM cms_slider ORDER BY id DESC LIMIT 1");
		$news_info = $news_new->fetch_array();
		$getid = $news_info['id'];
	}else{
		$news_new = $db->query("SELECT * FROM cms_slider WHERE id = '{$getid}' LIMIT 1");
		$news_info = $news_new->fetch_array();
	}
	if($_POST['enviar']){
		if(empty($_POST['comentario'])){
			$_SESSION['ERROR_RETURN'] = "Has dejado campos vac&iacute;os";
			header("LOCATION: ". PATH ."/Noticias?id=".$getid."");
		}else{
			$comentario = $Functions->FilterText($_POST['comentario']);
			$security = $db->query("SELECT * FROM cms_comments WHERE username = '{$_SESSION['username']}' && type = 'news' ORDER by id DESC LIMIT 1");
			$sec = $security->fetch_array();
			if($security->num_rows > 0){
				if($sec['time'] >= time() - 180){
					$_SESSION['ERROR_RETURN'] = "Debes esperar 3 min. para hacer otro comentario";
					header("LOCATION: ". PATH ."/Noticias?id=".$getid."");
				}else{
					$sql = $db->query("INSERT INTO cms_comments (username, comentario, type, posted_on, posted_in, time) VALUES ('". $_SESSION['username'] ."', '{$_POST['comentario']}', 'news', '".date("Y-m-d ")."', '{$getid}', '".time()."')");
					if($sql){
						$_SESSION['GOOD_RETURN'] = "Has dejado un comentario correctamente";
						header("LOCATION: ". PATH ."/Noticias?id=".$getid."");
					}else{
						$_SESSION['ERROR_RETURN'] = "Ha ocurrido un error indeterminado";
						header("LOCATION: ". PATH ."/Noticias?id=".$getid."");
					}
				}
			}else{
				$sql = $db->query("INSERT INTO cms_comments (username, comentario, type, posted_on, posted_in, time) VALUES ('". $_SESSION['username'] ."', '{$_POST['comentario']}', 'news', '".date("Y-m-d ")."', '{$getid}', '".time()."')");
				$_SESSION['GOOD_RETURN'] = "Has dejado un comentario correctamente";
				header("LOCATION: ". PATH ."/Noticias?id=".$getid."");
			}
		}
	}
	if($do == "dele" && !empty($key)){
		$db->query("INSERT INTO cms_stafflogs (username, action, message, rank, userid, timestamp) VALUES ('". $_SESSION['username'] ."','Borrar Comentarios (Noticias)', 'Ha borrado un comentario', '". $user['rank'] ."', '". $user['id'] ."', '".date("Y-m-d ")."')");
		$db->query("DELETE FROM cms_comments WHERE id = '{$key}' && type = 'news' LIMIT 1");
		$_SESSION['GOOD_RETURN'] = "Comentario borrado correctamente";
		header("LOCATION: ". PATH ."/Noticias?id=".$getid."");						
	}
//END FUNCIONES NEWS	
	$TplClass->AddTemplate("Header", "header");
	$TplClass->Display('generic" style="display:table;');
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
<style type="text/css">input[type="text"],input[type="password"]{background-color:#F1F1F1;border:1px solid #999999;width:175px;padding:5px;font-family:verdana;font-size:10px;color:#666666;}input[type="submit"]{background-color:#F1F1F1;border:1px solid #999999;padding:5px;font-family:verdana;font-size:10px;color:#666666;}textarea{background-color:#F1F1F1;border:1px solid #999999;padding:5px;width:530px;height:70px;font-family:verdana;font-size:10px;color:#666666;}select{background-color:#F1F1F1;border:1px solid #999999;padding:5px;font-family:verdana;font-size:10px;color:#666666;}</style>
<style type="text/css">p{white-space:p-wrap;white-space:-moz-p-wrap!important;white-space:-p-wrap;white-space:-o-p-wrap;word-wrap:break-word;}</style>

	<div id="static">
		<div class="pad-body">
			<div id="column-1" style="width:200px;">
				<div id="box">
					<div class="box-title-orange">&Uacute;ltimas noticias</div>
					<div class="box-content">
						<?php
							$result = $db->query("SELECT * FROM cms_slider ORDER BY id DESC");
							if($result->num_rows > 0){
								echo '<ul style="padding: 0px 4px;">';
								while($data = $result->fetch_array()){
									if($data['id'] == $getid){
										$k = " style='color:grey;'";
									}
									echo '<a href="'. PATH .'/Noticias?id='.$data['id'].'"'.$k.'><b><li style="margin-bottom:5px;">&#9758; '.$data['title'].' &#187;</li></b></a>';
									unset($k);
								}
								echo '</ul>';
							}else{
								echo '<center><b style="color:red">No hay noticias</b></center>';
							}
						?>
					</div>
				</div>
			</div>
			<div id="column-2" style="width:550px;">
				<div id="box">
					<div class="box-title-blue"><?php echo $news_info['title']; ?></div>
					<div class="box-content">
						<a style="color:grey;">Escrito el <?php setlocale(LC_TIME,"spanish"); echo utf8_encode(strftime("%A %d de %B del %Y", $news_info['time'])); ?> por <b><?php echo $news_info['author']; ?></b></a><br><br>
						<?php echo $news_info['longstory']; ?>
					</div>
				</div>
				<div id="box">
					<div class="box-title-orange">Escribe un comentario</div>
					<div class="box-content">
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
				<div id="box">
					<div class="box-title-orange">Comentarios (<?php echo $cntr; ?>)</div>
					<div class="box-content" style="max-height: 600px;display: block;overflow: auto;"> 
						<?php global $db;
							$comentarios = $db->query("SELECT * FROM cms_comments WHERE posted_in = '{$getid}' ORDER BY id DESC");
							if($comentarios->num_rows > 0){
								while($coment = $comentarios->fetch_array()){
									$userinfo = $db->query("SELECT * FROM users WHERE username = '".$coment['username']."'");
									$emoji = $Functions->FilterTextEmoji($coment['comentario']);
									while($userrinf = $userinfo->fetch_array()){ ?>
								<table style="padding: 5px;width:100%;">
									<tbody>
										<td valign="middle" width="25">
											<a href="/Perfil?p=<?php echo $userrinf['id']; ?>"><img style="margin-top: -10px;" src="<?php echo AVATARIMAGE; ?><?php echo $userrinf['look']; ?>&size=b&direction=2&head_direction=3&gesture=sml&size=2"></a>
										</td>
										<td valign="top">
											<b style="font-size:15px;">RE: <?php echo $news_info['title']; ?></b>
											<?php 	global $db;
												$users2 = $db->query("SELECT * FROM users WHERE username = '{$_SESSION['username']}' AND password = '{$_SESSION['password']}'");
												$user1 = $users2->fetch_array();	
												if($user1['rank'] >= 9){
													echo '<u style="font-size:12px;color:orange;float:right;"><i><a href="'. PATH .'/Noticias?id='.$coment['posted_in'].'&do=dele&key='.$coment['id'].'">Borrar comentario</a></i></u>';
												}
											?>
											<br/>
											<?php 
											if($userrinf['rank'] == 2){
												echo '<img style="margin-top: 0px;float:right;" src="'.BADGEURL.'VIP.gif">';
											}elseif($userrinf['rank'] == 4){
												echo '<img style="margin-top: 0px;float:right;" src="'.BADGEURL.'/AMB.gif">';
											}elseif($userrinf['rank'] == 5){
												echo '<img style="margin-top: 0px;float:right;" src="'.BADGEURL.'MOD.gif">';
											}elseif($userrinf['rank'] >= 6 AND $userrinf['rank'] <= 9){
												echo '<img style="margin-top: 0px;float:right;" src="'.BADGEURL.'ADM.gif">';
											}elseif($userrinf['rank'] >= 10){
												echo '<img style="margin-top: 0px;float:right;" src="'.BADGEURL.'ADM.gif">';
											}
											?><br />
											<i style="font-size:14px;"><?php echo $emoji ?></i><br /><br /> 
											<i style="float:right;font-size:13px;">Por: <b style="color:orange;"><u><a href="/Perfil?p=<?php echo $userrinf['id']; ?>"><?php echo utf8_encode($coment['username']); ?></a></u></b> enviado el <?php echo $coment['posted_on']; ?></i><br /> 
											</br>
											<hr width="100%">
										</td>                     
									</tbody>
								</table>
						<?php }}}else{echo "<center><b style='color:red'>No hay comentarios</b></center>";}?>	
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