<?php
/**
 * Created by PhpStorm.
 * User: totio
 * Date: 11/04/2016
 * Time: 02:42
 */?>
<html>
<head>
<meta charset="utf-8">
    <title>Superhero System</title>
</head>
<body>
<header>
<h1>The Super-Superhero System</h1>
    <h2>Superhero Home Page</h2>
</header>
<p>What would you like to do?</p>
<ul>
    </li><a href="insertSuperhero.php">Insert a superhero</a></li>
    </li><a href="displaySuperhero.php">Display all superheros</a></li>
    </li><a href="battle.php">Insert a battle</a></li>
    </li><a href="displayBattles.php">Display all battles</a></li>
    <ul>
<?php
include ("db_connect.php");
$sql_query= "SELECT * FROM superheros";
$result =$db->query($sql_query);
while($row = $result->fetch_array()){
    $firstname = $row["firstName"];
    $lastname = $row["lastName"];
    $id = $row["superheroID"];
    echo "<li><a href='displayBattles.php?id={$id}'>Battles for {$firstname}{$lastname}</a></li>";
}
?>
        </ul>
</ul>
</body>
</html>