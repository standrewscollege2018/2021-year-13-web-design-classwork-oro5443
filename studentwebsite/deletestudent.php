<?php
  $studentID = $_GET['studentID'];

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
            <button onclick='myFunction()'>DELETE?</button>
          </div>
        </div>
      ";
 ?>

 <script>
 function myFunction() {
   var txt;
   var r = confirm("Are You Sure You Want To Delete <?php echo "$firstname" ?>?");
   if (r == true) {
     alert("Student Has Been Deleted");
     <?php
      echo "yesz";
      ?>
     location.replace("index.php?page=displaydelete");
   } else if (r == false) {
     alert("Deletion Cancelled");
     location.replace("index.php?page=displaydelete");
   }
 }
 </script>
