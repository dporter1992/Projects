<?php 
session_start(); 
require_once("class_EventCalendar.php"); 
if (class_exists("EventCalendar")) { 
  if (isset($_SESSION['currentCalendar'])) 
    $Calendar = unserialize($_SESSION['currentCalendar']); 
  else { 
    $Calendar = new EventCalendar (); 
    } 
  } 
else { 
  $Calendar = NULL; 
  } 
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<title>Event Calendar</title> 
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" /> 
</head> 
<body> 
<h1>Event Calendar</h1> 
<?php 
if ($Calendar === NULL) 
  echo "<p>There was an error creating the EventCalendar object.</p>\n"; 
else 
  $Calendar->getMonthlyCalendar($_GET['Year'], $_GET['Month']); 
?> 
<a href="AddCalendarEvent.php?PHPSESSID=<?php echo session_id(); ?>">Add an event to the calendar</a> 
</body> 
</html> 