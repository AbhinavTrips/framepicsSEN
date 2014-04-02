
<?php
	function lightbox_display($dir_to_search, $rel){
		$image_dir = $dir_to_search;
		$dir_to_search = scandir($dir_to_search);
		$image_exts = array('gif', 'jpg', 'jpeg', 'png');
		$excluded_filename = '_t';
			foreach ($dir_to_search as $image_file){
			$dot = strrpos($image_file, '.');
			$filename = substr($image_file, 0, $dot);
			$filetype = substr($image_file, $dot+1);
			$thumbnail_file = strrpos($filename, $excluded_filename);
				if ((!$thumbnail_file) && array_search($filetype, $image_exts) != false){
				echo '<a href="'.$image_dir.$image_file.'" '.'rel="'.$rel.'"><img src="'.$image_dir.$filename.'_t'.$filetype.'" '.'alt="'.$filename." '.' width= \"100\" 					height= \"80\" title=\" \" /></a>';				}
			}
	}
?>