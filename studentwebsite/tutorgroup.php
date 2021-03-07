<?php
if(!isset($_GET['tutorgroupID'])) {
  header("Location: index.php");
} else {
  $tutorcode = $_GET['tutorcode'];
  $tutorgroupID = $_GET['tutorgroupID'];
  $tutor_sql = "SELECT * FROM student WHERE tutorgroupID=$tutorgroupID";
  $tutor_qry = mysqli_query($dbconnect, $tutor_sql);

  if(mysqli_num_rows($tutor_qry)==0) {
    echo "<h1>No students in $tutorcode</h1>";
  } else {
    $tutor_aa = mysqli_fetch_assoc($tutor_qry);
    echo "<h1>$tutorcode</h1>";
    ?>
      <div class="container-fliud">
      <div class="row">
    <?php

    do {
      $firstname = $tutor_aa['firstname'];
      $lastname = $tutor_aa['lastname'];
      $photo = $tutor_aa['photo'];

      ?>
          <div class="col-lg-4 col-md-4 bg-danger">
            <img src="images/<?php echo $photo; ?>" class="img-fluid" alt="">
            <p><?php echo "$firstname $lastname"; ?></p>
          </div>
    <?php

    } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));
  }
}

?>
</div>
</div>
