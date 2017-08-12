<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>Chinese Zodiac Quiz</title>

<!--
Name:Dillon Porter
CP2420 PHP | 20131546
Chinese Zodiac Quiz Midterm
-->

</head>
<body>
<form name = 'zodiac' action = 'ChineseZodiacQuiz.php' method = 'post'>
 <p class="test">
  <strong>Name:</strong> <input type = 'text' name = 'user_name' /><br /><br />
  <strong>Your Email:</strong> <input type = 'text' name = 'user_email' /><br /><br />
  <strong>Reviewers Email:</strong> <input type = 'text' name = 'review_email' /></p><br >
  
<p class='test'><span class='question'>Question 1. How many chinese zodiac signs are there?</span>
<br />
<br />
<input type = 'radio' name = 'Q[1]' value = '12' /> Twelve<br />
<input type = 'radio' name = 'Q[1]' value = '5' /> Five<br />
<input type = 'radio' name = 'Q[1]' value = '7' /> Seven<br />
<input type = 'radio' name = 'Q[1]' value = '4' />  Four<br /></p>

<p class='test'><span class='question'>Question 2. The hamster is one of the chinese zodiacs.</span>
<br />
<br />
<input type = 'radio' name = 'Q[2]' value = 'True' /> True<br />
<input type = 'radio' name = 'Q[2]' value = 'False' /> False<br /></p>

<p class='test'><span class='question'>Question 3. How many possible personality combinations of the Chinese zodiac are, including the birth month, birth hour and five elements?</span>
<br />
<br />
<input type = 'radio' name = 'Q[3]' value = '12' /> 12<br />
<input type = 'radio' name = 'Q[3]' value = '3456' /> 3,456<br />
<input type = 'radio' name = 'Q[3]' value = '8640' /> 8,640<br />
<input type = 'radio' name = 'Q[3]' value = '144' />  144<br /></p>
<p class='test'><span class='question'>Question 4. The birth hour zodiac is called a persons ____ animal!
</span>
<br />
<br />
<input type = 'text' name = 'Q[4]' /></p>

<p class='test'><span class='question'>Question 5. Which Zodiac did the Jade Emperor give the task of gathering the animals to report to him?
</span>
<br />
<br />
<input type = 'text' name = 'Q[5]' /></p>

<p class='test'><span class='question'>Question 6. Which animal swore to be the Rats enemy because the rat tricked them into missing the banquet?
</span>
<br />
<br />
<input type = 'text' name = 'Q[6]' /></p>

<p class='test'><span class='question'>Question 7. Someone Born in the year of 1992 would have what zodiac sign.</span>
<br />
<br />
<input type = 'radio' name = 'Q[7]' value = 'Rabbit' /> Rabbit<br />
<input type = 'radio' name = 'Q[7]' value = 'Sheep' /> Sheep<br />
<input type = 'radio' name = 'Q[7]' value = 'Horse' /> Horse<br />
<input type = 'radio' name = 'Q[7]' value = 'Monkey' /> Monkey<br /></p>

<p class='test'><span class='question'>Question 8. The inner animal is determined by a humans birth hour.</span>
<br />
<br />
<input type = 'radio' name = 'Q[8]' value = 'True' /> True<br />
<input type = 'radio' name = 'Q[8]' value = 'False' /> False<br /></p>

<p class='test'><span class='question'>Question 9. The Sheng xiao are the 12 animals that represent the chinese zodiac!</span>
<br />
<br />
<input type = 'radio' name = 'Q[9]' value = 'True' /> True<br />
<input type = 'radio' name = 'Q[9]' value = 'False' /> False<br /></p>

<p class='test'><span class='question'>Question 10. The Year 2016 will be the year of what zodiac sign?</span>
<br />
<br />
<input type = 'radio' name = 'Q[10]' value = 'Dragon' /> Dragon<br />
<input type = 'radio' name = 'Q[10]' value = 'Ox' /> Ox<br />
<input type = 'radio' name = 'Q[10]' value = 'Tiger' /> Tiger<br />
<input type = 'radio' name = 'Q[10]' value = 'Monkey' /> Monkey<br /></p>
<p class='test'><input type = 'submit' name = 'submit' value = 'Submit Answers' /></p>
</form>
</body>
</html>
