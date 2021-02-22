<?php

  include("addtutor.php");
  $name = $_POST['name'];
  $tutorcode = $_POST['tutorcode'];

  $checktutor_sql = "SELECT * FROM tutorgroup WHERE tutor='$name' or tutorcode='$tutorcode'";

  $checktutor_qry = mysqli_query($dbconnect, $checktutor_sql);

  if(mysqli_num_rows($checktutor_qry)==0) {
    $addtutor_sql = "INSERT into tutorgroup (tutor, tutorcode) VALUES ('$name', '$tutorcode')";
    $addtutor_qry = mysqli_query($dbconnect, $addtutor_sql);
      echo "$name, $tutorcode";
    } else {
      echo "
      <div class='alert alert-primary' role='alert'>
      This tutor already exists!
      </div>";

  }


 ?>
