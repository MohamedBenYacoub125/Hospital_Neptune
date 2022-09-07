<?php
include("header.php");

?>

<table>
<th>Numéro</th>
<th>Patient name</th>
<th>Email address</th>
<th>Date</th>

<?php

$host = "localhost";
$user ="root";
$password ="";
$db="hospital";

$con=mysqli_connect($host,$user,$password,$db);

//////////////////importation donnée des patients///////////////////////////////////////////
 
$query = "SELECT*FROM neptune";
$reslut = mysqli_query($con,$query);

if($reslut){
   while($row= mysqli_fetch_assoc($reslut)){
    echo "<tr><td>" .$row['id'] . "</td><td>" .$row['name'] ."</td><td>" .$row['email'] ."</td><td>" .$row['date'] ."<br>" . "<br>"."</td></tr>";
    echo "<br>";
    
   

   }
   echo "</table>";
}



?>