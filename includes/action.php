<?php
 include("./connection.php");

 if(isset($_POST['submit'])){
//     $action=$_POST['submit'];
// echo $action;
  
  $homeTeame=$_POST['homeTeame'];
  $homeTeamcountry=$_POST['homeTeamcountry'];
  $homeTeamleague=$_POST['homeTeamleague'];
  $awayTeam=$_POST['awayTeam'];
  $homeTeamecounty=$_POST['homeTeamecounty'];
  $awayTeameleague=$_POST['awayTeameleague'];
  $result=$_POST['result'];


// Insert data into mysql 
$sql= "INSERT INTO gamesplayed (hometeam, homecountryteam, homeleague, awayteam, awaycountryteam, awayleage, result) 
VALUES('$homeTeame', '$homeTeamcountry', '$homeTeamleague', '$awayTeam' , '$homeTeamecounty' , '$awayTeameleague', '$result')";



if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<BR>";
    header('Location:  ./admin.php');
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


 }



 if(isset($_POST['submit'])){
  //     $action=$_POST['submit'];
  // echo $action;
    
    $homeTeame=$_POST['homeTeame'];
    $homeTeamcountry=$_POST['homeTeamcountry'];
    $homeTeamleague=$_POST['homeTeamleague'];
    $awayTeam=$_POST['awayTeam'];
    $homeTeamecounty=$_POST['homeTeamecounty'];
    $awayTeameleague=$_POST['awayTeameleague'];
   
  
  
  // Insert data into mysql 
  $sql= "INSERT INTO nextmaches (hometeam, homecountryteam, homeleague, awayteam, awaycountryteam, awayleage) 
  VALUES('$homeTeame', '$homeTeamcountry', '$homeTeamleague', '$awayTeam' , '$homeTeamecounty' , '$awayTeameleague')";
  
  
  
  if ($con->query($sql) === TRUE) {
      echo "New matches added ";
      echo "<BR>";
      // header('Location:  index.php');
      // exit;
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
  
   }
   
  
   
 

 