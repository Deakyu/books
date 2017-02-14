<?php
 class DB
 {

   public static function GetSubjects() {
     $conn = DB::CreateConnection();
     $rawResults = $conn->query('SELECT subjects FROM Subject');
     $subjects = [];
     while ($row = $rawResults->fetch_assoc()) {
       $subjects[] = $row;
     }
     return $subjects;
   }

   public static function CreateConnection() {
     $connection = new mysqli(
     "fredbooks.cbyhnokab1r4.us-east-2.rds.amazonaws.com",
      "lee5250",
       "uH2D2H6u",
        "fredbooks");
     if($connection->connect_error) {
       // stop all php, there is a connection error.
       die("Connection error: " . $connection->connect_error);
     }
     return $connection;
   }
 }
 ?>
