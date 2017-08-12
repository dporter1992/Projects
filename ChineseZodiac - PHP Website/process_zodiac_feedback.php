<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Chinese Zodiac Feedback Processed</title>
</head>
<!-- Project 8-2.-->
<body>
<?php
    // Import DB connection string
    require_once("DB/inc_connect.php");
    $is_ok_to_insert = True;
    if (isset($_POST['sender'])) {
        $sender = trim(stripslashes($_POST['sender']));
        if (!preg_match("/[a-zA-Z]/", $sender)) {
           $ErrorMsgs[]="Only letters are allowed in the name."; 
           $is_ok_to_insert = False;
        }
    }
    else {
        $is_ok_to_insert = False;
        $ErrorMsgs[]="Please provide your name.";
    }
    if (isset($_POST['message'])) {
        $message = trim(stripslashes($_POST['message']));
        if (strlen($message) < 4) {
            $is_ok_to_insert = False;
        $ErrorMsgs[]="Your message should be longer than 4 letters. We love to hear from you!";
        }
    }
    else {
        $is_ok_to_insert = False;
        $ErrorMsgs[]="Please provide your message.";
    }
   
    if (isset($_POST['is_public'])) {
        $is_public = $_POST['is_public'];
    }
    if ($is_ok_to_insert) {
        date_default_timezone_set('Newfoundland/Canada');
        $date = date('Y-m-d');
        $time = date('H:i:s');
        $query = "INSERT INTO zodiac_feedback" .
            "(message_date, message_time, sender, message, public_message) " .
            "VALUES (" . 
            "'" . $date . "', " .
            "'" . $time . "', " .
            "'" . $sender . "', " .
            "'" . $message . "', " .
            "'" . $is_public . "'" .
            ");";
        
        mysqli_query($mysqli, $query)
            or die(mysqli_error($mysqli));
        echo "<p>Thank you for your feedback! Your comment has been saved.</p>";
        echo "<p>You can view all public feedback <a href='view_zodiac_feedback.php'>here</a>.";
    }
    else {
        echo "<span>\n";
        echo "<p>The following errors were found when processing your entries:</p>\n";
        echo "<ul>\n";
        foreach ($ErrorMsgs as $Msg) {
            echo "<li class='error_text'>$Msg</li>\n";
        }
        echo "</ul>\n";
        echo "</span>\n";
    }
?>
</body>
</html>