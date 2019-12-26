<?php 	global $db;
	$busc = $db->query("SELECT * FROM cms_addons WHERE position = 'left' && zone = '$zone'  ORDER BY id ASC");
	if($busc->num_rows > 0){
		while($column1 = $busc->fetch_array()){
			if($column1['type'] == 'addon' && $column1['visible'] == 1 && $column1['contentPHP'] == 1){?>	
			<div id="column1">
				<?php 	global $db;
					$dd = $db->query("SELECT * FROM ranks WHERE id = 4 ORDER BY id DESC");
					while($rank = $dd->fetch_array()){
					echo '<div id="box">
								<div class="box-title-'.$column1['color'].'_staff">'.$rank['name'].'</div>
								<div class="box-title-blue-staffinfo">'.$rank['Descripcion'].'</div>
								<div class="box-content_staff">';	
                   
									$userquery = $db->query("SELECT * FROM users WHERE rank = '". $rank['id'] ."' ORDER BY rank DESC");
									while($userstaff = $userquery->fetch_array()){
										if($userstaff['cms_staffocult'] == 0){
											$userquery2 = $db->query("SELECT * FROM users_badges WHERE user_id = '". $userstaff['id'] ."' ORDER BY id DESC LIMIT 1 ");
											while($userstaffb = $userquery2->fetch_array()){ 
												setlocale(LC_TIME,"spanish");
												echo '
												<style>#staffs_portada{width:107px;height: 100px;float:right;background-position: center;background-size: 450px;border-radius: 2px;padding: 15px;margin-top: 0px;}#staffs_portada img {width: 100px;height: 100px;border-radius: 50%;  border: 2px solid #CEF6F5;}#staffs {width:280px;height: 125px; background: #151515;border-radius: 2px;color: #ffffff;padding-top: 5px;}</style>
												<table>
													<tbody>
														<td valign="middle" width="25">
															<div id="staffs">
																<a href="/Perfil?p='. $userstaff['id'] .'"><img style="margin-left:-10px;margin-top: -10px;" src="{AVATARIMAGE}'.$userstaff['look'].'"></a></p>
																<img src="{CDN}/images/'.$userstaff['online'].'.gif" style="float:right;margin-top:-120px;margin-right:10px;"></p>	
																<a href="/Perfil?p='. $userstaff['id'] .'"><b style="float:left;margin-left:16%;margin-top:-120px;font-size:14px;color:orange;"><u>'.utf8_encode($userstaff['username']).'</u></b></a><br />
																<b style="float:left;margin-left:16%;margin-top:-120px;font-size:14px;">Misi&oacute;n: </b><i style="float:left;margin-left:16%;margin-top:-105px;font-size:13px;">'.$userstaff['motto'].'</i><br><br>
																<img style="float:left;margin-left:16%;margin-top:-105px;" src="'. BADGEURL .''.$userstaffb['badge_id'].'.gif"><br /> 
																<a href="https://facebook.com/'. $userstaff['facebook'] .'" target="_blank"><img style="float:right;margin-right:18%;margin-top:-113px;" src="https://fbstatic-a.akamaihd.net/rsrc.php/yl/r/H3nktOa7ZMg.ico" /></a>
																<a href="https://twitter.com/'. $userstaff['cms_twitter'] .'" target="_blank"><img style="float:right;margin-right:5%;margin-top:-113px;" src="https://abs.twimg.com/favicons/favicon.ico" /></a>
																<td>
																	<div id="staffs_portada" style="background-image: url('. $userstaff['cms_pbackground'] .');">
																	<img src="'. $userstaff['cms_pprofile'] .'" />
																	</div>
																</td>
															</div>
														</td>                       
													</tbody>
												</table>'; 
											}
										}
									}echo '</div></div>';}
				?>
			</div>		
<?php }elseif($column1['type'] == 'custom' && $column1['visible'] == 1 && $column1['contentPHP'] == 1){?>
	<div id="column1">
		<?php 	global $db;
					$dd = $db->query("SELECT * FROM ranks WHERE id = 4 ORDER BY id DESC");
					while($rank = $dd->fetch_array()){
					echo '<div id="box">';
									$userquery = $db->query("SELECT * FROM users WHERE rank = '". $rank['id'] ."' ORDER BY rank DESC");
									while($userstaff = $userquery->fetch_array()){
										if($userstaff['cms_staffocult'] == 0){
											$userquery2 = $db->query("SELECT * FROM users_badges WHERE user_id = '". $userstaff['id'] ."' ORDER BY id DESC LIMIT 1 ");
											while($userstaffb = $userquery2->fetch_array()){ 
												setlocale(LC_TIME,"spanish");
												echo '
												<style>#staffs_portada{width:107px;height: 100px;float:right;background-position: center;background-size: 450px;border-radius: 2px;padding: 15px;margin-top: 0px;}#staffs_portada img {width: 100px;height: 100px;border-radius: 50%;  border: 2px solid #CEF6F5;}#staffs {width:280px;height: 125px; background: #151515;border-radius: 2px;color: #ffffff;padding-top: 5px;}</style>
												<table>
													<tbody>
														<td valign="middle" width="25">
															<div id="staffs">
																<a href="/Perfil?p='. $userstaff['id'] .'"><img style="margin-left:-10px;margin-top: -10px;" src="{AVATARIMAGE}'.$userstaff['look'].'"></a></p>
																<img src="{CDN}/images/'.$userstaff['online'].'.gif" style="float:right;margin-top:-120px;margin-right:10px;"></p>	
																<a href="/Perfil?p='. $userstaff['id'] .'"><b style="float:left;margin-left:16%;margin-top:-120px;font-size:14px;color:orange;"><u>'.utf8_encode($userstaff['username']).'</u></b></a><br />
																<b style="float:left;margin-left:16%;margin-top:-120px;font-size:14px;">Misi&oacute;n: </b><i style="float:left;margin-left:16%;margin-top:-105px;font-size:13px;">'.$userstaff['motto'].'</i><br><br>
																<img style="float:left;margin-left:16%;margin-top:-105px;" src="'. BADGEURL .''.$userstaffb['badge_id'].'.gif"><br /> 
																<a href="https://facebook.com/'. $userstaff['facebook'] .'" target="_blank"><img style="float:right;margin-right:18%;margin-top:-113px;" src="https://fbstatic-a.akamaihd.net/rsrc.php/yl/r/H3nktOa7ZMg.ico" /></a>
																<a href="https://twitter.com/'. $userstaff['cms_twitter'] .'" target="_blank"><img style="float:right;margin-right:5%;margin-top:-113px;" src="https://abs.twimg.com/favicons/favicon.ico" /></a>
																<td>
																	<div id="staffs_portada" style="background-image: url('. $userstaff['cms_pbackground'] .');">
																	<img src="'. $userstaff['cms_pprofile'] .'" />
																	</div>
																</td>
															</div>
														</td>                       
													</tbody>
												</table>'; 
											}
										}
									}echo '</div>';}
		?>
	</div>
<?php } } }?>