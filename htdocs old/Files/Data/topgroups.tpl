<?php global $db;
	$busc = $db->query("SELECT * FROM cms_addons WHERE title = 'Top Grupos' && zone = '$zone'  LIMIT 1");
	if($busc->num_rows > 0){
		while($column2 = $busc->fetch_array()){
			if($column2['type'] == 'addon' && $column2['visible'] == 1){?>	
				<div id="column2">
					<div id="box">
						<div class="box-title-<?php echo $column2['color']; ?>"><?php echo $column2['title']; ?></div>
						<div class="box-content"> 
							<?php 	global $db;
								$result = $db->query("SELECT * FROM groups_data  ORDER BY id DESC LIMIT 3");
								if($result->num_rows > 0){
									while($data = $result->fetch_array()){ 	
									if($back == "#FFFFF"){
										$back = " rgb(235, 235, 235)";
									}else{
										$back = "#FFFFF";}
									$userinfo = $db->query("SELECT * FROM users WHERE id = '".$data['owner_id']."'");
									if($userinfo->num_rows > 0){
									while($userrinf = $userinfo->fetch_array()){?>
										<li id="showuser" style="background-color:<?php echo $back; ?>">
											<img src="{PATH}/habbo-imaging/badge/<?php echo $data['badge']; ?>" style="margin-top:10px;">
											<div id="showuser-about">
												<div id="showuser-title"><b><?php echo utf8_encode($data['name']) ?></b></div>
												<div style="color:#808080;"><?php echo utf8_encode($data['desc']) ?></div>
												<div style="color:#808080;margin-left:20px;"><b>Fundador/a: </b><a href="Perfil?p=<?php echo $userrinf['id']; ?>"><u style="color:orange;"><?php echo utf8_encode($userrinf['username']) ?></u></a></div><br>								
											</div>
										</li>
							<?php }}}}else{ echo '<center><b style="color:red;">No hay Grupos para mostrar</b></center>'; } ?>
						</div>
					</div>
				</div>		
<?php }elseif($column2['type'] == 'custom' && $column2['visible'] == 1){ ?>
				<div id="column2">
					<div id="box">
						<?php 	global $db;
								$result = $db->query("SELECT * FROM groups_data  ORDER BY id DESC LIMIT 3");
								if($result->num_rows > 0){
									while($data = $result->fetch_array()){ 	
									if($back == "#FFFFF"){
										$back = " rgb(235, 235, 235)";
									}else{
										$back = "#FFFFF";}
									$userinfo = $db->query("SELECT * FROM users WHERE id = '".$data['owner_id']."'");
									if($userinfo->num_rows > 0){
									while($userrinf = $userinfo->fetch_array()){?>
										<li id="showuser" style="background-color:<?php echo $back; ?>">
											<img src="{PATH}/habbo-imaging/badge/<?php echo $data['badge']; ?>" style="margin-top:10px;">
											<div id="showuser-about">
												<div id="showuser-title"><b><?php echo utf8_encode($data['name']) ?></b></div>
												<div style="color:#808080;"><?php echo utf8_encode($data['desc']) ?></div>
												<div style="color:#808080;margin-left:20px;"><b>Fundador/a: </b><a href="Perfil?p=<?php echo $userrinf['id']; ?>"><u style="color:orange;"><?php echo utf8_encode($userrinf['username']) ?></u></a></div><br>								
											</div>
										</li>
							<?php }}}}else{ echo '<center><b style="color:red;">No hay Grupos para mostrar</b></center>'; } ?>
					</div>
				</div>		
<?php } } }?>		