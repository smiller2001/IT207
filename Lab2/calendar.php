 <link rel="stylesheet" href="calendar.css">
						<div class="main_container">
							<div class ="calendarform"> 
								<form method="POST" class="email_name">
									<h2>Office Hours Sign Up</h2>
									Student Name <input type="text" id="student_name" name="student_name" required="required"/>
									Student E-mail: <input type="email" name="student_email" required="required"/>
									<input type="submit" name="submit" value="Submit"/>
									<input type="reset" name="clear" value="Clear" />
									<input type="hidden" name='monday_appointments' value='$monday_appointments[]' />
									<br />
									<br />
									<?php
         function send_mail()
         {
             if (isset($_POST["student_email"])) {
                 $student_email = $_POST["student_email"];
                 $name = $_POST["student_name"];
                 $subject = "Lab 2 Assignment";
                 $message = "Testing if this email sends sign up for office hours for $student_email";
                 $header = "From: smille78.gmu.edu";

                 $response = mail(
                     "euyar@gmu.edu ",
                     $subject,
                     $message,
                     $header
                 );
                 echo $response;
                 if ($response == 1) {
                     echo "The message was sent <b>successfully</b> from smille78@gmu.edu!!!!";
                 } elseif ($response == 0) {
                     echo "<br /><br />The message was <b>NOT Successful</b> at sending!!!!!";
                 }
             }
         }
         send_mail();

         echo "<div class='table'>";
         $calendar_heading = [
             "Sunday",
             "Monday",
             "Tuesday",
             "Wednesday",
             "Thursday",
             "Friday",
             "Saturday",
         ];
         $days_in_week = count($calendar_heading) - 1;
         $month = date("F");
         $month_int = date("m");
         $year = date("Y");
         $first_day = mktime(0, 0, 0, $month_int, 1, $year);

         //The header of table is created
         echo "<div class='table_row'>";
         echo "<div class='table_header' colspan='7'>$month $year</div>";
         echo "</div>";

         //The days of the week are created in a single row.
         echo "<div class='table_days_of_week'>";
         for ($count = 0; $count < 7; $count++) {
             echo "<div class='table_cell_week'>",
                 $calendar_heading[$count],
                 "</div>";
         }
         echo "</div>";

         //getting the curent date, number of days, and the counter for the nuber days of the month.
         $date_info = getdate($first_day);
         $days_of_week = $date_info["wday"];
         $days_of_week_counter = $days_of_week;
         $current_day = 1;
         $number_of_days = cal_days_in_month(CAL_GREGORIAN, $month_int, $year);
         $day_number = 1;
         echo "<div class='table_row'>";
         while ($days_of_week_counter > 0) {
             echo "<div class='table_cell' colspan='$days_of_week'>&nbsp;</div>";
             $days_of_week_counter--;
         }
         while ($current_day <= $number_of_days) {
             if ($days_of_week == 7) {
                 $days_of_week = 0;
                 //closes table_row div, and creates a new div table_row.
                 echo "</div><div class='table_row'>";
             }
             echo "<div class='table_cell'>";
             echo $current_day, "<br /><br />";
             echo "<div class='scroll_option'>";
             //this function adds the time chosen to the calendar.
             schedule_display($month_int, $current_day, $year);
             echo "</div>";

             echo "</div>";
             $current_day++;
             $days_of_week++;
         }
         while ($current_day > $number_of_days and $current_day <= 31) {
             echo "<div class='table_cell' colspan='$days_of_week'>&nbsp;</div>";
             $current_day++;
         }
         echo "</div>";
         echo "</div>";

         if (isset($_POST["submit"])) {
         }

         function schedule_display($month_int, $current_day, $year)
         {
             $day_holder = date(
                 "l",
                 mktime(0, 0, 0, $month_int, $current_day, $year)
             );

             if ($day_holder == "Monday") {
                 if (isset($_POST["monday_appointments"])) {
                     foreach ($_POST["monday_appointments"] as $mtime) {
                         echo "<input type='radio' id='time' name='available_time' value=$mtime><label for='time'>$mtime</label><br>";
                         echo "<input type='hidden' name='monday_appointments[]' value=$mtime>";
                     }
                 }
             } elseif ($day_holder == "Tuesday") {
                 if (isset($_POST["tuesday_appointments"])) {
                     foreach ($_POST["tuesday_appointments"] as $ttime) {
                         echo "<input type='radio' id='time' name='available_time' value=$ttime><label for='time'>$ttime</label><br>";
                         echo "<input type='hidden' name='available_time[]' value=$ttime>";
                     }
                 }
             } elseif ($day_holder == "Wednesday") {
                 if (isset($_POST["wednesday_appointments"])) {
                     foreach ($_POST["wednesday_appointments"] as $wtime) {
                         echo "<input type='radio' id='time' name='available_time' value=$wtime><label for='time'>$wtime</label><br>";
                         echo "<input type='hidden' name='available_time[]' value=$wtime>";
                     }
                 }
             } elseif ($day_holder == "Thursday") {
                 if (isset($_POST["thursday_appointments"])) {
                     foreach ($_POST["thursday_appointments"] as $thtime) {
                         echo "<input type='radio' id='time' name='available_time' value=$thtime><label for='time'>$thtime</label><br>";
                         echo "<input type='hidden' name='available_time[]' value=$thtime>";
                     }
                 }
             } elseif ($day_holder == "Friday") {
                 if (isset($_POST["friday_appointments"])) {
                     foreach ($_POST["friday_appointments"] as $ftime) {
                         echo "<input type='radio' id='time' name='available_time' value=$ftime><label for='time'>$ftime</label><br>";
                         echo "<input type='hidden' name='available_time[]' value=$ftime>";
                     }
                 }
             }
         }
         ?>
								</form>
							</div>
						</div>

            
    </body>
</html>