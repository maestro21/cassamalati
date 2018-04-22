<h1><?php echo $data['name'];?></h1>
<?php if(@$data['subpages']) {  ?>
	<div class='submenu'>
		<ul>
		<?php 
			foreach($data['subpages'] as $page) {
				$_path = BASE_URL . $page['fullurl'];
				$text = $page['name'];
				$_selected = ($page['fullurl'] == $data['fullurl'] ? ' class="selected"': '');
				echo "<li><a href='$_path'$_selected>$text</a>";	
		 } ?>	
		</ul>
	</div>
	<div class="content">
		<?php echo parse_tags($data['content']);?>
	</div>	
<?php } else { ?>
	<div class="content">
		<?php echo parse_tags($data['content']);?>
	</div>	
<?php } ?>