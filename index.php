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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <a href="add.php" class="btn btn-success">Add New Contact</a>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Fullname</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    while($result = mysqli_fetch_array($query))
                    {
                    ?>
                        <tr>
                            <td><?php echo $result['id'];?></td>
                            <td><?php echo $result['fullname'];?></td>
                            <td><a href="edit.php?id=<?php echo $result['id'];?>">Edit</a>| <a href="delete.php?id=<?php echo $result['id'];?>" onClick="return confirm('Are you sure to delete?')">Delete</a></td>

                        </tr>
                    <?php 
                    }
                    ?>
                </table>
            </div>
        </div>
    </body>
    </html>