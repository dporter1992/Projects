<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Chinese Zodiac</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<a href="index.php?page=home_page&section=php" class="navlink">PHP</a>
<a href="index.php?page=home_page&section=zodiac" class="navlink">Chinese Zodiac</a>
<a href="index.php?page=home_page&section=feedback" class="navlink">Feedback</a>

<?php 
    if (isset($_GET['section'])) {
        switch ($_GET['section']) {
            case 'zodiac':
                include('Includes/inc_chinese_zodiac.php');
                break;
		    case 'feedback':
			    include('zodiac_feedback.html');
				break;
            default:
                include('Includes/inc_php_info.php');
                break;
        }
    }
    else {
        include ('Includes/inc_php_info.php');
    }
?>