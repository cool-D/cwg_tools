<?php
#################################################
# Script to do an 'ls' on a remote web server####
#################################################
# Use this script to get a directory listing of all the files in the www directory of the web server. Server must support php.
# Sample: $> curl -i -X PUT -T 'dirListUtil.php' '<URL with method supporting PUT request>' 
# $> curl -v '<URL to access dirListUtil.php on the server>' - retreive all the files with URL on the remote php server

$folder = "/";
#$folder = getcwd();
echo $folder;

$handle = opendir($folder);

# Making an array acontaining the files in the current directory: 
while ($file = readdir($handle))
{
    $files[] = $file;
}
closedir($handle);

#echo the files 
foreach ($files as $file) {
    echo "<a href=$folder$file>$file</a>"."<br />";
}
?>
