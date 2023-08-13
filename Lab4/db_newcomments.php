
<h2>Huh?</h2>
							<p>
								Krischer and Karpinski report that:<br />
								Students who used social networking sites while studying scored 20% lower on tests and students who used social media had <br />
								GPA of 3.06 versus non-users who had an average GPA of 3.82.<br />
								Source: Paul A. Kirschner and Aryn C. Karpinski," Facebook and Academic Performance," Computers in Human Behavior, Nov. 2010
							</p>
							<h1>Add Comments (Database Version)</h1>
							<hr />
							<div class ="commentform"> 
								<form action="db_comments.php" method="POST">
									Name: <input type="text" name="name">
									<br />
									<br />
									Email: <input type="email" name="email">
									<br />
									<br />
									Comments: <textarea name="comment" rows="3" cols="60"></textarea>
									<br />
									<br />
									<b><input type="submit" name="submit" value="Sign"/></b>
									<b><input type="reset" name="reset" value="Reset Form"/></b>
									<input type="hidden" name="comment_info"/>
									<br />	
								</form>
							</div>
							<hr />
							<a href="db_comments.php"><b>View Posting Comments</b><a>
							<br />
							<a href="index.php"><b>Add Comments(Text Version) </b><a>
                                                                											}
										}
									}			
								}
								else {
									echo '<h1>ERROR Entry!!!</h1>
										You have not entered all the details to submit the comment.<br />
										Please press "back" button to go back and fill all information or press the "Return to Home Page" button below.<br />
										<a href = "db_index.php">Return to Home Page</a><br/>';
								}
							?> 

