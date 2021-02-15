<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        .content {
            display: flex;
            height: 70vh;
            justify-content: center;
            align-items: center;
        }

        form{
            padding: 10px;
            background-color: lightgrey;
            border: black solid 2px;
        }

        label{
            font-size: 20px;
            font-family: "Comic Sans MS", cursive, sans-serif;
        }
    </style>
</head>
<body>
    <div class="content">
        <form>
        <h2>Naam: <?php
            echo ($_POST['Naam']);
            ?></h2>
        <br>
        <h2>E-mail: <?php
            echo ($_POST['E-mail']);
            ?> </h2>
        </form>
    </div>
</body>
</html>
