<?php

// session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'games';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// CREATE TABLE IF NOT EXISTS `matches` (
// 	`id` int(11) NOT NULL AUTO_INCREMENT   PRIMARY KEY,
//   	`matchA` varchar(50) NOT NULL,
//   	`country` varchar(255) NOT NULL,
//   	`league` varchar(100) NOT NULL,
//       `matchB` varchar(50) NOT NULL,
//   	`country2` varchar(255) NOT NULL,
//   	`league2` varchar(100) NOT NULL,
//   	`date` varchar(100) NOT NULL  CURDATE()
   
// ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

// INSERT INTO `accounts` (`matchA`, `country`, `league`, `matchB` ,`country2`, `league`, `date`)
//  VALUES ( 'Gormahia', 'kenya', 'Kenya Premear Laegue', 'Afc Leopard', 'Kenya','Kenya Premear Laegue');
// //  INSERT INTO phonebook (col_name, col_date) VALUE ('DATETIME: Auto CURDATE()', CURDATE() )";
// <?php
// $stmt = $con->prepare('SELECT * FROM matches ');
// $stmt->execute();
// while ($row=$stmt->fetch()) {
// 

// <?php }


// $sql = "SELECT * FROM matches";
// $result = $con->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();




////
// CREATE TABLE IF NOT EXISTS `gamesplayed` (
// 		`id` int(11) NOT NULL AUTO_INCREMENT   PRIMARY KEY,
// 	  	`hometeam` varchar(50) NOT NULL,
// 	  	`homecountryteam` varchar(255) NOT NULL,
// 	  	`homeleague` varchar(100) NOT NULL,
// 	    `awayteam` varchar(50) NOT NULL,
// 	  	`awaycountryteam` varchar(255) NOT NULL,
// 		`awayleage` varchar(100) NOT NULL,
// 	  	`result` varchar(255) NOT NULL,
// 	    `date`  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	   
// 	) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;