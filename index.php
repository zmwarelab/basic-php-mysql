<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="AymKh">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB VIEWER</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <div id="left">
            <h1>Database Viewer</h1>
            <p>This queries data from a database 'demodb' - table 'stores'</p>
            <form action="index.php" method="POST">
                <div id="buttons">
                    <input type="submit" value="Query Data from DB" name="refresh-button">
                </div>
            </form>
        </div>
        <div id="right">
            <?php
            
                include('inc/connection.inc.php');

                if (isset($_POST['refresh-button'])){
                    $updateQuery = "SELECT * FROM `stores`";
                    $execUpdate = $db->query($updateQuery);
                    echo "<table>
                            <tr>
                                <td class='title'>ID</td>
                                <td class='title'>Store Name</td>
                                <td class='title'>Artist</td>
                                <td class='title'>Product</td>
                            </tr>";
                    while( $data = $execUpdate->fetch() ){
                        echo "<tr><td>".$data['id']."</td><td>".$data['naame']."</td><td>".$data['artist']."</td><td>".$data['products']."</td></tr>";
                    }
                    echo "</table>";
                }
            ?>
        </div>
    </main>
</body>
</html>