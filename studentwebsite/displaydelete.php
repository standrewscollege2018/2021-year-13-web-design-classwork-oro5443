<h2>Click On A Student To Delete</h2>

<?php
  $result_sql = "SELECT * FROM student";

  $result_qry = mysqli_query($dbconnect, $result_sql);
?>
  <div class="container-fliud">
    <div class="row">
  <?php
  if(mysqli_num_rows($result_qry)==0) {
      echo "<h1>No results found</h1>";
    } else {
      $result_aa = mysqli_fetch_assoc($result_qry);

      do {
        $firstname = $result_aa['firstname'];
        $lastname = $result_aa['lastname'];
        $photo = $result_aa['photo'];
        $studentID = $result_aa['studentID'];
        
        echo "<div class='col-lg-4 col-md-4 bg-danger'>
          <a href='index.php?page=deletestudent&studentID=$studentID'><img src='images/$photo' class='img-fluid' alt=''></a>
          <p>$firstname $lastname</p>
        </div>";

        } while ($result_aa = mysqli_fetch_assoc($result_qry));


  }

 ?>
</div>
</div>
