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
                             <link rel="stylesheet" href="comments.css">

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
	
            <contentbox>
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
								<form action="db_newcomments.php" method="POST">
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
							<br />
							<a href ="db_index.php">Add More Comments</a>
							<br />
							<a href ="db_comments.php">Go Back to All Comments(Database Version)</a>
                                                        
                 </contentbox>
  </div>
    <div class="footer"> 
     <?php include "footer.inc"; ?>
    </div>
</body>
</html>
