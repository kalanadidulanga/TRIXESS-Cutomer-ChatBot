<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Setting | TRIXESS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Profile Setting | TRIXESS</title>
    <link rel="stylesheet" href="css/profileSetting.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <?php
    require "connection.php";

    session_start();

    if (isset($_SESSION["u"])) {
        $data = $_SESSION["u"];



        ?>

        <div class="loginBody d-flex flex-column">

            <div class="d-flex">
                <div class="profileheading me-auto">PROFILE SETTING</div>
                <div class="backbtn ms-auto me-5" onclick="window.location='home.php';" type="button">
                    < BACK</div>

                </div>

                <div class="d-flex justify-content-center align-items-center flex-column">
                    <div class="circle d-flex">
                        <img src="image location" alt="" class="rounded-circle z-1">
                    </div>
                    <div class="m-2">
                        <?php echo $data["fname"] . ' ' . $data["lname"]; ?>
                    </div>

                    <div class="row">
                        <div class=" col-6">
                            <div class="d-flex flex-column m-4">
                                <label for="fname" class="fs-6">First Name</label>
                                <input type="text" id="fname" value="<?php echo $data["fname"];?>" class="fs-4 p-1 rounded-2 border-0">
                            </div>

                            <div class="d-flex flex-column m-4">
                                <label for="fname" class="fs-6">Last Name</label>
                                <input type="text" id="fname" value="<?php echo $data["lname"];?>" class="fs-4 p-1 rounded-2 border-0">
                            </div>
                        </div>
                        <div class=" col-6">
                            <div class="d-flex flex-column m-4">
                                <label for="fname" class="fs-6">Email</label>
                                <input type="text" id="fname" value="<?php echo $data["email"];?>" class="fs-4 p-1 rounded-2 border-0">
                            </div>

                            <div class="d-flex flex-column m-4">
                                <label for="fname" class="fs-6">Password</label>
                                <input type="text" id="fname" value="<?php echo $data["password"];?>" class="fs-4 p-1 rounded-2 border-0">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-info fw-bold fs-3 col-3 border-0 mb-3 mt-5">UPDATE INFO</button>

                </div>






            </div>
            <?php

} else {
    header("Location: login.php");
    exit;
}


    ?>

</body>

</html>