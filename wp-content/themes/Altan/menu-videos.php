<?php
$current_cat = get_category($cat);
$idioma= ICL_LANGUAGE_CODE;
?>

<ul class="submenu-videos">
	<li class="<?php if ($current_cat->slug == 'videos' || $current_cat->slug == 'videos-en') { echo 'current-cat'; } ?>">
		<?php if ( $idioma == "en") 
		{
			echo '<a href="'; echo get_site_url(); echo '/en/category/press/videos-en/">Videos</a>';		
		}
		else
		{
			echo '<a href="'; echo get_site_url(); echo '/category/sala-de-prensa/videos/">Videos</a>';
		}
		?>
	</li> 
<?php
 $args = array(
                'hide_empty' => 0,
                'title_li' => false,
                'style' => 'list',
                'child_of' => 11,
                'order' => 'ASC',
                'order_by' => 'date',
                'depth' => 1,
            	);

wp_list_categories($args);
?>
</ul>