<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Lab 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="filesandstrings.css" type="text/css" />
        
    </head>
    <body>
        
            <div class="sidebar">
                <?php include("menu.inc"); ?>
            </div>
            <div class="box">
                <?php include("header1.inc"); ?>
            </div>
        <div class="box">
                <?php include("header2.php"); ?>
            </div>
                <div class="right_container">
                    <div>  
						<div class="main_container">
							<div class ="contactform"> 
								<form action="process.php" method="POST">
									<h2>Online Contacts Directory</h2> 
									<h3>Search for a Contact</h3>
									First Name <input type="text" name="first_name"/>
									<br />
									<br />
									Last Name: <input type="text" name="last_name"/>
									<br />
									<br />
									<b><input type="submit" name="search" value="Search"/></b>
									<input type="hidden" name="form" value="search" />
									<br />
									<br />
									<a href="add.php">Add New Contact Entry<a>
								</form>
							</div>						
						</div>
                    <div class="footer_container"> 
						<p class="footer_content">
							<?php include("footer.inc"); ?>
							
							</p>
					</div>
                    
                    </div>
                </div>

            </div>
        </div>
            
    </body>
</html>
   


