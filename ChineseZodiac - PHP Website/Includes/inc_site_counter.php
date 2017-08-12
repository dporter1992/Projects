<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Event Calendar</title>
</head>

<?php
if (empty($_Cookie["visits"])) {
mysql_query("UPDATE visit_counter " . " SET counter = counter +1 " . " WHERE id = 1 "); 
}
?>
