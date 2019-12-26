<?php 	global $db;
	$search = $db->query("SELECT * FROM cms_addons WHERE position = 'column-3'  ORDER BY id ASC ");
	if($search->num_rows > 0){
		while($column3 = $search->fetch_array()){
		
			if($column3['type'] == 'addon' && $column3['visible'] == 1 && $column3['contentPHP'] == 0){?>
			<div id="columns3">
				<div id="box">
					<div class="box-title-<?php echo $column3['color']; ?>"><?php echo $column3['title']; ?></div>
						<div class="box-content">
							<?php echo $column3['content']; ?>
						</div>
				</div>
			</div>		
<?php }elseif($column3['type'] == 'custom' && $column3['visible'] == 1 && $column3['contentPHP'] == 0){?>
	<div id="columns3">
		<div id="box">
		<?php echo $column3['content']; ?>
		</div>
	</div>
<?php } } }?>

	 