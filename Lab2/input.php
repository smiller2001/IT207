<form action="calendar.php" method="POST" class="setupform">
	<h2>Office Hours Setup Form</h2>
	<div class ="calendarform"> 
		<?php
			echo "<div class='table'><b>";
				echo("<div class='table_row'>");
					echo "<div class='table_cell_week'>Day:</div>";
					echo "<div class='table_cell_week'>Monday</div>";
					echo "<div class='table_cell_week'>Tuesday</div>";
					echo "<div class='table_cell_week'>Wednesday</div>";
					echo "<div class='table_cell_week'>Thursday</div>";
					echo "<div class='table_cell_week'>Friday</div>";
				echo("</div>");
				echo("<div class='table_row'>");
					echo "<div class='table_cell_input' size= '12'>Time:</div>";
					echo "<div class='table_cell_input'>";
						echo "<select class='time_list' name='monday_appointments[]' size= '12' multiple>
									<option value='7:00am'>7:00am</option>
									<option value='7:30am'>7:30am</option>
									<option value='8:00am'>8:00am</option>
									<option value='8:30am'>8:30am</option>
									<option value='9:00am'>9:00am</option>
									<option value='9:30am'>9:30am</option>
									<option value='10:00am'>10:00am</option>
									<option value='10:30am'>10:30am</option>
									<option value='11:00am'>11:00am</option>
									<option value='11:30am'>11:30am</option>
									<option value='12:00pm'>12:00pm</option>
									<option value='12:30pm'>12:30pm</option>
									<option value='1:00pm'>1:00pm</option>
									<option value='1:30pm'>1:30pm</option>
									<option value='2:00pm'>2:00pm</option>
									<option value='2:30pm'>2:30pm</option>
									<option value='3:00pm'>3:00pm</option>
									<option value='3:30pm'>3:30pm</option>
									<option value='4:00pm'>4:00pm</option>
									<option value='4:30pm'>4:30pm</option>
									<option value='5:00pm'>5:00pm</option>
									<option value='5:30pm'>5:30pm</option>
									<option value='6:00pm'>6:00pm</option>
									<option value='6:30pm'>6:30pm</option>
									<option value='7:00pm'>7:00pm</option>
									<option value='7:30pm'>7:30pm</option>
									<option value='8:00pm'>8:00pm</option>
									<option value='8:30pm'>8:30pm</option>
									<option value='9:00pm'>9:00pm</option>
									<option value='9:30pm'>9:30pm</option>
									<option value='10:00pm'>10:00pm</option>
						</select><br/>";
					echo "</div>";
					echo "<div class='table_cell_input'>";
						echo "<select class='time_list' name='tuesday_appointments[]' size= '12' multiple>
									<option value='7:00am'>7:00am</option>
									<option value='7:30am'>7:30am</option>
									<option value='8:00am'>8:00am</option>
									<option value='8:30am'>8:30am</option>
									<option value='9:00am'>9:00am</option>
									<option value='9:30am'>9:30am</option>
									<option value='10:00am'>10:00am</option>
									<option value='10:30am'>10:30am</option>
									<option value='11:00am'>11:00am</option>
									<option value='11:30am'>11:30am</option>
									<option value='12:00pm'>12:00pm</option>
									<option value='12:30pm'>12:30pm</option>
									<option value='1:00pm'>1:00pm</option>
									<option value='1:30pm'>1:30pm</option>
									<option value='2:00pm'>2:00pm</option>
									<option value='2:30pm'>2:30pm</option>
									<option value='3:00pm'>3:00pm</option>
									<option value='3:30pm'>3:30pm</option>
									<option value='4:00pm'>4:00pm</option>
									<option value='4:30pm'>4:30pm</option>
									<option value='5:00pm'>5:00pm</option>
									<option value='5:30pm'>5:30pm</option>
									<option value='6:00pm'>6:00pm</option>
									<option value='6:30pm'>6:30pm</option>
									<option value='7:00pm'>7:00pm</option>
									<option value='7:30pm'>7:30pm</option>
									<option value='8:00pm'>8:00pm</option>
									<option value='8:30pm'>8:30pm</option>
									<option value='9:00pm'>9:00pm</option>
									<option value='9:30pm'>9:30pm</option>
									<option value='10:00pm'>10:00pm</option>
						</select><br/>";
					echo "</div>";
					echo "<div class='table_cell_input'>";
						echo "<select class='time_list' name='wednesday_appointments[]' size= '12' multiple>
									<option value='7:00am'>7:00am</option>
									<option value='7:30am'>7:30am</option>
									<option value='8:00am'>8:00am</option>
									<option value='8:30am'>8:30am</option>
									<option value='9:00am'>9:00am</option>
									<option value='9:30am'>9:30am</option>
									<option value='10:00am'>10:00am</option>
									<option value='10:30am'>10:30am</option>
									<option value='11:00am'>11:00am</option>
									<option value='11:30am'>11:30am</option>
									<option value='12:00pm'>12:00pm</option>
									<option value='12:30pm'>12:30pm</option>
									<option value='1:00pm'>1:00pm</option>
									<option value='1:30pm'>1:30pm</option>
									<option value='2:00pm'>2:00pm</option>
									<option value='2:30pm'>2:30pm</option>
									<option value='3:00pm'>3:00pm</option>
									<option value='3:30pm'>3:30pm</option>
									<option value='4:00pm'>4:00pm</option>
									<option value='4:30pm'>4:30pm</option>
									<option value='5:00pm'>5:00pm</option>
									<option value='5:30pm'>5:30pm</option>
									<option value='6:00pm'>6:00pm</option>
									<option value='6:30pm'>6:30pm</option>
									<option value='7:00pm'>7:00pm</option>
									<option value='7:30pm'>7:30pm</option>
									<option value='8:00pm'>8:00pm</option>
									<option value='8:30pm'>8:30pm</option>
									<option value='9:00pm'>9:00pm</option>
									<option value='9:30pm'>9:30pm</option>
									<option value='10:00pm'>10:00pm</option>
						</select><br/>";
					echo "</div>";
					echo "<div class='table_cell_input'>";
						echo "<select class='time_list' name='thursday_appointments[]' size= '12' multiple>
									<option value='7:00am'>7:00am</option>
									<option value='7:30am'>7:30am</option>
									<option value='8:00am'>8:00am</option>
									<option value='8:30am'>8:30am</option>
									<option value='9:00am'>9:00am</option>
									<option value='9:30am'>9:30am</option>
									<option value='10:00am'>10:00am</option>
									<option value='10:30am'>10:30am</option>
									<option value='11:00am'>11:00am</option>
									<option value='11:30am'>11:30am</option>
									<option value='12:00pm'>12:00pm</option>
									<option value='12:30pm'>12:30pm</option>
									<option value='1:00pm'>1:00pm</option>
									<option value='1:30pm'>1:30pm</option>
									<option value='2:00pm'>2:00pm</option>
									<option value='2:30pm'>2:30pm</option>
									<option value='3:00pm'>3:00pm</option>
									<option value='3:30pm'>3:30pm</option>
									<option value='4:00pm'>4:00pm</option>
									<option value='4:30pm'>4:30pm</option>
									<option value='5:00pm'>5:00pm</option>
									<option value='5:30pm'>5:30pm</option>
									<option value='6:00pm'>6:00pm</option>
									<option value='6:30pm'>6:30pm</option>
									<option value='7:00pm'>7:00pm</option>
									<option value='7:30pm'>7:30pm</option>
									<option value='8:00pm'>8:00pm</option>
									<option value='8:30pm'>8:30pm</option>
									<option value='9:00pm'>9:00pm</option>
									<option value='9:30pm'>9:30pm</option>
									<option value='10:00pm'>10:00pm</option>
						</select><br/>";
					echo "</div>";
					echo "<div class='table_cell_input'>";
						echo "<select class='time_list' name='friday_appointments[]' size= '12' multiple>
									<option value='7:00am'>7:00am</option>
									<option value='7:30am'>7:30am</option>
									<option value='8:00am'>8:00am</option>
									<option value='8:30am'>8:30am</option>
									<option value='9:00am'>9:00am</option>
									<option value='9:30am'>9:30am</option>
									<option value='10:00am'>10:00am</option>
									<option value='10:30am'>10:30am</option>
									<option value='11:00am'>11:00am</option>
									<option value='11:30am'>11:30am</option>
									<option value='12:00pm'>12:00pm</option>
									<option value='12:30pm'>12:30pm</option>
									<option value='1:00pm'>1:00pm</option>
									<option value='1:30pm'>1:30pm</option>
									<option value='2:00pm'>2:00pm</option>
									<option value='2:30pm'>2:30pm</option>
									<option value='3:00pm'>3:00pm</option>
									<option value='3:30pm'>3:30pm</option>
									<option value='4:00pm'>4:00pm</option>
									<option value='4:30pm'>4:30pm</option>
									<option value='5:00pm'>5:00pm</option>
									<option value='5:30pm'>5:30pm</option>
									<option value='6:00pm'>6:00pm</option>
									<option value='6:30pm'>6:30pm</option>
									<option value='7:00pm'>7:00pm</option>
									<option value='7:30pm'>7:30pm</option>
									<option value='8:00pm'>8:00pm</option>
									<option value='8:30pm'>8:30pm</option>
									<option value='9:00pm'>9:00pm</option>
									<option value='9:30pm'>9:30pm</option>
									<option value='10:00pm'>10:00pm</option>
						</select><br/>";
					echo "</div>";
				echo("</div>");
			echo "</b></div>";
			echo "<br /><br />"
		?>	
	</div>
	<b><input type="submit" name="submit" value="Submit"/></b>
	<input type="reset" name="clear" value="Clear" />
	<input type="hidden" name="userid" value="U001" />
</form>
