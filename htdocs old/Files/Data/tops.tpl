<?php global $db;
	$busc = $db->query("SELECT * FROM cms_addons WHERE title = 'Top Ricos' && zone = '$zone'  LIMIT 1");
	if($busc->num_rows > 0){
		while($column2 = $busc->fetch_array()){
			if($column2['type'] == 'addon' && $column2['visible'] == 1){?>	
				<div id="column2">
					<div id="box">
						<div class="box-title-<?php echo $column2['color']; ?>"><?php echo $column2['title']; ?></div>
						<div class="box-content"> 
							<?php 	global $db;
								$result = $db->query("SELECT * FROM users WHERE rank < 4  ORDER BY credits DESC LIMIT 3");
								if($result->num_rows > 0){
									while($data = $result->fetch_array()){ ?>
							    <li id="showuser" style="margin-top:10px;">
								<img src="<?php echo AVATARIMAGE . $data['look']; ?>&direction=3&head_direction=3&gesture=sml&action=wav&size=n">
								<div id="showuser-about">
								<img src="{CDN}/images/<?php echo $data[online]; ?>.gif" style="float:right;margin-top: -2px;">
									<div id="showuser-title"><a style="color:orange;" href="/Perfil?p=<?php echo $data['id']; ?>"><b><u><?php echo $data['username']; ?></u></b></a></div>
									<div id="motto" style="font-size:13px;"><b>Misi&oacute;n:</b> <?php echo $data['motto']; ?></div><br><br>
									<div id="small"><img src="{CDN}/images/icons/coin_icon.gif" style="margin-left: 1px;margin-top: -2px;vertical-align: middle;"><b>Cr&eacute;ditos:</b> <u style="color:orange;"><?php echo $data['credits']; ?></u><br>						
								</div>
								<br>
								</div>
							</li>
						<?php } } else{ echo '<center><b style="color:red">No hay Usuarios</b></center>'; } ?>
						</div>
					</div>
				</div>		
<?php }elseif($column2['type'] == 'custom' && $column2['visible'] == 1){ ?>
				<div id="column2">
					<div id="box">
						<?php 	global $db;
								$result = $db->query("SELECT * FROM users WHERE rank < 4  ORDER BY credits DESC LIMIT 3");
								if($result->num_rows > 0){
									while($data = $result->fetch_array()){ ?>
							    <li id="showuser" style="margin-top:10px;">
								<img src="<?php echo AVATARIMAGE . $data['look']; ?>&direction=3&head_direction=3&gesture=sml&action=wav&size=n">
								<div id="showuser-about">
								<img src="{CDN}/images/<?php echo $data[online]; ?>.gif" style="float:right;margin-top: -2px;">
									<div id="showuser-title"><a style="color:orange;" href="/Perfil?p=<?php echo $data['id']; ?>"><b><u><?php echo $data['username']; ?></u></b></a></div>
									<div id="motto" style="font-size:13px;"><b>Misi&oacute;n:</b> <?php echo $data['motto']; ?></div><br><br>
									<div id="small"><img src="{CDN}/images/icons/coin_icon.gif" style="margin-left: 1px;margin-top: -2px;vertical-align: middle;"><b>Cr&eacute;ditos:</b> <u style="color:orange;"><?php echo $data['credits']; ?></u><br>						
								</div>
								<br>
								</div>
							</li>
						<?php } } else{ echo '<center><b style="color:red">No hay Usuarios</b></center>'; } ?>
					</div>
				</div>		
<?php } } }?>		