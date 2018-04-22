<!DOCTYPE HTML>
<html>
	<head>
		<?php echo tpl('header', array('class' => $class)); ?>
	</head>
	<body<?php if(superAdmin()) echo ' class="admin"';?>>
	<?php if(superAdmin()) echo tpl('adminpanel'); ?>
	<div class="page-wrapper">
		<div class="header">
			<div class="menu wrap">
				
				<div class="logo">
					<img src="<?php echo PUB_URL ?>img/logo.png" height="50">
				</div>                
                 <a href="<?php echo BASE_URL . getlang();?>" class="fa fa-home"></a>
				<a class="hamburger" href="#"><?php echo T('menu');?> &#9776;</a>
				<div class="dropdownmenu">
					<ul class="topmenu mainmenu">
						<?php echo menu(); ?>
					</ul>
				</div>
				<a href="tel:+41787672709" class="contactlink"><i class="fas fa-phone"></i></a>
				<a href="mailto:aricolena@gmail.com" class="contactlink"><i class="fa fa-envelope-o"></i></a>
				<a href="https://www.google.com/maps?ll=46.00499,8.950174&z=18&t=m&hl=ru&gl=US&mapclient=embed&q=Piazza+Cioccaro+4+6900+Lugano" target="_blank" class="contactlink"><i class="fa fa-map-marker"></i></a>
				<?php echo langs(); ?>
			</div>
		</div>



		<div class="contact-us">
			<a href="<?php echo BASE_URL . getlang() . '/contacts';?>"><i class="fa fa-envelope-o"></i><?php echo T('contact us');?></a>
		</div>




		<div class="main <?php echo (first()?'first':'wrap');?>">
			<?php echo $content; ?>
		</div>
	</div>
	<div class="footer <?php echo (first()?'first':'');?>">
		<div class="wrapper">
			&copy; <?php echo date('Y');?> <?php echo T('copyright');?> &nbsp;&nbsp;&nbsp;&nbsp;
			<!--<i class="fas fa-phone"></i> <span class="num">+41 787 67 27 09</span>-->
			<span class="right"> <?php echo T('Design');?> Maestro Studio</span>
		</div>
	</div>
	</body>
</html>	