<?php global $db;
	$busc = $db->query("SELECT * FROM cms_addons WHERE title = 'Rares' && zone = '$zone'  LIMIT 1");
	if($busc->num_rows > 0){
		while($column1 = $busc->fetch_array()){
			if($column1['type'] == 'addon' && $column1['visible'] == 1){?>	
				<div id="column1">
					<div id="box">
						<div class="box-title-<?php echo $column1['color']; ?>"><?php echo $column1['title']; ?></div>
						<div class="box-content" style="max-height: 483px;display: block;overflow: auto;"> 
							<center><a href="#"><img  src="{CDN}/images/tienda/rares.png"></a></center><br>
						  <?php $badges = $db->query("SELECT * FROM cms_rares ORDER BY id DESC");
								while($badge = $badges->fetch_array()){
									if($back == "#FFFFF"){
											$back = " rgb(235, 235, 235)";
									}else{
										$back = "#FFFFF";}?>
								<div id="new-badge">
									<form method="post" action="/functions.php">
										<table width="100%" style="background-color:<?php echo $back; ?>">
											<tr>
												<td width="40%"><img src="{CDN}/images/tienda/rares/<?php echo $badge['item_name']; ?>.gif" style="vertical-align: middle;"></td>
												<td><?php echo $badge['price']; ?> <img src="<?php echo CDN; ?>/images/icons/crystal_offers.png" style="vertical-align: middle;margin-top: -4px;"> </td>
												<td>
													<input style="display:none" name="rarecode" value="<?php echo $badge['id']; ?>">
													<input type="submit" name="buyrare" id="accept_button" style="height:40px;width:auto;margin-top:2%;margin-right:20%;" value="Comprar">
												</td>
											</tr>
										</table>
									</form>
								</div>
							<?php } ?>			
						</div>
					</div>
				</div>		
<?php }elseif($column1['type'] == 'custom' && $column1['visible'] == 1){ ?>
				<div id="column1">
					<div id="box">
						<center><a href="#"><img  src="{CDN}/images/tienda/rares.png"></a></center><br>
						<?php $badges = $db->query("SELECT * FROM cms_rares ORDER BY id DESC");
								while($badge = $badges->fetch_array()){
									if($back == "#FFFFF"){
											$back = " rgb(235, 235, 235)";
									}else{
										$back = "#FFFFF";}?>
							<div id="new-badge">
								<form method="post" action="/functions.php">
									<table width="100%" style="background-color:<?php echo $back; ?>">
										<tr>
											<td width="40%"><img src="{CDN}/images/tienda/rares/<?php echo $badge['item_name']; ?>.gif" style="vertical-align: middle;"></td>
											<td><?php echo $badge['price']; ?> <img src="<?php echo CDN; ?>/images/icons/crystal_offers.png" style="vertical-align: middle;margin-top: -4px;"> </td>
											<td>
												<input style="display:none" name="rarecode" value="<?php echo $badge['id']; ?>">
												<input type="submit" name="buyrare" id="accept_button" style="height:40px;width:auto;margin-top:2%;margin-right:20%;" value="Comprar">
											</td>
										</tr>
									</table>
								</form>
							</div>
						<?php } ?>	
					</div>
				</div>		
<?php } } }?>		