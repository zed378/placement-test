<?php
require 'function.php';
$result1 = mysqli_query($mysqli, "SELECT * FROM users_tb");
$result2 = mysqli_query($mysqli, "SELECT * FROM skill_tb");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dumbways</title>
    <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container-fluid text-center p-4">
        <h1>Unknown List</h1>
        <div class="row text-center">
            <a href="add.php" name="" action=""><button class="btn btn-success">Tambah Data</button></a>
            <div class="col-lg-12" style="padding: 25px 0 0 0;">
                <table class="table table-hover align-middle">
                    <tbody>
                        
                        <tr>
                            <td><img src="./assets/img/default.svg" style="max-height: 150px;"></td>
                            <td>
                                <h1>Zed</h1>
                                <h4 class="text-secondary">Skill</h4>
                            </td>
                            <td>
                                <a href="edit.php" name="" action=""><button class="btn btn-outline-primary">Edit</button></a>
                                <a href="delete.php" name="" action=""><button class="btn btn-outline-danger">Edit</button></a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>