<?php 	global $db;

	$busc = $db->query("SELECT * FROM cms_addons WHERE position = 'left' && zone = '$zone'  ORDER BY id ASC");
	if($busc->num_rows > 0){
		while($column1 = $busc->fetch_array()){
		
			if($column1['type'] == 'addon' && $column1['visible'] == 1 && $column1['contentPHP'] == 0){?>	
			<div id="column1">
				<div id="box">
					<div class="box-title-<?php echo $column1['color']; ?>"><?php echo $column1['title']; ?></div>
						<div class="box-content">
							<?php echo $column1['content']; ?>
						</div>
				</div>
			</div>		
<?php }elseif($column1['type'] == 'custom' && $column1['visible'] == 1 && $column1['contentPHP'] == 0){?>
	<div id="column1">
		<div id="box">
			<?php echo $column1['content']; ?>
		</div>
	</div>
<?php } } }?>

	 