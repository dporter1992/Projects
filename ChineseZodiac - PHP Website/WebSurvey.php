<?php

session_start();

$survey_questions = array(
    1 => " Was the navigation straightfoward and did all the links work?",
    2 => " Was the selection of background color, font color, and font size apprpriate?",
    3 => " Were the images appropriate and did they complement the Web content?",
    4 => " Were the descriptions of the PHP program complete and easy to understand?",
    5 => " Was the PHP code structured properly and well commented?");
$question_count = count($survey_questions);

if (isset($_SESSION['CurrentQuestion'])) {
    if (($_SESSION['CurrentQuestion'] > 0) && (isset($_POST['response']))) {
        $_SESSION['Responses'][$_SESSION['CurrentQuestion']] = $_POST['response'];
    }
    ++$_SESSION['CurrentQuestion'];
}
else
    $_SESSION['CurrentQuestion'] = 0;

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Web Survey</title>
</head>

<body>

<h1>Web Survey</h1>

<?php
include('inc_site_counter.php');

if ($_SESSION['CurrentQuestion'] == 0) {
    ?>
    <p>Thank you for reviewing the Zodiac Web site. Your candid responses to the following five questions will help improve the effectiveness of our PHP demonstration site.</p>
    <?php
}

else if ($_SESSION['CurrentQuestion'] > $question_count) 
    {
        ?>
        <p>Thank you for completing the survey!</p>
        <?php

        $to = 'j.rosen.artist@gmail.com.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
        $email_subject = "Zodiac Survey";
        $email_body = $_SESSION['Responses'];
        $headers = "From: noreply@jayrosen.org\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
        $headers .= "Reply-To: $email_address";    
        mail($to,$email_subject,$email_body,$headers);

        

    } 
    
else {
        echo "<p>Question " . $_SESSION['CurrentQuestion'] . ": " . $survey_questions[$_SESSION['CurrentQuestion']] . "</p>\n";
     }

if ($_SESSION['CurrentQuestion'] <= $question_count)
{
    echo "<form method='post' action='web_survey.php'>\n";
    echo "<input type = 'hidden' name='PHPSESSID' value=' " .
    session_id() . "' />\n";

    if ($_SESSION['CurrentQuestion'] > 0) {
        echo "<p><input type='radio' name='response' " .
        " value='Exceeds Expectations' /> " .
        " Exceeds Expectations<br />\n";

        echo "<p><input type='radio' name='response' " .
        " value='Meets Expectations'" . 
        " checked='checked' /> " .
        " Meets Expectations<br />\n";

        echo "<p><input type='radio' name='response' " .
        " value='Below Expectations' /> " .
        " Below Expectations<br />\n";
    }

    echo "<input type='submit' name='submit' value='";
        if($_SESSION['CurrentQuestion'] == 0)
            echo "Start the survey";
        else if ($_SESSION['CurrentQuestion'] == $question_count)
            echo "Finished";
        else
            echo "Next Question";
        echo "' />\n";
        echo "</form>\n";


}


?>

<footer class="center" style="clear: both;">
<?php include 'inc_footer.php'; ?>
</footer>


</div>
</body>

</html>