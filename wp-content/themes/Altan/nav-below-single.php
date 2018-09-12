<?php
$idioma= ICL_LANGUAGE_CODE;
?>
<nav id="nav-below" class="navigation" role="navigation">

<div class="nav-previous">
	<?php
				if ( $idioma == "en") {
				 	echo '<span>Previous post</span>';
				 } 				
				else{
				echo '<span>Boletín anterior</span>';
				}
		 		?>
	
	<hr> 
	<?php previous_post_link( '%link', '%title', $in_same_term = true ); ?>
</div>

<br>

<div class="nav-next">
	<?php
				if ( $idioma == "en") {
				 	echo '<span>Next post</span>';
				 } 				
				else{
				echo '<span>Boletín siguiente</span>';
				}
		 		?>
	<hr>
	<?php next_post_link( '%link', '%title', $in_same_term = true ); ?>
</div>

</nav>
