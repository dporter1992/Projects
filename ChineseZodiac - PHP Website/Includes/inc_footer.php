&copy; 2016
<br />
<?php
$prov_array = file("proverbs.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$proverbcount = count($prov_array);
$index = rand(0, $proverbcount-1);
echo "<img src=".getimage().">";
function getimage() {
  $files = glob( "images/Dragon*.png");
  shuffle($files);
  return $files['0'];
}
?>

<?php
require_once("DB/inc_connect.php");
$SQLQuery="select count(*) from random_proverb;";
$result=@mysql_query($SQLQuery, $DBConnect);
if ($result===FALSE) {
        echo "Internal Error (3)";
    }
$count_arr = mysql_fetch_row($result);  
$count = $count_arr[0];
$proverb_id = rand(1, $count);
mysql_query("set character_set_results='utf8'");
$SQLQuery = "select proverb_text " .
            "from random_proverb " .
            "where proverb_id=" . $proverb_id . ";";
$result=@mysql_query($SQLQuery, $DBConnect);
$proverb_arr = mysql_fetch_array($result);
$proverb = $proverb_arr[0];
echo "<hr />";
echo "<p>$proverb</p>";
$update_query = "UPDATE random_proverb " .
    "SET proverb_count = proverb_count + 1 " .
    "WHERE proverb_id = " . $proverb_id . ";";
mysqli_query($mysqli, $update_query)
            or die(mysqli_error($mysqli));
?>