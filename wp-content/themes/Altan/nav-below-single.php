<nav id="nav-below" class="navigation" role="navigation">

<div class="nav-previous">
	<span>Boletín anterior</span>
	<hr> 
	<?php previous_post_link( '%link', '%title', $in_same_term = true ); ?>
</div>

<br>

<div class="nav-next">
	<span>Boletín siguiente</span>
	<hr>
	<?php next_post_link( '%link', '%title', $in_same_term = true ); ?>
</div>

</nav>