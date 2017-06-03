<?php

function directory_reader($directory, array $excluded_files = ['.','..']) {
	$files = [];

	if ( !is_dir($directory) ) { return null; }//if directory exists
	if ( !($files_directory = opendir($directory)) ) { return null; }//if directory is accessible

	while ($file = readdir($files_directory)) {
		//var_dump($file);
		if (in_array($file, $excluded_files)) {
			continue;
		}

		$files[] = $directory . '/' . $file;
	}

	closedir($files_directory);

	return $files;
}
