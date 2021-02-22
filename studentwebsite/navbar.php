<?php

$tutor_sql = "SELECT * FROM tutorgroup";
$tutor_qry = mysqli_query($dbconnect, $tutor_sql);
$tutor_aa = mysqli_fetch_assoc($tutor_qry);
 ?>
 <div class="banner">
   <a href="index.php"><h1>St Andrew's College</h1></a>
 </div>
 <div id="navbar">
   <!--gives everything inside the divtag the id navbar which shows what to format in css -->
   <div class="navbargrid">
     <!--applies the divtag which sets the navbars formatting with css grid -->
     <div class="logo">
       <a href="index.php?page=home">Home</a>
     </div>
     <div class="navbar1">
       <a href="index.php?page=addtutor">Add Tutor</a>
     </div>
     <div class="navbar2">
       <a href="index.php?page=studentsearch">Search For Student</a>
     </div>
     <div class="navbar3">
       <a href="index.php?page=displaydelete">Delete Student</a>
     </div>
     <div class="navbar4">
       <div class="dropdown">
         <button class="dropbtn">Dropdown
           <i class="fa fa-caret-down"></i>
         </button>
         <div class="dropdown-content">
           <a href="#">Link 1</a>
           <a href="#">Link 2</a>
           <a href="#">Link 3</a>
         </div>
       </div>
     </div>
     <!--contains each of the boxes in the navbar, each with different contents -->
   </div>
 </div>
 <?php
   do {
     $tutorgroupID = $tutor_aa['tutorgroupID'];
     $tutorcode = $tutor_aa['tutorcode'];

     echo "<a href='index.php?page=tutorgroup&tutorgroupID=$tutorgroupID&tutorcode=$tutorcode'>$tutorcode</a>";

    } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry))
 ?>
