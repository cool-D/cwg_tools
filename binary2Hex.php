<?php
###########################################
# Hex dump of a binary file ###############
###########################################
# Returns the hex dump of the file provided as input. Useful for reading invisible characters in files on remote web servers. Can be used in conjunction with dirListUtil.php to extract hidden data in files on the remote web server

$file = "<path to file>";
$str = trim(file_get_contents($file));
echo "<p><center>".bin2hex($str)."</center></p>";
echo "length of string in file = ".strlen($str)."\n";
?>
