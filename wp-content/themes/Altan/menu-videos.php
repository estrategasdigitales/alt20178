<?php
$current_cat = get_category($cat);
?>

<ul class="submenu-videos">
	<li class="<?php if ($current_cat->slug == 'videos') { echo 'current-cat'; } ?>"><a href="<?php echo get_site_url(); ?>/category/sala-de-prensa/videos/">Videos</a></li>
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