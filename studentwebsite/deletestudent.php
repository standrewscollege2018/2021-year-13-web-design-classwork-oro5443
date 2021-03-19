<?php
  $studentID = $_GET['studentID'];
  echo "$studentID";
  $deletestudent_sql = "SELECT * FROM student WHERE studentID=$studentID";
  $deletestudent_qry = mysqli_query($dbconnect, $deletestudent_sql);
  $deletestudent_aa = mysqli_fetch_assoc($deletestudent_qry);

  $firstname = $deletestudent_aa['firstname'];
  $lastname = $deletestudent_aa['lastname'];
  $photo = $deletestudent_aa['photo'];

  echo "<div class='container'>
          <div class='jumbotron'>
            <img src='images/$photo' class='img-fluid' alt=''>
            </br>$firstname $lastname
          </div>
        </div>
      ";
 ?>
