<?php global $db;
	$busc = $db->query("SELECT * FROM cms_addons WHERE title = 'Salas Recomendadas' && zone = '$zone'  LIMIT 1");
	if($busc->num_rows > 0){
		while($column1 = $busc->fetch_array()){
			if($column1['type'] == 'addon' && $column1['visible'] == 1){?>	
				<div id="column1">
					<div id="box">
						<div class="box-title-<?php echo $column1['color']; ?>"><?php echo $column1['title']; ?></div>
						<div class="box-content"> 
							<?php 	global $db;
								$result = $db->query("SELECT * FROM rooms_data  ORDER BY id DESC LIMIT 3");
								if($result->num_rows > 0){
									while($data = $result->fetch_array()){ 	
									if($back == "#FFFFF"){
										$back = " rgb(235, 235, 235)";
									}else{
										$back = "#FFFFF";}
									$userinfo = $db->query("SELECT * FROM users WHERE username = '".$data['owner']."'");
									if($userinfo->num_rows > 0){
									while($userrinf = $userinfo->fetch_array()){?>
										<li id="showuser" style="background-color:<?php echo $back; ?>">
											<img src="{CDN}/images/me/rooms/room_icon_3.gif" style="margin-top:10px;">
											<div id="showuser-about">
												<img src="{CDN}/images/me/rooms/room_enter.png" style="float:right;margin-top: 0px;margin-right:-20px;"><a href="/client" target="_blank"><u style="float:right;color:green;">Ir a la Sala</u></a>
												<div id="showuser-title"><b><?php echo utf8_encode($data['caption']) ?></b></div>
												<div style="color:#808080;"><?php echo utf8_encode($data['description']) ?></div>
												<div style="color:#808080;margin-left:20px;"><b>Dueñ@: </b><a href="Perfil?p=<?php echo $userrinf['id']; ?>"><u style="color:orange;"><?php echo utf8_encode($data['owner']) ?></u></a></div><br>								
											</div>
										</li>
							<?php }}}}else{ echo '<center><b style="color:red;">No hay Salas para mostrar</b></center>'; } ?>
						</div>
					</div>
				</div>		
<?php }elseif($column1['type'] == 'custom' && $column1['visible'] == 1){ ?>
				<div id="column1">
					<div id="box">
						<?php 	global $db;
								$result = $db->query("SELECT * FROM rooms_data  ORDER BY id DESC LIMIT 3");
								if($result->num_rows > 0){
									while($data = $result->fetch_array()){ 	
									if($back == "#FFFFF"){
										$back = " rgb(235, 235, 235)";
									}else{
										$back = "#FFFFF";}
									$userinfo = $db->query("SELECT * FROM users WHERE username = '".$data['owner']."'");
									if($userinfo->num_rows > 0){
									while($userrinf = $userinfo->fetch_array()){?>
										<li id="showuser" style="background-color:<?php echo $back; ?>">
											<img src="{CDN}/images/me/rooms/room_icon_3.gif" style="margin-top:10px;">
											<div id="showuser-about">
												<img src="{CDN}/images/me/rooms/room_enter.png" style="float:right;margin-top: 0px;margin-right:-20px;"><a href="/client" target="_blank"><u style="float:right;color:green;">Ir a la Sala</u></a>
												<div id="showuser-title"><b><?php echo utf8_encode($data['caption']) ?></b></div>
												<div style="color:#808080;"><?php echo utf8_encode($data['description']) ?></div>
												<div style="color:#808080;margin-left:20px;"><b>Dueñ@: </b><a href="Perfil?p=<?php echo $userrinf['id']; ?>"><u style="color:orange;"><?php echo utf8_encode($data['owner']) ?></u></a></div><br>								
											</div>
										</li>
							<?php }}}}else{ echo '<center><b style="color:red;">No hay Salas para mostrar</b></center>'; } ?>
					</div>
				</div>		
<?php } } }?>		