<?php
date_default_timezone_set('Canada/Newfoundland');
$currentyear = date("Y");
$AnimalSigns = array(
  "rat" => array(
    "Start Date" => "1900",
    "End Date" => "2020",
    "President" => "George Washington"),
  "ox" => array(
    "Start Date" => "1901",
    "End Date" => "2021",
    "President" => "Barack Obama"),
  "tiger" => array(
    "Start Date" => "1902",
    "End Date" => "2022",
    "President" => "Dwight Eisenhower"),
  "rabbit" => array(
    "Start Date" => "1903",
    "End Date" => "2023",
    "President" => "John Adams"),
  "dragon" => array(
    "Start Date" => "1904",
    "End Date" => "2024",
    "President" => "Abraham Lincoln"),
  "snake" => array(
    "Start Date" => "1905",
    "End Date" => "2025",
    "President" => "John Kennedy"),
  "horse" => array(
    "Start Date" => "1906",
    "End Date" => "2026",
    "President" => "Theodore Roosevelt"),
  "goat" => array(
    "Start Date" => "1907",
    "End Date" => "2027",
    "President" => "James Madison"),
  "monkey" => array(
    "Start Date" => "1908",
    "End Date" => "2028",
    "President" => "Harry Truman"),
  "rooster" => array(
    "Start Date" => "1909",
    "End Date" => "2029",
    "President" => "Grover Cleveland"),
  "dog" => array(
    "Start Date" => "1910",
    "End Date" => "2030",
    "President" => "George Walker Bus"),
  "pig" => array(
    "Start Date" => "1911",
    "End Date" => "2031",
    "President" => "Ronald Reagan"),
);
if (isset($_POST['birthyear'])) {
  $year = $_POST['birthyear'];
  $sign = findsign($year);
  $count = getstats($year);
  $SignMessage = "If your Chinese zodiac sign is the $sign you share a zodiac sign with President " . $AnimalSigns[$sign]["President"] . ". <br />";
  $SignMessage .= "Years of the $sign include ";
  for ($i = $AnimalSigns[$sign]["Start Date"]; $i < $AnimalSigns[$sign]["End Date"]; $i+=12)
    $SignMessage .= $i . ", ";
  $SignMessage .= "and " .
  $AnimalSigns[$sign]["End Date"] . ".";
  echo "You were born under the sign of the " . $sign;
  echo "<br/ >";
  echo "<img src='images/" . $sign .".png'>";
  echo "<br/ >";
  echo "You are visitor ".$count." to enter ".$year;
  echo "<br/ >";
  echo $SignMessage;
} else {
?>
  <form method="POST" >
  <p>What year were you born? <input type="number" name="birthyear" min="<?php echo $currentyear-100 ?>" max="<?php echo $currentyear ?>" required autofocus></p>
    <input type="submit" name="submit">
  </form>
<?php } ?>