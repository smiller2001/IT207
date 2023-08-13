<!DOCTYPE html PUBLIC " -//W3C//DTD HTML 4.01//EN
"http://www.w3.org/TR/html4/strict.dtd">
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>IT 207 Index</title>
	  <html xmlns= “http://www.w3.org/1999/xhtml”>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	  <link rel="stylesheet" href="index.css">
	
    </head>
    <body>
<div class="menu">
    <?php require "menu.inc"; ?>
  <!--#include virtual="menu.inc" -->
</div>


 <div class="heading"> 
     <?php include "heading.php"; ?>
<!--#include virtual="heading.php" -->
</div>
<html>
	<body>
            <contentbox>
						<?php
      //participation values
      $earned_participation = $_POST["earnedParticipation"];
      $max_participation = $_POST["maxParticipation"];
      $weighted_participation = $_POST["weightParticipation"];
      settype($earned_participation, "int");
      settype($max_participation, "int");
      settype($weighted_participation, "int");

      //quiz values
      $earned_quiz = $_POST["earnedQuiz"];
      $max_quiz = $_POST["maxQuiz"];
      $weighted_quiz = $_POST["weightQuiz"];
      settype($earned_quiz, "int");
      settype($max_quiz, "int");
      settype($weighted_quiz, "int");

      //lab values
      $earned_lab = $_POST["earnedLab"];
      $max_lab = $_POST["maxLab"];
      $weighted_lab = $_POST["weightLab"];
      settype($earned_lab, "int");
      settype($max_lab, "int");
      settype($weighted_lab, "int");

      //Practicum values
      $earned_practicum = $_POST["earnedPracticum"];
      $max_practicum = $_POST["maxPracticum"];
      $weighted_practicum = $_POST["weightPracticum"];
      settype($earned_practicum, "int");
      settype($max_practicum, "int");
      settype($weighted_practicum, "int");

      function earned_percentage($earned_value, $max_value)
      {
          $output = ($earned_value / $max_value) * 100;
          return $output;
      }
      $participation_grade = earned_percentage(
          $earned_participation,
          $max_participation
      );
      $quiz_grade = earned_percentage($earned_quiz, $max_quiz);
      $lab_grade = earned_percentage($earned_lab, $max_lab);
      $practicum_grade = earned_percentage($earned_practicum, $max_practicum);

      function weighted_calculator($grade_percent, $weight_percent)
      {
          $output = ($grade_percent / 100) * ($weight_percent / 100);
          return $output;
      }
      $participation_weighted =
          weighted_calculator($participation_grade, $weighted_participation) *
          100;
      $quiz_weighted = weighted_calculator($quiz_grade, $weighted_quiz) * 100;
      $lab_weighted = weighted_calculator($lab_grade, $weighted_lab) * 100;
      $practicum_weighted =
          weighted_calculator($practicum_grade, $weighted_practicum) * 100;

      echo "You earned a ",
          round($participation_grade, 2),
          "% for Participation, with weighted value of ",
          round($participation_weighted, 2),
          "% <br />";
      echo "<br /> You earned a ",
          round($quiz_grade, 2),
          "% for Quiz, with weighted value of ",
          round($quiz_weighted, 2),
          "% <br />";
      echo "<br /> You earned a ",
          round($lab_grade, 2),
          "% for Lab, with weighted value of ",
          round($lab_weighted, 2),
          "% <br />";
      echo "<br /> You earned a ",
          round($practicum_grade, 2),
          "% for Practicum, with weighted value of ",
          round($practicum_weighted, 2),
          "% <br />";

      $final_grade =
          $participation_weighted +
          $quiz_weighted +
          $lab_weighted +
          $practicum_weighted;

      $final_grade >= 95
          ? ($letter_grade = "A+")
          : (($final_grade >= 90 and $final_grade <= 95)
              ? ($letter_grade = "A")
              : (($final_grade >= 85 and $final_grade <= 90)
                  ? ($letter_grade = "B+")
                  : (($final_grade >= 80 and $final_grade <= 85)
                      ? ($letter_grade = "B")
                      : (($final_grade >= 75 and $final_grade <= 80)
                          ? ($letter_grade = "C+")
                          : (($final_grade >= 70 and $final_grade <= 75)
                              ? ($letter_grade = "C")
                              : (($final_grade >= 60 and $final_grade <= 70)
                                  ? ($letter_grade = "D")
                                  : (($final_grade >= 0 and $final_grade <= 60)
                                      ? ($letter_grade = "F")
                                      : ($letter_grade =
                                          "You entered a negative amount"))))))));

      echo "<br /><b> Your Final Grade is a ",
          round($final_grade, 2),
          "%, which is a ",
          $letter_grade,
          "</b>";
      ?>
                    </div>
                                </contentbox>
 <div class ="copyright">
    <?php readfile("footer.inc"); ?>
<!--#include virtual="footer.inc" -->
</div>        
	</body>
                    
                    </div>
                </div>

            </div>
        </div>
            
    </body>
</html>
