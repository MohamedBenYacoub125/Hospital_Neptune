<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neptune Hospital</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="man">
    <div class="logo">
        <img src="images/Neptune.png" alt="">
        <h2>Hospital Neptune</h2>
    </div>
</div>
<div class="réservations">
<p>Bienvenue à l'hôpital Neptune pour les réservations, veuillez remplir les suites ci-dessous</p>

<form action="index.php" method="post">
    <input type="text" placeholder="Entrez votre nom complet" name="name"/>
    <input type="text" placeholder="Votre adresse email" name="email"/>
    <input type="date"  name="date"/>
    <input type="submit" value="Réserver"  name="send"/>
</form>
</div>



<?php





// //////conacter a base de donnée///////

$host = "localhost";
$user ="root";
$password ="";
$db="hospital";

$con=mysqli_connect($host,$user,$password,$db);

error_reporting(E_ALL ^ E_NOTICE);




//Envoyer les données du patient à la base de données//




    $pName  = $_POST['name'];
    $pemail = $_POST['email'];
    $pdate  = $_POST['date'];
    $psend  = $_POST['send'];

    

    if($psend) {
        $query = "INSERT INTO neptune(name,email,date) VALUE('$pName','$pemail' ,'$pdate')";
        $result = mysqli_query($con,$query);
        echo "<div class ='text'> <p style='color:green' ,text-align: 'center'>" ."Le rendez-vous est pris". "</p> </div>"  ;
    }
    else{
       
        echo "<p style=color :red'>" ."Erreur réessayez". "</p>";
    }

///////////////////////////////////////////////////


?>







    
</body>
</html>