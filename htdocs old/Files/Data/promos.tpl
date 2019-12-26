<?php global $db;
	$busc = $db->query("SELECT * FROM cms_addons WHERE title = 'Promos' && zone = '$zone'  LIMIT 1");
	if($busc->num_rows > 0){
		while($columncenter = $busc->fetch_array()){
			if($columncenter['type'] == 'addon' && $columncenter['visible'] == 1){?>	
					<link rel="stylesheet" type="text/css" href="{CDN}/slider/jeihden/style.css" />
					<script type="text/javascript" src="{CDN}/slider/jeihden/jquery.js"></script>
					<br>
				<div id="column">
					<div id="box">
						<div class="box-title-<?php echo $columncenter['color']; ?>"><?php echo $columncenter['title']; ?></div>
							<div class="box-content" style="height:240px;">
								<div id="wowslider-container1" style="min-width:73.5%;float:left;">
									<div class="ws_images">
										<ul>
											<?php 	global $db;
												$result = $db->query("SELECT * FROM cms_slider ORDER BY id DESC LIMIT 10");
												if($result->num_rows > 0){
													while($data = $result->fetch_array()){?>
											<li>
												<img src="<?php echo $data['image']; ?>" alt="<?php echo $data['title']; ?>" title="<b><?php echo $data['title']; ?></b>"/>
												<?php echo $data['story']; ?>
												<div class="ws_tohotel">
													<a href="/Noticias?id=<?php echo $data['id']; ?>">
														<input name="login" type="submit" id="enterh_button" style="height:46px;float:right;width:auto;" value="Leer M&aacute;s &raquo;">
													</a>
												</div>
											</li>
											<?php } }else{ echo '<i>No hay noticias</i>'; } ?>
										</ul>
									</div>
									<div class="ws_bullets">
										<div>
											<?php 	global $db;
											$result2 = $db->query("SELECT * FROM cms_slider ORDER BY id DESC LIMIT 10");
											if($result2->num_rows > 0){
												while($data2 = $result2->fetch_array()){?>
													<a href="#" title="<?php echo $data2['title']; ?>"><?php echo $data2['id']; ?></a>
											<?php } }else{ echo '<i>No hay noticias</i>'; } ?>
										</div>
									</div>
								</div>
								<script type="text/javascript" src="{CDN}/slider/jeihden/wowslider.js"></script>
								<script type="text/javascript" src="{CDN}/slider/jeihden/script.js"></script>
					
<?php }elseif($columncenter['type'] == 'custom' && $columncenter['visible'] == 1){ ?>
					<link rel="stylesheet" type="text/css" href="{CDN}/slider/jeihden/style.css" />
					<script type="text/javascript" src="{CDN}/slider/jeihden/jquery.js"></script>
					<br>
					<div id="wowslider-container1" style="min-width:73.5%;float:left;">
						<div class="ws_images">
							<ul>
								<?php 	global $db;
									$result = $db->query("SELECT * FROM cms_slider ORDER BY id DESC LIMIT 10");
									if($result->num_rows > 0){
										while($data = $result->fetch_array()){?>
								<li>
									<img src="<?php echo $data['image']; ?>" alt="<?php echo $data['title']; ?>" title="<b><?php echo $data['title']; ?></b>"/>
									<?php echo $data['story']; ?>
									<div class="ws_tohotel">
										<a href="/Noticias?id=<?php echo $data['id']; ?>">
											<input name="login" type="submit" id="enterh_button" style="height:46px;float:right;width:auto;" value="Leer M&aacute;s &raquo;">
										</a>
									</div>
								</li>
								<?php } }else{ echo '<i>No hay noticias</i>'; } ?>
							</ul>
						</div>
						<div class="ws_bullets">
							<div>
								<?php 	global $db;
								$result2 = $db->query("SELECT * FROM cms_slider ORDER BY id DESC LIMIT 10");
								if($result2->num_rows > 0){
									while($data2 = $result2->fetch_array()){?>
										<a href="#" title="<?php echo $data2['title']; ?>"><?php echo $data2['id']; ?></a>
								<?php } }else{ echo '<i>No hay noticias</i>'; } ?>
							</div>
						</div>
					</div>
					<script type="text/javascript" src="{CDN}/slider/jeihden/wowslider.js"></script>
					<script type="text/javascript" src="{CDN}/slider/jeihden/script.js"></script>
<?php } } }?>