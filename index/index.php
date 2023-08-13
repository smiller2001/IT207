<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="index.css">
  <title>Practice Lab</title>
</head>
<body>
<div class="menu">
    <?php
require 'menu.inc';
?>
  <!--#include virtual="menu.inc" -->
</div>
    <?php
readfile('heading.inc');
?>
<!--Lab Content-->
<div class="flex-container">
  <div><contentbox><h2>Professional and Personal Details </h2> Simone was born in 2001 in Maryland. She moved to Virginia when she was 5 and has lived in northern Virginia since. She lives with her parents. She graduated high school in 2019, graduated from NVCC in 2021 with a B.A. in General Studies and plans to graduate from GMU in 2024 with a B.A in Information Technology. </div>
</contentbox>

<div>
<contentbox>
<img src="camel.jpg" alt= "Simone, smiling on a camel" width=40% height=50%>
</contentbox>
</div>

<contentbox>
<p>
<h2>Summary </h2>
<ul> <li>Personal </li>
 <ul> <li>Gold Award Girl Scout</li> <li>Studied Arabic abroad in Jordan in summer 2022</li> <li>Loves Fantasy Books</li></ul></ul><ul> <li>Academic <ul> <li>Graduated from Northern Virginia Community College in 2021</li> <li>Member of Phi Theta Kappa</li> <li>Made Dean's List at both NVCC and GMU</li></ul> </p> 

</contentbox>
</div>
<!--Copyright-->
<div class ="copyright">
    <?php
readfile('footer.inc');
?>
<!--#include virtual="footer.inc" -->
</div>        
    </body>
</html> 
