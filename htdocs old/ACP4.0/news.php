<?php
ob_start();
	require_once '../global.php';
	$TplClass->SetParam('title', 'Noticiones');
	$TplClass->SetParam('zone', 'Noticiones');
	$Functions->LoggedHk("true");
	
	$users = $db->query("SELECT * FROM users WHERE username = '{$_SESSION['username']}' AND password = '{$_SESSION['password']}'");
	$user = $users->fetch_array();
	$action = $Functions->FilterText($_GET['action']);
	$id = $Functions->FilterText($_GET['id']);

	$TplClass->SetAll();
	if( $_SESSION['ERROR_RETURN'] ){
		$TplClass->SetParam('error', '<div id="generic"><div id="error">'.$_SESSION['ERROR_RETURN'].'</div></div>');
		unset($_SESSION['ERROR_RETURN']);
	}
	if( $_SESSION['GOOD_RETURN'] ){
		$TplClass->SetParam('error', '<div id="generic"><div id="error" style="background: #88B600;border: 1px solid #88B600;">'.$_SESSION['GOOD_RETURN'].'</div></div>');
		unset($_SESSION['GOOD_RETURN']);
	}
	$result = $db->query("SELECT * FROM cms_settings WHERE id = 1 LIMIT 1");
	while($data = $result->fetch_array()){
		$SHORTNAME = $data['hotelname'];
		$FACE = $data['facebook'];
		$LOGO = $data['logo'];
	}
	if($_POST['addcamp']){
		if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['image']) && isset($_POST['link'])){
			$title = $Functions->FilterText($_POST['title']);
			$content = $_POST['content'];
			$image = $Functions->FilterText($_POST['image']);
			$link = $Functions->FilterText($_POST['link']);
			if(empty($title) || empty($image) || empty($link)){
				$_SESSION['ERROR_RETURN'] = "Has dejado campos vac&iacute;os";
				header("LOCATION: ". HK ."/news.php");
			}else{
				$dbQuery= array();
				$dbQuery['title'] = $title;
				$dbQuery['shortstory'] = $content;
				$dbQuery['image'] = $image;
				$dbQuery['link'] = $link;
				$dbQuery['author'] = $_SESSION['username'];
				$dbQuery['time'] = time();
				$query = $db->insertInto('cms_campaigns', $dbQuery);
				$db->query("INSERT INTO cms_stafflogs (username, action, message, rank, userid, timestamp) VALUES ('". $_SESSION['username'] ."','Noticiones', 'Ha agregado el Notici&oacute;n ".$title."', '". $user['rank'] ."', '". $user['id'] ."', '".date("Y-m-d ")."')");
				$_SESSION['GOOD_RETURN'] = "Notici&oacute;n agregado correctamente";
				header("LOCATION: ". HK ."/news.php");
			}
		}
	}
	if($_POST['editcamp']){
		if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['image']) && isset($_POST['link'])){
			$title = $Functions->FilterText($_POST['title']);
			$content = $_POST['content'];
			$image = $Functions->FilterText($_POST['image']);
			$link = $Functions->FilterText($_POST['link']);
				$db->query("UPDATE cms_campaigns SET title = '{$title}', shortstory = '{$content}', image = '{$image}', link = '{$link}', author = '{$_SESSION['username']}', time = '".time()."' WHERE id = '{$id}' LIMIT 1");	
				$db->query("INSERT INTO cms_stafflogs (username, action, message, rank, userid, timestamp) VALUES ('". $_SESSION['username'] ."','Noticiones', 'Ha editado el Notici&oacute;n ".$title."', '". $user['rank'] ."', '". $user['id'] ."', '".date("Y-m-d ")."')");
				$_SESSION['GOOD_RETURN'] = "Notici&oacute;n editado correctamente";
				header("LOCATION: ". HK ."/news.php");									
		}
	}
	if($action == "err" && !empty($id)){
			$db->query("INSERT INTO cms_stafflogs (username, action, message, rank, userid, timestamp) VALUES ('". $_SESSION['username'] ."','Noticiones', 'Ha borrado un Notici&oacute;n', '". $user['rank'] ."', '". $user['id'] ."', '".date("Y-m-d ")."')");
			$db->query("DELETE FROM cms_campaigns WHERE id = '{$id}' LIMIT 1");
			$_SESSION['GOOD_RETURN'] = "Notici&oacute;n borrado correctamente";
				header("LOCATION: ". HK ."/news.php");						
	}
	$TplClass->AddTemplateHK("templates", "header");
	ob_end_flush(); 
?>
	<html>
		<body>
			<div class="row">
				<?php global $db;
					if($action == "edit" && !empty($id)){ 
					$hj = $db->query("SELECT * FROM cms_campaigns WHERE id = '". $id ."'");
					$h_edit = $hj->fetch_array();		
				?>
				<div class="col-lg-6">
					<div class="panel border-1 border-orange-500">
						<div class="panel-title bg-orange-500">
							<div class="panel-head color-white"><i class="fa fa-plus-square"></i> Editar un Notici&oacute;n (ID: <?php echo $h_edit['id']; ?>)</div>
						</div>
						<div class="panel-body">
							<form action="" method="post">
								<p class="text-light margin-bottom-20">Rellena todos los campos para editar un Notici&oacute;n</p>
								<div class="form-group">
									<label for="input-text" class="control-label">T&iacute;tulo</label>
									<input type="text" class="form-control" id="input-text" name="title" placeholder="T&iacute;tulo de la noticia" value="<?php echo $h_edit['title']; ?>">
								</div>
								<div class="form-group">
									<label for="input-text" class="control-label">Contenido</label>
									<script type="text/javascript" src="http://tinymce.cachefly.net/4.2/tinymce.min.js"></script>
									<script type="text/javascript">
										tinymce.init({
											selector: "textarea",
											plugins: [
												"advlist autolink lists link image charmap print preview anchor",
												"searchreplace visualblocks code fullscreen",
												"insertdatetime media table contextmenu paste"
											],
											toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
										});
									</script>
									<textarea name="content" style="width:100%"><?php echo $h_edit['shortstory']; ?></textarea>
								</div>
								<div class="form-group">
									<label for="input-text" class="control-label">Imagen</label>
									<input type="text" class="form-control" id="input-text" name="image" placeholder="Imagen de 160x60 px" value="<?php echo $h_edit['image']; ?>">
								</div>
								
								<div class="form-group">
									<label for="input-text" class="control-label">Link</label>
									<input type="text" class="form-control" id="input-text" name="link" placeholder="Lugar a llevar al dar clic" value="<?php echo $h_edit['link']; ?>">
								</div>
								<input name="editcamp" type="submit" class="btn btn-dark bg-blue-grey-800 color-white margin-left-10" value="Guardar">
							</form>
						</div>
					</div>
				</div>
				<?php }else{ ?>
				<div class="col-lg-6">
					<div class="panel border-1 border-orange-500">
						<div class="panel-title bg-orange-500">
							<div class="panel-head color-white"><i class="fa fa-plus-square"></i> Crear un Notici&oacute;n</div>
						</div>
						<div class="panel-body">
							<form action="" method="post">
								<p class="text-light margin-bottom-20">Rellena todos los campos para agregar un Notici&oacute;n</p>
								<div class="form-group">
									<label for="input-text" class="control-label">T&iacute;tulo</label>
									<input type="text" class="form-control" id="input-text" name="title" placeholder="T&iacute;tulo de la noticia">
								</div>
								<div class="form-group">
									<label for="input-text" class="control-label">Contenido</label>
									<script type="text/javascript" src="http://tinymce.cachefly.net/4.2/tinymce.min.js"></script>
									<script type="text/javascript">
										tinymce.init({
											selector: "textarea",
											plugins: [
												"advlist autolink lists link image charmap print preview anchor",
												"searchreplace visualblocks code fullscreen",
												"insertdatetime media table contextmenu paste"
											],
											toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
										});
									</script>
									<textarea name="content" style="width:100%"></textarea>
								</div>
								<div class="form-group">
									<label for="input-text" class="control-label">Imagen</label>
									<input type="text" class="form-control" id="input-text" name="image" placeholder="Imagen de 160x60 px">
								</div>
								
								<div class="form-group">
									<label for="input-text" class="control-label">Link</label>
									<input type="text" class="form-control" id="input-text" name="link" placeholder="Lugar a llevar al dar clic">
								</div>
								<input name="addcamp" type="submit" class="btn btn-dark bg-blue-grey-800 color-white margin-left-10" value="Guardar">
							</form>
						</div>
					</div>
				</div>
						<?php } ?>
				<div class="col-lg-4">
					<div class="panel border-1 border-orange-300">
						<div class="panel-title bg-orange-300">
							<div class="panel-head color-white"><i class="fa fa-bars"></i> Noticiones del Hotel</div>
						</div>
						<div class="panel-body" style="max-height:800px;display: block;overflow: auto;">
							<?php global $db;
								$result = $db->query("SELECT * FROM cms_campaigns ORDER BY id DESC");
								if($result->num_rows > 0){
									while($data = $result->fetch_array()){
										echo '<li style="font-size:13px;">&#9758; '.$data['title'].' &#187; <div style="float:right;"><a href="'. HK .'/news.php?action=edit&id='.$data['id'].'"><b><i class="fa fa-pencil-square-o"></i> Editar</b></a> | <a href="'. HK .'/news.php?action=err&id='.$data['id'].'"><b><i class="fa fa-trash-o"></i> Borrar</b></a></div></li><p><b>Autor:</b> '.$data['author'].'<hr>';
										unset($k);
									}
									echo '</ul>';
									
								}else{
									echo '<b style="color:red;">No hay Noticiones creados</i>';
								}
							?>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="panel border-1 border-orange-200">
						<div class="panel-title bg-orange-200">
							<div class="panel-head color-white"><i class="fa fa-bars"></i> Im&aacute;genes</div>
						</div>
						<div class="panel-body" style="max-height:800px;display: block;overflow: auto;">
							<p class="text-light text-center margin-bottom-20">Arrastra la imagen al campo 'Imagen'</p>
							<img src="<?php echo CDN;?>images/me/news/ts/1.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/2.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/3.png" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/4.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/5.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/6.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/7.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/8.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/9.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/10.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/11.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/12.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/13.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/14.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/15.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/16.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/17.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/18.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/19.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/20.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/21.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/22.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/23.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/24.png" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/25.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/26.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/27.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/28.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/29.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/30.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/31.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/32.png" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/33.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/34.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/35.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/36.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/37.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/38.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/39.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/40.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/41.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/42.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/43.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/44.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/45.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/46.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/47.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/48.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/49.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/50.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/51.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/52.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/53.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/54.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/55.png" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/56.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/57.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/58.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/59.png" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/60.png" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/61.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/62.gif" style="height:50px; widht:80px;" >
							<img src="<?php echo CDN;?>images/me/news/ts/63.gif" style="height:50px; widht:80px;" >
						</div>
					</div>
				</div>
			</div>
			<?php require_once 'templates/footer.tpl'; ?>
		</body>
	</html>
<?php ob_end_flush(); ?>