<?php global $db;
	$busc = $db->query("SELECT * FROM cms_addons WHERE title = 'Placa Gratis de la Semana' && zone = '$zone'  LIMIT 1");
	if($busc->num_rows > 0){
		while($column2 = $busc->fetch_array()){
			if($column2['type'] == 'addon' && $column2['visible'] == 1){?>	
				<div id="column2">
					<div id="box">
						<div class="box-title-<?php echo $column2['color']; ?>"><?php echo $column2['title']; ?></div>
						<div class="box-content" style="max-height: 226px;display: block;overflow: auto;"> 
							<?php $badges = $db->query("SELECT * FROM cms_badges_gift ORDER BY id DESC LIMIT 1");
								while($badge = $badges->fetch_array()){?>
								<div id="new-badge">
									<center>¡Esta semana te traemos esta hermosa placa totalmente gratis!</center>
										<form method="post" action="/functions.php">
											<table width="100%">
											  <tr>
													<td width="40%"><img src="<?php echo BADGEURL . $badge['code']; ?>.gif" style="vertical-align: middle;margin-left:10px;"></td>
													<td><b><?php echo $badge['price']; ?></b> <img src="{CDN}/images/icons/crystal_offers.png" style="vertical-align: middle;margin-top: -4px;"> </td>
													<td>
														<input style="display:none" name="badgecode" value="<?php echo $badge['id']; ?>">
														<input type="submit" id="accept_button" style="height:40px;width:auto;margin-top:5px;" value="Reclamar">
													</td>
											  </tr>
											</table>
										</form>
								</div>
							<?php } ?>			
						</div>
					</div>
				</div>		
<?php }elseif($column2['type'] == 'custom' && $column2['visible'] == 1){ ?>
				<div id="column2">
					<div id="box">
							<?php $badges = $db->query("SELECT * FROM cms_badges_gift ORDER BY id DESC LIMIT 1");
								while($badge = $badges->fetch_array()){?>
								<div id="new-badge">
									<center>¡Esta semana te traemos esta hermosa placa totalmente gratis!</center>
										<form method="post" action="/functions.php">
											<table width="100%">
											  <tr>
													<td width="40%"><img src="<?php echo BADGEURL . $badge['code']; ?>.gif" style="vertical-align: middle;margin-left:10px;"></td>
													<td><b><?php echo $badge['price']; ?></b> <img src="{CDN}/images/icons/crystal_offers.png" style="vertical-align: middle;margin-top: -4px;"> </td>
													<td>
														<input style="display:none" name="badgecode" value="<?php echo $badge['id']; ?>">
														<input type="submit" id="accept_button" style="height:40px;width:auto;margin-top:5px;" value="Reclamar">
													</td>
											  </tr>
											</table>
										</form>
								</div>
							<?php } ?>
					</div>
				</div>		
<?php } } }?>		