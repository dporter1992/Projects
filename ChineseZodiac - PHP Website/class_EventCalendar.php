<?php
class EventCalendar {
private $DBConnect = Null;
}
function_contruct() {
include("Includes/inc_ChineseZodiacDB.php");
$this->DBConnect = $DBConnect;
}
function_destruct() {
if(!$this->DBConnect->connect_error)
    $this->DBConnect->close();
}
function_wakeup(){
include("Includes/inc_ChineseZodiacDB.php");
$this->DBConnect = $DBConnect;
}

public function addEvent($Date, $Title, $Description){
	if ((!empty($Date)) && (!empty($Title))) {
		$SQLString = "Insert INTO event_calendar" . "" (EventDate, Title, Description) "" . "" VALUES('Date', '$Title', '" . $Description . ""')";
		$QueryResult = $this->DBConnect->query($SQLString);
		 if($QueryResult === FALSE) {"
			 echo "<p>Unable to save the event. " . "Error code " . $this->DBConnect->errno. ": " . $this->DBConnect->error ."</p>\n";
		 else 
			 echo "<p>The event was successfully saved.</p>\n";
	   }
	else
		echo "<p>You must provide a date and title for the event.</p>\n";
	
	Public function getMonthlyCalendar($Year, $Month){
	if (empty($Year))
		$Year = Date('Y');  
	if (empty($Month))
		$Month = data('n');
	$Firstday = mktime(0,0,0, $Month, 1, $Year);
	$FirstDOW = date('w', $FirstDay);
	$MonthName = date('L', $Firstday);
	$LeapYearFlag = date ('L', $FirstDay);
	$MonthName = date('F', $FirstDay);
	if ($Month ==2)
		$LastDay = 28 + $LeapYearFlag;
	else if (($Month == 4)) || ($Month == 6) ||
	         ($Month == 9) || ($Month == 11))
		$LastDay = 30;
	else $LastDay = 31;
}
	
?>



