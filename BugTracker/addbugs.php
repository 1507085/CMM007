
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Bug</title>
</head>
<body>
<header>
    <img src="logo.png" width="100"/>
    <span><strong>BugTracker</strong><br>
        Keeping track of all the pesky little bugs</span>
</header>
<main>
    <section>
        <nav>
            <ul>
                <li><a href="showbug.php">All bugs Items</a></li>
                <li><a href="showbug.php?BugCategory=Android">Android Bugs</a></li>
                <li><a href="showbug.php?BugCategory=iOS">iOS Bugs</a></li>
                <li><a href="showbug.php?BugCategory=Windows">Window Bugs</a></li>
                <li><a href="addbugs.php">Insert Bug</a></li>
            </ul>
        </nav>
    </section>
    <?
    include("connection.php");
    if($_SERVER['REQUEST_METHOD']==='GET'){
       /* <form action="<?{($_SERVER['PHP_SELF'])?>" method="post">*/
        echo
        "<form action="<?php(($_SERVER['PHP_SELF'])?>" method="post">
         <label>Bug Name</label>
            <input type="text" name="BugName"/><br><br>
            <label>Bug Summary</label>
            <textarea name="BugSummary" cols="16" rows="5"></textarea><br><br>
            <label>Bug Category</label>
            <select>
                <option value="">Android</option>
                <option value="iOS">iOS</option>
                <option value="Windows">Windows</option>
            </select><br>
            <input type="submit" name="submit" value="Submit"/>
        </form>";
     }
    else if ($_SERVER['REQUEST_METHOD']==='POST') {
        $bugName = $_POST["BugName"];
        $BugSummary = $_POST["BugSummary"];
        $BugCategory = $_POST["BugCategory"];
        $sql = "INSERT INTO bugs(BugName, BugSummary, BugCategory)
                    VALUES ('$bugName', '$BugSummary', '$BugCategory')";
        if ($db->query($sql)) {
            header("location:showbugs.php");
        }
    }
    else{
        echo"error ".$sql;
    }

    else{
            header("location:index.php");
    }
     ?>
    </main>
</body>
</html>