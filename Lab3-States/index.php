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
									<div class ="contactform"> 
								<form action="process.php" method="POST" class="setupform">
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

                    
                  

	
 </contentbox>
</body>
</html>
