<?php 	global $db;
	$buscan = $db->query("SELECT * FROM cms_addons WHERE position = 'right' && zone = '$zone'  ORDER BY id ASC ");
	if($buscan->num_rows > 0){
		while($column2 = $buscan->fetch_array()){
		
			if($column2['type'] == 'addon' && $column2['visible'] == 1 && $column2['contentPHP'] == 0){?>
			<div id="column2">
				<div id="box">
					<div class="box-title-<?php echo $column2['color']; ?>"><?php echo $column2['title']; ?></div>
						<div class="box-content">
							<?php echo $column2['content']; ?>
						</div>
				</div>
			</div>		
<?php }elseif($column2['type'] == 'custom' && $column2['visible'] == 1 && $column2['contentPHP'] == 0){?>
	<div id="column2">
		<div id="box">
			<?php echo $column2['content']; ?>
		</div>
	</div>
<?php } } }?>

	 