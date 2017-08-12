<?php

/*
Name:Dillon Porter
CP2420 PHP | 20131546
Chinese Zodiac Quiz Midterm
*/


//answer array
$CorrectAnswers = array("12", "False", "8640", "Secret", "Rat", "Cat", "Monkey", "False", "True", "Monkey");
//questions from a text file
$question = file("zodiac_questions.txt");
//pulling answers from the form
$zodiac = $_POST['Q'];
//checking if the submit button was pressed
if(isset($_POST['submit'])) {
    //checking in names are empty!
if(!empty($_POST['user_name']) && !empty($_POST['user_email']) && !empty($_POST['review_email'])) {
   // variable for user name 
   $user_name = $_POST['user_name'];
   //regular expression checking
   $name = preg_match("/^[A-Z][a-zA-Z -]+$/", $user_name);
if($name === 1) {
    //if true then variable for user email
    $user_email = $_POST['user_email'];
    //regular expression checking
    $usemail = preg_match("/^[_a-zA-Z0-9-]+(\.[_0-9A-Za-z-]+)*@[0-9A-Za-z-]+(\.[a-zA-Z0-9-]+)*(\.[a-z]{2,3})$/", $user_email);
    if($usemail === 1) {
    //if passes then reviewers email
    $review_email = $_POST['review_email'];
    //regular expression checking
    $remail = preg_match("/^[_a-zA-Z0-9-]+(\.[_0-9A-Za-z-]+)*@[0-9A-Za-z-]+(\.[a-zA-Z0-9-]+)*(\.[a-z]{2,3})$/", $review_email);    
     if($remail === 1) {
    //variable for blank ansers
    $blank_answers = 0;
    //cheks if the zodiac Quiz array 1 is empty 
   if (empty($ChineseZodiacQuiz[1])) {
    //if it is
     echo "please answer question 1.<br/>";
    //adds 1 to blank_answers variable if field is empty
    $blank_answers ++;
    }
    //checks if the zodiac Quiz array 2 is empty 
        if (empty($ChineseZodiacQuiz[2])) {
        //if it is
        echo "please answer question 2.<br/>";
        //adds 1 to blank_answers variable if field is empty
        $blank_answers ++;
        }
       //checks if the zodiac Quiz array 3 is empty 
        if (empty($ChineseZodiacQuiz[3])) {
        //if it is
        echo "please answer question 3.<br/>";
        //adds 1 to blank_answers variable if field is empty
        $blank_answers ++;
        }
        //checks if the zodiac Quiz array 4 is empty 
        if (empty($ChineseZodiacQuiz[4])) {
        //if it is
        echo "please answer question 4.<br/>";
        //adds 1 to blank_answers variable if field is empty
        $blank_answers ++;
        }
       //checks if the zodiac Quiz array 5 is empty 
       if (empty($ChineseZodiacQuiz[5])) {
       //if it is
       echo "please answer question 5.<br/>";
       //adds 1 to blank_answers variable if field is empty
        $blank_answers ++;
        }
      //checks if the zodiac Quiz array 6 is empty 
       if (empty($ChineseZodiacQuiz[6])) {
       //if it is
       echo "please answer question 6.<br/>";
      //adds 1 to blank_answers variable if field is empty
      $blank_answers ++;
      }
     //checks if the zodiac Quiz array 7 is empty 
     if (empty($ChineseZodiacQuiz[7])) {
     //if it is
     echo "please answer question 7.<br/>";
     //adds 1 to blank_answers variable if field is empty
     $blank_answers ++;
     }
     //checks if the zodiac Quiz array 8 is empty 
     if (empty($ChineseZodiacQuiz[8])) {
     //if it is
     echo "please answer question 8.<br/>";
    //adds 1 to blank_answers variable if field is empty
    $blank_answers ++;
    }
    //checks if the zodiac Quiz array 9 is empty 
    if (empty($ChineseZodiacQuiz[9])) {
    //if it is
    echo "please answer question 9.<br/>";
    //adds 1 to blank_answers variable if field is empty
    $blank_answers ++;
    }
    //checks if the zodiac Quiz array 10 is empty 
    if (empty($ChineseZodiacQuiz[10])) {
    //if it is
    echo "please answer question 10.<br/>";
    //adds 1 to blank_answers variable if field is empty
    $blank_answers ++;
    }
   //checks to makes sure all the questions were answered 
   if ($blank_answers !=0) {
   //Tells you which question are wrong
   echo "You did not answer a total of " . $blank_answers . " questions.<br/>";
   echo "Press back button to go back and fill them out.";
   }
   //if they all pass 
   else {
   //set up a counter to keep track of the question numbers
   $count = 1;
   //set up a counter to keep track of the correct answers
   $Correct = 0;
   //declares and initializes a variable to display the results
   $display = "";
    //makes sure first letter is upper case to match answers
    $ChineseZodiacQuiz[4] = ucwords($ChineseZodiacQuiz[4]);
    $ChineseZodiacQuiz[5] = ucwords($ChineseZodiacQuiz[5]);
    $ChineseZodiacQuiz[6] = ucwords($ChineseZodiacQuiz[6]);
    //for each array to display the questions and ansers
    foreach($ChineseZodiacQuiz as $user_response)
    {
     //adds the word Question and Number
     $display .= "<p class='question'><em>Question ". $count. ".</em> ";
    //Adds the Question # and with a period and a space and then the user response
     $display .= "<p class='test'><strong>" . $question[$count - 1] . "</strong><br /> A: " . $user_response . " ";
	 //this is necessary because the answers are in an array beginning with 0
     if ($user_response == $CorrectAnswers[$count - 1]) {
     //if user response correct, the program shows the correct response and indicates response is correct
    $display.= "<span style = 'color: green'><strong>Correct!</strong></span><br /></p><hr />\r\n";
	//the number correct is increased by 1
     $Correct++;
    }
    //if the user response is wrong, the program shows the users answer, lets the user know it is incorrect, and displays the correct answer
     else
     {
    //if incorrect will display this with the correct answer
    $display .= "<span style = 'color: red'><strong>Incorrect!</strong></span> (" . $CorrectAnswers[$count - 1] . ")<br /><hr />\r\n";
     }
    $count++;
     }
	// Display conditional statement depending on users score messages with a switch statement
      switch ($Correct) {
      case ($Correct == 10):
      $score_based = "<h4 class='test'>Excellent - <em>you xi&#249;</em></h4>\r\n";
      break;
      case (8 <= $Correct && $Correct < 10):
      $score_based = "<h4 class='test'>Awesome - <em>you d&#236;</em></h4>\r\n";
      break;    
      case (6 <= $Correct && $Correct < 8):
      $score_based = "<h4 class='test'>Super - <em>chaoj&#236;</em></h4>\r\n";
      break;    
      case (4 <= $Correct && $Correct < 6):
      $score_based = "<h4 class='test'>Good - <em>li&#225;nghao</em></h4>\r\n";
      break;    
      case (2 <= $Correct && $Correct < 4):
      $score_based = "<h4 class='test'>Not Bad - <em>b&#249; hu&#224;i</em></h4>\r\n";
      break;    
      case (0 <= $Correct && $Correct < 2):
      $score_based = "<h4 class='test'>Try Again - <em>z&#224;i shi</em></h4>\r\n";
      break;    
      default:
      $score_based = "<h4 class='test'>No score for you! Boo - <em>xu</em></h4>\r\n";
      }
     //set up a counter to keep track of the question numbers
     $num = 1;
     //set up a counter to keep track of the correct answers
     $right = 0;
     //declares and initializes a variable to display the results
     $display_mail = "";
     //for each array to display the questions and answers
	 
     // display for email without questions
     foreach($ChineseZodiacQuiz as $user_mail)
     {
       //dispaly question with number
       $display_mail .= "<strong>Question</strong> ". $num;
      //Adds the Question # and with a period and a space and then the user response
       $display_mail .= " - <em> A: </em>" . $user_mail . " ";
     //this is necessary because the answers are in an array beginning with 0
      if ($user_mail == $CorrectAnswers[$num - 1]) {
      //if user response correct, the program shows the correct response and indicates response is correct
      $display_mail.= "<span style = 'color: green'><strong>Correct!</strong></span><br />\r\n";

     //the number correct is increased by 1
       $right++;
       }
      //if the user response is wrong, the program shows the users answer, lets the user know it is incorrect, and displays the correct answer
       else
      {
     //if not correct will display with with the correct answer
      $display_mail .= "<span style = 'color: red'><strong>Incorrect!</strong></span> (" . $CorrectAnswers[$num - 1] . ")<br />\r\n";
      }
      $num++;
      }
	  
	 //to send this as an email
     $to = $review_email;
     $subject = "Zodiac Quiz Results";
     $Percent = ($Correct/10) * 100;
     $message = "<h3>Results from the zodiac quiz</h3><strong>Number Correct:</strong> " . $Correct . "/10 or " . $Percent . "%.<br /><br />\r\n" . $display_mail;
	 
     //not required
     $headers = 'From: ' . $user_name . "\r\n";
     $headers .= "MIME-Version: 1.0\n" ; 
     $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
     mail($to, $subject, $message, $headers);

    //displays the test results
     echo "<h2 class='test'>Results of your test:</h2>";
     $Percent = ($Correct/10) * 100;
     echo "<p class='test2'><strong>Number Correct:</strong> " . $Correct . "/10 or " . $Percent . "%.</p>\r\n";
     echo $score_based . "<p class='test2'>Your test has been submitted to " . $to . ".</p><hr />";
     echo $display;
     }
       }
        else{
           echo "Please Enter a valid reviwers email address<br />\r\n";    
               }    
                 }
                  else{
                       echo "Please Enter a valid user email address<br />\r\n";
                    }    
				}
            else{
                echo "Please make sure that you're name contains only letters spaces and dashes.<br />\r\n";
            }
    }
    else{
            echo "Please makes sure to enter your name and email along with the email of the reviewer.<br />\r\n";
    }
}
?>