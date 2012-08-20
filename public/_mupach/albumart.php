<?php
/**
 * Having php here kind of defaults the whole purpose of using apache
 * directory listings, but I could not find a way to find the image
 * when the ssi execute command is disabled.
 *
 * Usage: Put in a filed called "album-art.jpg" or else this will find
 * the first matching jpg in the directory.
 */

$path = trim($_GET['path'], '/');

/*
 * For now we assume this is 1 up from the root
 */

$path_full = dirname(__FILE__) . '/../' . $path;

echo $path_full .  '/Album-Art.jpg';

if(file_exists( $path_full . '/Album-Art.jpg')) 
{
	echo 'Location: /' . $path . '/Album-Art.jpg';exit;
	header('Location: /' . $path . '/Album-Art.jpg');
}
else 
{
	$cmd = "find " . $path_full . " -type f -name '*\.jpg' | head -1";
	echo $cmd;
	$first_image = shell_exec($cmd);
	$first_image = basename($first_image);
	echo 'Location: /' . $path . '/' . $first_image;exit;
	header('Location: /' . $path . '/' . $first_image);
}
