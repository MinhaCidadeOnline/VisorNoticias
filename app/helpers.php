<?php 

if ( ! function_exists('thumbnail') ) {

	function thumbnail($image, $width, $height)
	{
		return asset('tim.php?src=' . $image . '&w=' . $width . '&h=' . $height );
	}

}