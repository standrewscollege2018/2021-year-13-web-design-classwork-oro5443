<?php
  if(!isset($_POST['search'])) {
    header("Location: search.php");
  }
  include("studentsearch.php");
  $search = $_POST['search'];

  $result_sql = "SELECT * FROM student WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%'";

  $result_qry = mysqli_query($dbconnect, $result_sql);
?>
  <div class="container-fliud">
    <div class="row">
  <?php
  if(mysqli_num_rows($result_qry)==0) {
      echo "
      <div class='alert alert-primary' role='alert'>
      No Results Match This Search
      </div>";
    } else {
      $result_aa = mysqli_fetch_assoc($result_qry);

      do {
        $firstname = $result_aa['firstname'];
        $lastname = $result_aa['lastname'];
        $photo = $result_aa['photo'];
        ?>
            <div class="col-lg-4 col-md-4 bg-danger">
              <img src="images/<?php echo $photo; ?>" class="img-fluid" alt="">
              <p><?php echo "$firstname $lastname"; ?></p>
            </div>
      <?php
        } while ($result_aa = mysqli_fetch_assoc($result_qry));


  }

 ?>
</div>
</div>
