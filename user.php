<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Mobile = $_POST['Mobile'];

    $sql = "insert into `crud` (name,email,password,mobile) values('$Name','$Email','$Password','$Mobile') ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "data submitted succesfully!";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>


    <!-- bootstrap library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .container {
            padding: 30%;
            position: relative;
            bottom: 300px;

        }

        body {
            background-image: url("images/pic1.png");
        }
    </style>

</head>

<body>

    <div class="container">
        <h1>Sign<span></span>-Up</h1>
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="Name" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="Email" class="form-control" placeholder="Enter your Email" name="Email" required>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your Mobile no." name="Mobile" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your Password" name="Password" required>
            </div>

            <button type="submit" class="btn btn-outline-dark" name="submit">submit</button>

        </form>

    </div>
</body>

</html>