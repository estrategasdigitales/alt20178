<?php
/*
Plugin Name: ed_telefono
Description: validación de telefonos para custom form
Version: 1.0
Author: estrategas digitales 
License: ed.0.0.1
*/

require_once('wpcf7_min_text.php');
require_once('wpcf7_min_textarea.php');


//remueve el "hook del tel"  original del plugins
remove_filter( 'wpcf7_validate_tel', 'wpcf7_text_validation_filter', 8, 3 ); 
remove_filter( 'wpcf7_validate_tel*', 'wpcf7_text_validation_filter', 8, 3 ); 

// añadir un nuevo "hook del tel"
add_filter( 'wpcf7_validate_tel', 'wpcf7_min_length_validation_filter', 8, 4 );
add_filter( 'wpcf7_validate_tel*', 'wpcf7_min_length_telingles_validation_filter', 8, 4 );

function wpcf7_min_length_validation_filter( $result, $tag ) {
	
	$tag = new WPCF7_Shortcode( $tag );
	$name = $tag->name; //devuelve el nombre "telefono"
	$value = isset( $_POST[$name] ) 	? trim( stripslashes( strtr( (string) $_POST[$name], "\n", " " ) ) )  : '';  //valor que tiene el campo "+52"
	$option = $tag->get_option('minlength');
	$minlength = $option[0];  //el tamaño en este caso 10
	
	//$expresion = '/^[9|6|7][0-9]{8}$/'; ////{ echo 'El telefono es correcto'; }else{ echo 'El telefono es incorrecto'; } 
	$expresion = '/^(\+?52)?[0-9]{10,10}$/'; 
	if   (!(preg_match($expresion, $value))) {

		$result['valid'] = false;
		$result['reason']= array(
			$name =>  wpcf7_get_message( 'invalido_telefono' ) 
			); 


	} 

	/*elseif ( strlen($value) < $minlength ) {   //compara el tamaño del campo con el minimo permitido 3 < 10
		$result['valid'] = false;
		$result['reason']= array(
			$name =>  wpcf7_get_message( 'invalid_length' ) 
			); 
	}*/

	return $result;
}




function wpcf7_min_length_telingles_validation_filter( $result, $tag ) {
	
	$tag = new WPCF7_Shortcode( $tag );
	$name = $tag->name; //devuelve el nombre "telefono"
	$value = isset( $_POST[$name] ) 	? trim( stripslashes( strtr( (string) $_POST[$name], "\n", " " ) ) )  : '';  //valor que tiene el campo "+52"
	$option = $tag->get_option('minlength');
	$minlength = $option[0];  //el tamaño en este caso 10
	
	//$expresion = '/^[9|6|7][0-9]{8}$/'; ////{ echo 'El telefono es correcto'; }else{ echo 'El telefono es incorrecto'; } 
	$expresion = '/^[0-9]{10,16}$/'; 
	if   (!(preg_match($expresion, $value))) {

		$result['valid'] = false;
		$result['reason']= array(
			$name =>  wpcf7_get_message( 'invalido_telefono' ) 
			); 


	} 

	/*elseif ( strlen($value) < $minlength ) {   //compara el tamaño del campo con el minimo permitido 3 < 10
		$result['valid'] = false;
		$result['reason']= array(
			$name =>  wpcf7_get_message( 'invalid_length' ) 
			); 
	}*/

	return $result;
}

/* Validation messages */

add_filter( 'wpcf7_messages', 'wpcf7_min_text_messages' );

function wpcf7_min_text_messages( $messages ) {
	return array_merge( $messages, array(
		
		'invalid_length' => array(
			'description'	=> __( 'The text needs a minimum length.', 'contact-form-7' ),
			'default' => __( 'The text needs a minimum length.', 'contact-form-7' )
		),
//El número de teléfono es inválido o contiene espacios
		'invalido_telefono' => array(
			'description' =>
				__( "The telephone number is invalid or contains spaces", 'contact-form-7' ),
			'default' =>
				__( "The telephone number is invalid or contains spaces", 'contact-form-7' ),
		),



		) );
}







?>

