<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.min.css">
<?php 
$images = get_field('imagenes', 910);

// echo '<pre>';
// print_r($images);
// echo '</pre>';

echo '<div class="regular slider">';

$i=0;
foreach ($images as $key => $value) {
	echo '<div><a href="';	
	echo $images[$i]['imagen']['url'];
	echo '" data-lightbox="example-set" ><img src="';
	echo $images[$i]['imagen']['sizes']['thumbnail'];
	echo '" ></a></div>';
	$i++;
}

echo '</div>';

?>



<script src="<?php echo get_template_directory_uri(); ?>/js/lightbox-plus-jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js" type="text/javascript" charset="utf-8"></script>
  
  <script type="text/javascript">
    $(document).on('ready', function() {
      
      $(".regular").slick({
        dots: true,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: false,
        responsive: [
	        	{
			      breakpoint: 768,
			      settings: {
			        dots: true,
			        infinite: false,
			        slidesToShow: 2,
			        slidesToScroll: 2,
			        arrows: false,
			      }
			    },
			    {
			      breakpoint: 360,
			      settings: {
			        dots: true,
			        infinite: false,
			        slidesToShow: 1,
			        slidesToScroll: 1,
			        arrows: false,
			      }
			    }
        ]
      });
      
    });
</script>