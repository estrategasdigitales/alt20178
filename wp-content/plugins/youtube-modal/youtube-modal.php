<?php

/**
 * Plugin Name: WordPress Video Pop-up with YouTube API
 */

if( ! defined('ABSPATH') ) {
	die();
}

add_shortcode( 'youtube_button', 'ibenic_youtube_shortcode' );

/**
 * Creating the button for the shortcode
 * @param  array $atts Array of attributes set in the shortcode
 * @return string       HTML for our button
 */
function ibenic_youtube_shortcode( $atts ) {

	if( ! isset($atts['id']) ) {
		return '';
	}
	$data = '';
	$total = count( $atts );
	$count = 0;
	foreach($atts as $key => $value) {
	  $count++;
	  $data .= '"' . $key . '":"' . $value . '"';

	  if( $count < $total ) {
	  	$data .= ',';
	  }
	}

	return "<button onClick='openVideoFromShortcode(this);' data-vars='{" . $data . "}'>" . $atts['text'] . "</button>";
}



add_action('wp_footer', 'youtube_api', 40);
/**
 * Script for YouTube API
 * @return [type] [description]
 */
function youtube_api(){

	?>
	<script>
	      // 2. This code loads the IFrame Player API code asynchronously.
	      var tag = document.createElement('script');

	      tag.src = "https://www.youtube.com/iframe_api";
	      var firstScriptTag = document.getElementsByTagName('script')[0];
	      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	      var youtubeApiLoaded = false;
	      // 3. This function creates an <iframe> (and YouTube player)
	      //    after the API code downloads.
	      var player;
	      // This fucntion is also called by YouTube API when its loaded
	      function onYouTubeIframeAPIReady() {
	      	youtubeApiLoaded = true;
	      }

	      /**
	       * Function that is called upon clicking the button
	       * @param  {object} e Button object
	       * @return {void}   
	       */
	      function openVideoFromShortcode( e ) {

	      	// Getting the attributes from the button
	      	var attributes = e.attributes;
	      	var varsValue = null;
	      	var idValue = null; 

	      	// Looking for our attribute 'data-vars'
	      	for( var i=0; i < attributes.length; i++ ) {
	      		var att = attributes[ i ];
	      		
	      		// Getting the value from that attribute
	      		if( att.name == 'data-vars' ) {
	      			varsValue = att.nodeValue;
	      			break;
	      		}
	      	}
	      	
	      	// Creating an object 
	      	var varsObject = JSON.parse(varsValue);

	      	// Getting the ID
	      	idValue = varsObject.id;

	      	createPlayer( idValue, varsObject );
	      }

	      /**
	       * Creating the YouTube player
	       * @param  {string} id   YouTube Video ID
	       * @param  {object} vars Object with YouTube Player variables
	       * @return {void}      
	       */
	      function createPlayer( id, vars ){

	      	/**
	      	 * Don't create the player if the YouTube API is not loaded
	      	 * @param  {boolean} youtubeApiLoaded False if not Loaded  
	      	 */
	      	if( ! youtubeApiLoaded ) {
	      		return;
	      	}

	      	/**
	      	 * Don't create the player if there is no ID
	      	 * @param  {string} id 	YouTube Video ID    
	      	 */
	      	if( typeof id == 'undefined'){
	      		return;
	      	}

	      	/**
	      	 * If there is no vars, we create an empty object
	      	 */
	      	if( typeof vars == 'undefined' ) {
	      		vars = {};
	      	}

	      	/**
	      	 * Creating the player
	      	 */
	      	player = new YT.Player('videoPlayer', {
	          width: '100%',
	          playerVars: vars,
	          videoId: id,
	          events: {
	            'onReady': onPlayerReady,
	            'onError': onPlayerError,
	            'onStateChange': onPlayerStateChange
	          }
	        });
	      }

	      /**
	       * Alerting the Error if any when YouTube player has been created
	       * @param  {object} error 
	       * @return {void}    
	       */
	      function onPlayerError(error) {
	      	if( error.data == 2 ) {
	      		alert( "Check the Video ID" );
	      	}

	      	if( error.data == 5 ) {
	      		alert( "Check your Browser Version. HTML5 player does not work.");
	      	}

	      	if( error.data == 100 ) {
	      		alert( "Video not found.");
	      	}

	      	if( error.data == 101 || error.data == 105 ) {
	      		alert( "Video not allowed to play on other sites.");
	      	}
	      }

	      /**
	       * Starting the player when it is ready
	       * @param  {object} event
	       */
	      function onPlayerReady(event) {
	        event.target.playVideo();
	        document.getElementsByTagName("html")[0].className += " modal-open";
	      }

	      /**
	       * When the Video ends, destroy the player and close the modal
	       * @param  {object} event 
	       */
	      function onPlayerStateChange(event) {
	      	if( event.data == YT.PlayerState.ENDED ) {
	      		closeVideo();
	      	}
	      }

	      /**
	       * Closing the video by destroying the player (iframe) and remove the modal
	       */
	      function closeVideo() {
	        player.destroy();
	         var body = document.getElementsByTagName("html")[0];
	         

	        if( body.classList.contains("modal-open") ) {
	        	body.classList.remove("modal-open");
	        }
	         
	      }
	      
	</script>
    <?php
}

add_action('wp_head', 'youtube_video_style');
function youtube_video_style(){
	?>
	<style>
		.video_modal {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate3d( -50%, -50%, 0 );
			display: none;
			z-index: 5;
			width: 480px;
			height: 360px;
		}

		.video_modal #videoPlayer {
			max-width: 100%;
		 
		}

		.video_modal .video_modal_close {
			position: absolute;
			right: 10px;
			top: 10px;
			border-radius: 50%;
			width: 36px;
			height: 36px;
			display: none;
		}

		.video_modal:hover .video_modal_close {
			display: block;
		}

		.modal-open {
			position: relative;
			overflow: hidden;
			height: 100%;
			width: 100%;
		}

		.modal-open:before {
			content: '';
			display: block;
			position: absolute;
			top:0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 3;
			background-color: rgba(0, 0, 0, 0.5);
		}

		.modal-open .video_modal {
			display: block;
		}
	</style>
	<?php
}

add_action('wp_footer', 'youtube_video_html');
function youtube_video_html(){
	?>
	<div class="video_modal">
		<button class="video_modal_close" onClick="closeVideo();">x</button>
		<div id="videoPlayer"></div>
	</div>
	<?php
}