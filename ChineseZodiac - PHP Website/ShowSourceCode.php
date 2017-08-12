<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>Show source code</title> 
    <!-- Project 5-3.-->
</head>
<body>
<?php
if (isset($_GET['source_file'])) {
 $source_file = file_get_contents(stripslashes($_GET['source_file']));
 highlight_string($source_file);
}
else
 echo "<p>No source file name entered</p>\n";
?>

</body>
</html>