
<?php include("./includes/connection.php") ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sportz &mdash; kostech</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  <div class="container text-center  py-30 mt-50">

    
   

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmatches">
Add MAtches
</button>

<!-- Modal -->
<div class="modal fade" id="addmatches" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Matches</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="./includes/action.php" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput">Home  Team</label>
    <input type="text" class="form-control" name="homeTeame" id="home-match" placeholder="Home team">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Country</label>
    <input type="text" class="form-control" name="homeTeamcountry" id="home-match-country" placeholder="country">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">League</label>
    <input type="text" class="form-control" name="homeTeamleague" id="home-match-league" placeholder="league">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"> Away Teame</label>
    <input type="text" class="form-control" name="awayTeam" id="away-match" placeholder=" Away team">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Away Teame Country</label>
    <input type="text" class="form-control" name="homeTeamecounty" id="away-matchcountry" placeholder="Country">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">League</label>
    <input type="text" class="form-control" name="awayTeameleague" id="away-matchleague" placeholder="league">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Result</label>
    <input type="text" class="form-control" name="result" id="result-match" placeholder="Result">
  </div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" value="addmatches" class="btn btn-warning">Add</button>
      </div>
    </div>
  </div>
</div>
  



  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nextmatches">
Next Matches
</button>

<!-- Modal -->
<div class="modal fade" id="nextmatches" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">  Next Matches</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="./includes/action.php" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput">Home Team</label>
    <input type="text" class="form-control" name="homeTeame" id="home-match" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Country</label>
    <input type="text" class="form-control" name="homeTeamcountry" id="home-match-country" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">League</label>
    <input type="text" class="form-control" name="homeTeamleague" id="home-match-league" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"> Away Team</label>
    <input type="text" class="form-control" name="awayTeam" id="away-match" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Away Teame Country</label>
    <input type="text" class="form-control" name="homeTeamecounty" id="away-matchcountry">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">League</label>
    <input type="text" class="form-control" name="awayTeameleague" id="away-matchleague" placeholder="league">
  </div>
  
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" value="addmatches" class="btn btn-warning">Add</button>
      </div>
    </div>
  </div>
</div>
  </div>



 


  <?php include("./includes/footer.php") ?>