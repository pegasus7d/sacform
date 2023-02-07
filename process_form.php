<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['name'])&& isset($_POST['position']) && isset($_POST['email']) && isset($_POST['city'])&& isset($_POST['connected'])&& isset($_POST['contact'])&& isset($_POST['suggestionStudent'])&& isset($_POST['suggestionFaculty'])&& isset($_POST['almaDep'])&& isset($_POST['almaIns'])&& isset($_POST['almaHall'])&& isset($_POST['almaEntrepreneurship'])&& isset($_POST['suggestionWomenEdu'])&& isset($_POST['InstituteRankingImprovement'])) {
  // $name = $_POST['name'];
  // $email = $_POST['email'];




  $name=$_POST['name'];
  $position=$_POST['position'];
  $email=$_POST['email'];
  $city=$_POST['city'];
  $connected=$_POST['connected'];
  $contact=$_POST['contact'];
  $suggestionStudent=$_POST['suggestionStudent'];
  $suggestionFaculty=$_POST['suggestionFaculty'];
  $almaDep=$_POST['almaDep'];
  $almaIns=$_POST['almaIns'];
  $almaHall=$_POST['almaHall'];
  $almaEntrepreneurship=$_POST['almaEntrepreneurship'];
  $suggestionWomenEdu=$_POST['suggestionWomenEdu'];
  $InstituteRankingImprovement=$_POST['InstituteRankingImprovement'];
 
  
  $sql = "INSERT INTO users (name,position,email,city,connected,contact,suggestionStudent,suggestionFaculty,almaDep,almaIns,almaHall,almaEntrepreneurship,suggestionWomenEdu,InstituteRankingImprovement)
  VALUES ('$name', '$position','$email','$city','$connected','$contact','$suggestionStudent','$suggestionFaculty','$almaDep','$almaIns','$almaHall','$almaEntrepreneurship','$suggestionWomenEdu','$InstituteRankingImprovement')";
 $name = $_POST['name1'];
 $phone = $_POST['phone1'];
 foreach($name as $index => $names)
    {
        $s_name = $names;
        $s_phone = $phone[$index];
        // $s_otherfiled = $empid[$index];

        $query = "INSERT INTO demo (name,phone) VALUES ('$s_name','$s_phone')";
        $query_run = mysqli_query($conn, $query);
    } 

  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);




?>