<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Chinese Zodiac While Loop</title>
</head>
<body>
<?php
//array of animal names called zodiac_signs
$zodiac_signs = array (
    "Rat",
    "Ox",
    "Tiger",
    "Rabbit",
    "Dragon",
    "Snake",
    "Horse",
    "Goat",
    "Monkey",
    "Roster",
    "Dog",
    "Pig"
);

//array of animal pictures called zodiac_pictures
$zodiac_pictures = array (
    "../Images/rat.jpg",
    "../Images/ox.jpg",
    "../Images/tiger.jpg",
    "../Images/rabbit.jpg",
    "../Images/dragon.jpg",
    "../Images/snake.jpg",
    "../Images/horse.jpg",
    "../Images/goat.jpg",
    "../Images/monkey.jpg",
    "../Images/rooster.jpg",
    "../Images/dog.jpg",
    "../Images/pig.jpg"
);

//display table
echo "<table class='fill' border='1' cellspacing='2' cellpadding='6'><tr>";

//display animal name array in table heading
foreach ($zodiac_signs as $signs) {
    echo "<th>", $signs, "</th>\n";
}

//display end of row
echo "</tr>\n<tr>";

//display animal photo array in table cell
foreach ($zodiac_pictures as $photos) {
    echo "<td align='center'><img src='", $photos, "' atl='", $photos, "' width='60%' height='60%' /></td>\n";
}

//display end of row
echo "</tr>\n<tr>";

//inital year varialbe and col_count varialbe set to 0
$year = 1912;
$col_count = 0;

//while loop that loops untill the year of 2019
while ($year <= 2016) {

    //sets the row variable to 0 when col_count is a multiple of 12
    $row = $col_count % 12;
    if ($row == 0) {
        //if true end the row and starts a new one
        echo "</tr>\n<tr>";
    }
    
    //displays years in table cells
    echo "<td align='center'>", $year, "</td>";
    
    //add one to col_count and year
    ++$year;
    ++$col_count;
}

//displays end of row and table
echo "</tr>\n</table>";
?>

</body>
</html>