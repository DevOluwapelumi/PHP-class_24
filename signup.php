<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
/>
    <title>Student Signup Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 400px;
            padding: 20px;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }
        input[type=text], input[type=email], input[type=password] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="container border">
    <h2 class="text-center">Student Signup Form</h2><hr>
    <form action="signupprocess.php" method="post">
        <label for="first">First Name:</label>
        <input type="text" class="form-control" id="first" name="firstname" required>

        <label for="last">Last Name:</label>
        <input type="text" class="form-control" id="last" name="lastname" required>

        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>

        <label for="age">Age:</label>
        <input type="number" class="form-control" id="age" name="age" required>

        <label for="address">Address:</label>
        <input type="address" class="form-control" id="address" name="address" required> <hr>

        <div>
            <?php
            session_start();
            if(isset($_SESSION['message'])){
                echo '<div class="text-center text-danger">'.$_SESSION['message'].'</div>';
            } 
        ?>
    </div>
        <button type="submit" name="submit">Signup</button>
    </form>
</div>

</body>
</html>
