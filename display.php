<?php
include 'connect.php'
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database-info</title>
    <!-- bootstrap library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-image: url("images/pic3.jpg");
        }
    </style>
</head>

<body>
    <div class="container">
        <center><button class="btn btn-dark my-5"><a style="text-decoration: none;" href="user.php" class="text-light">Add user</a> </button></center>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "select * from `crud`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $password = $row['password'];
                        $mobile = $row['mobile'];
                        echo '
                        <tr>
                           <th scope="row">' . $id . '</th>
                           <td>' . $name . '</td>
                           <td>' . $email . '</td>
                           <td>' . $password . '</td>
                           <td>' . $mobile . '</td>
                           <td>
                    <button class="btn btn-outline-success"><a style="text-decoration: none;" href="update.php?updateid=' . $id . '" class="text-light">Update</a></button>
                    <button class="btn btn-outline-danger"><a style="text-decoration: none;" href="delete.php?deleteid=' . $id . '"  class="text-light">Delete</a></button>
                </td>
                        </tr>
                        ';
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>