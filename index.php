<?php
    include_once "connection.php";

    $query = mysqli_query($connection,"SELECT * FROM demo");
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <a href="add.php">Add New Contact</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Fullname</th>
            </tr>
            <?php
            while($result = mysqli_fetch_array($query))
            {
            ?>
                <tr>
                    <td><?php echo $result['id'];?></td>
                    <td><?php echo $result['fullname'];?></td>
                </tr>
            <?php 
            }
            ?>
        </table>
    </body>
    </html>