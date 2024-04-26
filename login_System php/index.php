<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginSystem</title>
    <style>
        body {
            height: 100vh;
            min-width: 100%;
            background: rgb(232, 120, 66);
            background: linear-gradient(90deg, rgba(232, 120, 66, 1) 0%, rgba(231, 61, 48, 1) 34%, rgba(229, 81, 16, 1) 80%, rgba(255, 114, 17, 1) 100%);
        }

        .container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-background {
            background-color: rgba(232, 120, 66, 1);
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            padding: 70px 50px;

        }

        .form-background h1 {
            position: relative;
            bottom: 30px;
            border-radius: 30px;
            text-align: center;
        }

        .input-box {
            margin-bottom: px;
        }

        .input-box label {
            width: 100%;
            font-weight: 700;
            font-size: 20px;

        }

        .input-box input {
            display: flex;
            outline: none;
            border: none;
            width: 100%;
            height: 20px;
            width: 100%;
            background-color: transparent;
            border-bottom: 2px solid orange;
        }

        .submit-bitton {
            text-align: center;

        }

        .submit-bitton input {
            background: transparent;
            border: 1px solid #000;
            padding: 7px 40px;
            border-radius: 20px;
            transition: 1s;
        }

        .submit-bitton input:hover {
            background: orangered;
        }
    </style>
</head>
<div class="container">
    <form action="register.php" method="post" class="form-background">
        <h1>Register</h1>
        <div class=" input-box">
            <label for="Name">Name</label>
            <input type="text" id="Name" name="Name" required><br>
        </div>
        <div class="input-box">
            <label for="Email">Email</label>
            <input type="email" id="Email" name="Email" required><br>
        </div>
        <div class="input-box">
            <label for="Password">Password</label>
            <input type="text" id="Password" name="Password" required><br>
        </div>
        <div class="input-box">
            <label for="Number">Number</label>
            <input type="text" id="Number" name="Number" required><br>
        </div>
        <div class="submit-bitton">
            <input type="submit" name="Submit">
        </div>

    </form>
</div>

<body>
</body>

</html>