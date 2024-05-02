<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer_Registration</title>
    <style>
        body {
            background: rgb(52, 4, 85);
            background: linear-gradient(77deg, rgba(52, 4, 85, 1) 19%, rgba(81, 5, 129, 1) 56%, rgba(110, 5, 129, 1) 85%);
            text-align: center;
            transform: translateY(300px);
        }

        h1 {
            color: #fff;

        }

        a {
            text-decoration: none;
            color: #fff;
            border: 2px solid #804cbb;
            padding: 6px 50px;
            border-radius: 30px;
            box-shadow: 0 0 10px #4208df, 0 0 100px #4208df, 0 0 150px #4208df;
            transition: 1s;
            position: relative;
            top: 5%;

        }

        a:hover {
            box-shadow: 0 0 10px #4208df, 0 0 250px #d808df, 0 0 300px #d808df;
            letter-spacing: .5em;
            border: 2px solid #d808df;
        }

        img {
            width: 200px;
            position: absolute;
            /* transform: translateX(200px); */
            transform: translate(-100px, -200px);
        }
    </style>
</head>

<body>
    <img src="./images/about.png" width="100" alt="">
    <?php
    include ("db/config.php");

    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $number = $_POST["number"];
        $wnumber = $_POST["wnumber"];
        $address = $_POST["address"];
        $state = $_POST["state"];
        $seats = $_POST["seats"];
        $tier = $_POST["tier"];
        $selected = $_POST["selected"];

        $result = mysqli_query($mysqli, "insert into btwebsite value('','$name','$email','$number','$wnumber','$address','$state','$seats','$tier','$selected')");
        if ($result) {
            echo "<h1>Your Registration Successfully Submited... We Are Response Soon .... Watch Your Email</h1>";
        } else {
            echo "<h1>Something Went Wrong </h1>";
        }

    }


    ?>
    <a href="./homepae.html">Home</a>

</body>

</html>