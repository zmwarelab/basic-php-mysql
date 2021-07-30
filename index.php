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
                    $query = "SELECT * FROM `stores`";
                    $result = mysqli_query($db, $query);
                    echo "<table>
                            <tr>
                                <td class='title'>ID</td>
                                <td class='title'>Store Name</td>
                                <td class='title'>Artist</td>
                                <td class='title'>Product</td>
                            </tr>";
                    if(mysqli_num_rows($result)>0){
                        while( $data = mysqli_fetch_assoc($result) ){
                            echo "<tr><td>".$data['id']."</td><td>".$data['naame']."</td><td>".$data['artist']."</td><td>".$data['products']."</td></tr>";
                        }
                    }
                    echo "</table>";
                }
            ?>
        </div>
    </main>
</body>
</html>
