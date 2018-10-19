<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('css_url')) //condition pour éviter de redéfinir des fonctions
{
	function css_url($nom)
	{
		return base_url() . 'assets/css/' . $nom . '.css';
	}
}

if ( ! function_exists('js_url')) //condition pour éviter de redéfinir des fonctions
{
	function js_url($nom)
	{
		return base_url() . 'assets/javacript/' . $nom . '.js';
	}
}

if ( ! function_exists('img_url')) //condition pour éviter de redéfinir des fonctions
{
	function img_url($nom)
	{
		return base_url() . 'assets/images/' . $nom;
	}
}

if ( ! function_exists('img')) //condition pour éviter de redéfinir des fonctions
{
	function img($nom, $alt = '', $id ='', $class ='')
	{
		return '<img id="'.$id.'" class="'.$class.'" src="'.img_url($nom).'" alt="'.$alt.'" />';
	}
}

if ( ! function_exists('video_url')) //condition pour éviter de redéfinir des fonctions
{
	function video_url($nom)
	{
		return base_url() . 'assets/videos/' . $nom;
	}
}

if ( ! function_exists('video')) //condition pour éviter de redéfinir des fonctions
{
	function video($nom, $auto = FALSE)
	{
		$retour = '<video controls width="600" poster="'.img_url($nom.'.jpg').'" preload="metadata" ';
		if($auto==TRUE){
			$retour = $retour.'autoplay';
		}
		return $retour.'>
			<source src="'.video_url($nom).'.mp4">
			<source src="'.video_url($nom).'.webm">
			Votre navigateur ne supporte pas la balise vidéo.
		</video>';
	}
}

if ( ! function_exists('audio_url')) //condition pour éviter de redéfinir des fonctions
{
	function audio_url($nom)
	{
		return base_url() . 'assets/audio/' . $nom;
	}
}

if ( ! function_exists('audio')) //condition pour éviter de redéfinir des fonctions
{
	function audio($nom)
	{
		return '<audio controls preload="metadata">
			<source src="'.audio_url($nom).'.mp3">
			<source src="'.audio_url($nom).'.aac">
			<source src="'.audio_url($nom).'.ogg">
			Votre navigateur ne supporte pas la balise audio.
		</audio>';
	}
}