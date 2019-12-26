<?php global $db;
	$busc = $db->query("SELECT * FROM cms_addons WHERE title = 'Noticiones' && zone = '$zone'  LIMIT 1");
	if($busc->num_rows > 0){
		while($column1 = $busc->fetch_array()){
		
			if($column1['type'] == 'addon' && $column1['visible'] == 1){?>	
			<div id="column1">
				<div id="box">
					<div class="box-title-<?php echo $column1['color']; ?>"><?php echo $column1['title']; ?></div>
						<div class="box-content">
							<?php echo '
										<style>
										#campaign{list-style: none;display: table;width: 100%;margin-top:10px;}
										#campaign img{float: left;}
										#campaign-about{float:left;width: 250px;margin-left:40%;margin-top:-14%;}
										#campaign .read{float:right;margin-top:-3%;}
										</style>';
							
										$result = $db->query("SELECT * FROM cms_campaigns ORDER BY id DESC LIMIT 3");
										if($result->num_rows > 0){
											while($data = $result->fetch_array()){ 	
												if($back == "#FFFFF"){
												$back = " rgb(235, 235, 235)";
												}else{
													$back = "#FFFFF";
												}
										echo   '<li id="campaign" style="background-color:'.$back.'">
													<img src="'. $data['image'] .'"width="160px;" height="60px;">
													<div id="campaign-about">
														<div id="campaign-title"><b>'.$data['title'] .'</b></div>
														<div id="campaign-info" style="width:250px;">'. $data['shortstory'] .'</div>
													</div>
													<div class="read"><a href="'. $data['link'] .'" target="_blank" style="color: rgb(226, 172, 1);"><b>Ir &#187;</b></a></div>
												</li>';
										
											} }else{ echo '<center><b style="color:red;">No hay noticias</b></center>'; };?>
						</div>
				</div>
			</div>		
<?php }elseif($column1['type'] == 'custom' && $column1['visible'] == 1){ ?>
	<div id="column1">
		<div id="box">
			<?php echo '<style>
						#campaign{list-style: none;display: table;width: 100%;margin-top:10px;}
						#campaign img{float: left;}
						#campaign-about{float:left;width: 250px;margin-left:40%;margin-top:-14%;}
						#campaign .read{float:right;margin-top:-3%;}
						</style>';
			
						$result = $db->query("SELECT * FROM cms_campaigns ORDER BY id DESC LIMIT 3");
						if($result->num_rows > 0){
							while($data = $result->fetch_array()){ 	
								if($back == "#FFFFF"){
								$back = " rgb(235, 235, 235)";
								}else{
									$back = "#FFFFF";
								}
						echo   '<li id="campaign" style="background-color:'.$back.'">
									<img src="'. $data['image'] .'"width="160px;" height="60px;">
									<div id="campaign-about">
										<div id="campaign-title"><b>'.$data['title'] .'</b></div>
										<div id="campaign-info" style="width:250px;">'. $data['shortstory'] .'</div>
									</div>
									<div class="read"><a href="'. $data['link'] .'" target="_blank" style="color: rgb(226, 172, 1);"><b>Ir &#187;</b></a></div>
								</li>';
						
							} }else{ echo '<i>No hay noticias</i>'; };?>
		</div>
	</div>
<?php } } }?>

	 