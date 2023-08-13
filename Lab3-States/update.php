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
			
							<div class ="update">
								<?php
									if(file_exists("contact.txt")){
										if (isset($_POST["new_first_name"], $_POST["new_last_name"], $_POST["new_email"], $_POST["new_number"], $_POST["new_address"], $_POST["new_city"], $_POST["new_state"], $_POST["new_zipcode"])){
											$update_entry = "**" . $_POST["new_first_name"] . "," .  $_POST["new_last_name"] . "," . $_POST["new_email"] . "," . $_POST["new_number"] . "," . $_POST["new_address"] . "," . $_POST["new_city"] . "," . $_POST["new_state"] . "," . $_POST["new_zipcode"] . "\n";
											$read_file = fopen("contact.txt", "rt");
											$file_content = file_get_contents("contact.txt");
											$records = explode("**", $file_content);
											$count = count($records);
											for ($i=1;$i<$count;$i++){
												$record = explode(",", $records[$i]);
												
												if ((!strcasecmp($record[0], $_POST['new_first_name'])) && (!strcasecmp($record[1], $_POST['new_last_name']))){
													$records[$i] = $update_entry;
													$write_file = fopen("contact.txt", "w");
													if (flock($write_file, LOCK_EX)) { 
														if (fwrite($write_file,$records[$i])>0){
															echo "<p> Edit was successful!!!!! </p>";
														}
														else {
															echo "<p> Edit was <b>NOT</b> successful </p>";
														}
														flock($read_file, LOCK_UN);
														fclose($write_file);
													}
													else{
														echo "could not get the lock for the page.";
													}
												}
											}
											fclose($read_file);
										}	
									}
								?>
								<br />
								<br />
								<a href="index.php">Return to Directory<a>
							</div>
 </contentbox>
<div class ="copyright">
    <?php readfile("footer.inc"); ?>
<!--#include virtual="footer.inc" -->
</div>        
	</body>
</html>
