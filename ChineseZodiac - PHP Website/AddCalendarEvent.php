<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Event Calendar</title>
</head>

<?php
session_start();
require_once("class_EventCalendar.php");
if (class_exists("EventCalendar")) {
    if (isset($_Session['currentCalendar'])))
	   $Calendar = unserialize($_Session['currentCalendar'])
	   else {
	     $Calendar = new EventCalendar ();
	   }
	   else {
	       $Calendar = NULL;
	   }
}
?>
<h1>Add Calendar Event</h1>
<?php
if (isset($_POST['EventDate']) && 
     isset($_Post['EventTitle']) &&
	 isset($_Post['EventDesc'])) {
	if ($Calendar === NULL)
	 echo "<p>There was an error, creating the EventCalendar Object. </p>\n";
 else 
	 $Calendar->addEvent(
         stripslashes($_Post['EventDate']),
		 stripslashes($_Post['EventTitle']),
		 stripslashes($_POST['EventDesc']));
		 $_Session('currentCalendar') = serialize($Calendar); 
}
?>

<form action="AddCalendarEvent.php?PHPSESSID=<?PHPSESSID=<?php
echo 
   session_id(); ?>" method="POST">
   <p>Date (yyyy-mm-dd): <input type="text" name="EventDate" /> (required)</p>
   <p>Title: <input type = "text" name ="EventDesc" /> (optional)</p>
   <p><input type="submit" name="submit" value= "Save Event" /></p>
   
 </form>
 
 <a href ="EventCalendar.php?PHPSESSID=<?php echo session_id(); ?>">View the event calendar</a> 