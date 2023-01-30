
<?php include("./includes/header.php") ?>
<?php include("./includes/connection.php") ?>


 
<div class="site-blocks-vs site-section bg-light">
      <div class="container">

      <div class="mr-auto order-md-1 w-60 text-center text-lg-center bg-success mb-3 mb-lg-0">
            Next match 
 <div id="date-countdown"></div>
          </div>
<?php
$sql = "SELECT * FROM nextmaches";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   ?>
        <div class="border mb-3 rounded d-block d-lg-flex align-items-center p-3 next-match">
          
         

          <div class="ml-auto pr-4 order-md-2">
            <div class="h5 text-black text-uppercase text-center text-lg-left">
              <div class="d-block d-md-inline-block mb-3 mb-lg-0">
                <img src="images/img_1_sq.jpg" alt="Image" class="mr-3 image"><span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0"><?php  echo $row['hometeam'] ?> </span>
              </div>
              <span class="text-muted mx-3 text-normal mb-3 mb-lg-0 d-block d-md-inline ">vs</span> 
              <div class="d-block d-md-inline-block">
                <img src="images/img_3_sq.jpg" alt="Image" class="mr-3 image"><span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0"><?php  echo $row['awayteam'] ?></span>
              </div>
            </div>
          </div>
          
          
        </div>
        <?php }
} else {
  echo "0 results";
}
?>
 
    <!-- END row -->
   <div class="container bg-danger text-uppercase rounded w-50 text-center"><h1><span>Last won Prediction</span></h1>

   </div>

    <?php

  
    $sql = "SELECT * FROM gamesplayed";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   ?>


    <div class="bg-image overlay-success rounded mb-5" style="background-image: url('images/hero_bg_1.jpg');" data-stellar-background-ratio="0.5">
          
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">

              <div class="text-center text-lg-left">
                <div class="d-block d-lg-flex align-items-center">
                  <div class="image mx-auto mb-3 mb-lg-0 mr-lg-3">
                    <img src="images/img_1_sq.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="text">
                    <h3 class="h5 mb-0 text-black"><?php  echo $row['hometeam'] ?></h3>
                    <span class="text-uppercase small country text-black"><?php  echo $row['homecountryteam'] ?></span>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
              <div class="d-inline-block">
                <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">Bundesliga &mdash; Round 10</small></p>
                <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h3"><?php  echo $row['result'] ?></span></div>
                <p class="mb-0"><small class="text-uppercase text-black font-weight-bold"><?php  echo $row['date'] ?></small></p>
              </div>
            </div>

            <div class="col-md-12 col-lg-4 text-center text-lg-right">
              <div class="">
                <div class="d-block d-lg-flex align-items-center">
                  <div class="image mx-auto ml-lg-3 mb-3 mb-lg-0 order-2">
                    <img src="images/img_4_sq.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="text order-1">
                    <h3 class="h5 mb-0 text-black"><?php  echo $row['awayteam'] ?></h3>
                    <span class="text-uppercase small country text-black"><?php  echo $row['awaycountryteam'] ?></span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        



<?php }
} else {
  echo "0 results";
}
?>
    <?php


  
$sql = "SELECT * FROM matches";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   ?>
 
  <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
  <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

    <div class="text-center text-lg-left">
      <div class="d-block d-lg-flex align-items-center">
        <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
          <img src="images/img_1_sq.jpg" alt="Image" class="img-fluid">
        </div>
        
        <div class="text">
         <h3 class="h5 mb-0 text-black"><?php  echo $row['matchA'] ?></h3>
          <span class="text-uppercase small country"><?php  echo $row['country'] ?></span>
        </div>
      </div>
    </div>

  </div>
  <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
    <div class="d-inline-block">
      <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
    </div>
  </div>

  <div class="col-md-4 col-lg-4 text-center text-lg-right">
    <div class="">
      <div class="d-block d-lg-flex align-items-center">
        <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
          <img src="images/img_4_sq.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="text order-1 w-100">
          <h3 class="h5 mb-0 text-black"><?php  echo $row['matchB'] ?></h3>
          <span class="text-uppercase small country"><?php  echo $row['country2'] ?></span>
        </div>
      </div>
    </div>
  </div>
</div>

<?php }
} else {
  echo "0 results";
}
$con->close();


?>

  

                      <!-- END row -->

                     


    <?php include("./includes/footer.php") ?>