<?php 	global $db;
	$buscara = $db->query("SELECT * FROM cms_addons WHERE position = 'center' && zone = '$zone' ORDER BY id ASC");
	if($buscara->num_rows > 0){
		while($columnctm = $buscara->fetch_array()){
		
			if($columnctm['type'] == 'custom' && $columnctm['visible'] == 1 && $columnctm['contentPHP'] == 0){?>
			<div>
				<div id="column">
					<div id="box">	
						<?php echo $columnctm['content']; ?>			
					</div>
				</div>				
			</div>			
<?php }elseif($columnctm['type'] == 'addon' && $columnctm['visible'] == 1 && $columnctm['contentPHP'] == 0){?>	
	<div>
		<div id="column">
					<div id="box">
						<div class="box-title-<?php echo $columnctm['color']; ?>"><?php echo $columnctm['title']; ?></div>
							<div class="box-content">
								<?php echo $columnctm['content']; ?>
							</div>
					</div>
		</div>
	</div>
<?php } } }?>	
	 