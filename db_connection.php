<?php
function OpenCon()
 {
 $dbhost = "uknpt-capone01";
 $dbuser = "RyanQuizLogin";
 $dbpass = "RyanQuiz123";
 $db = "RyanQuiz";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>