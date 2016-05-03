<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Bugs</title>
</head>
<body>
<header>
    <img src="logo.png" width="100"/>
    <span><strong>BugTracker</strong><br>
        Keeping track of all the pesky little bugs</span>
    <p><a href="index.php">Return home</a></p>
</header>
<main>
    <?
include("connection.php");
    $sql="SELLECT* FROM bugs";
    $result=$db->query($sql);
    while($row=$result->fetch_array()){
        $bugName=$row['bugName'];
        $BugSummary=$row['BugSummary'];
        $BugCategory=$row['BugCategory'];
        echo "<article>
              <h2>{$bugName}<br></h2>
              <p>{$BugCategory}<br>{$BugSummary}</p>
              </article>";
    }
?>
</main>
</body>