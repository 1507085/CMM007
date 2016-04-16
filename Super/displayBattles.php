
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Superhero</title>
</head>
<body>
<header>
    <h1>The Super-Superhero System</h1>
    <h2>Display all Battles</h2>
    <P><a href="index.php">Return to home..</a></P>
</header>
<main>
    <?php
    include (db_connect.php);
    if(isset($_GET['id'])){
        $superheroID = $_GET['id'];
        $sql_query = "SELECT* FROM superheroID WHERE superheroID= 'superheroID'";
    }
    else {
        $result = $db->query($sql_query);
    }
        while($row=$result->fetch_array()){
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $mainSuperpower = $row['mainSuperPower'];
            $villianFought = $row['villianFought'];
            echo "<articl>
                 <p> The superher known as<strong>{$firstname}{$lastname}</strong> recently fought
                 <strong>{$villianFought}</strong>{$mainSuperpower}</p></articl>";
        }
    ?>
</main>
</body>
</html>