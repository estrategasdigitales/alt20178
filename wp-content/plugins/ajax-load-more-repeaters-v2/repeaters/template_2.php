<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="entrada dispositivo">
	<p><b><?php the_title(); ?></b></p>
	<p><?php echo the_field('marca'); ?></p>
	<?php the_post_thumbnail('full'); ?>    
	<hr>
	<p><b>Dimensiones:</b> <?php echo the_field('dimensiones'); ?></p>
	<p><b>F Cam:</b> <?php echo the_field('f_cam'); ?></p>
	<p><b>B Cam:</b> <?php echo the_field('b_cam'); ?></p>
	<p><b>Memoria:</b> <?php echo the_field('memoria'); ?></p>
	<p><b>CPU:</b> <?php echo the_field('cpu'); ?></p>
	<p><b>Gama:</b> <?php echo the_field('gama'); ?></p>
</div>
</div>