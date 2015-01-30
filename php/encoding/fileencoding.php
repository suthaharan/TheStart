<?php 
// File Conversion Utility - encoding types
$myFileName = 'test'; 
$testContent = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'; 
$myFileName .= '-utf-16.txt';
writeToFile($myFileName, $testContent, "utf-16");

function writeToFile($filename,$myContent,$filetype) {

	switch($filetype){
		case "utf-8":
		   $myContent = "\xEF\xBB\xBF".$myContent;
			break;
		case "utf-16":
		    $myContent = chr(255).chr(254).mb_convert_encoding($myContent, 'UTF-16LE', 'UTF-8'); 
			break;
		case "ansi":
		    $myContent = $myContent;
			break;		
		default:
		    $myContent = $myContent;
			break;		
	}
   
	file_put_contents($filename, $myContent); 
}


?>