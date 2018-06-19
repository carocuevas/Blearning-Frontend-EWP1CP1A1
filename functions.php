<?php

	// Estilos CSS
	function dl_enqueue_style() { 
		$theme_data = wp_get_theme();
		/* Registrar estilos */
		wp_register_style('bootstrap-css', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" , null, $theme_data->get( '3.3.7' ));
		wp_register_style('main', get_parent_theme_file_uri('/css/main.css'), null, $theme_data->get( '1.0' ));
		
		/* llamar estilos */
		wp_enqueue_style( 'bootstrap-css');
		wp_enqueue_style( 'main' );
	}
	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' ); 


	// Registrar JS
	function dl_enqueue_scripts() { 
		$theme_data = wp_get_theme();
		/* Registrar scripts */
		wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js", null , '1.0' , true );
		wp_register_script('bootstrap-js', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array("jquery") , '3.3.7' , true );

		// llamar scripts
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'bootstrap-js' );
	}
	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' ); 

