<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .list {
            background-color: #E6E4E4;
            width: 250px;
            height: 360px;
            padding: 15px;
            margin: auto;
        }

        .listdown {
            background-color: #fff;
            font-size: 15px;
            padding: 15px;
        }

        .list p {
            text-align: justify;
            font-size: 22px;
        }

        div {
            border-radius: 1em;
            box-shadow: 0 0 5;
            padding: 5px;
        }

        input {
            border-radius: 1em;
            border-color: #2c96e3;

        }

        #noname {
            width: 100px;
            height: 30px;
            color: black;
            margin: 10px 5px;
            text-align: center;
            font-size: 25px;
            
        }
    </style>
</head>
<form action="dz7.php" method="get" target="_blank">
    <div class="list">
        <p>What subject would you like to lern</p>
       

<body>
<div class="lixtdown">
            <input type="Radio" name="vote" value="1" checked> Html & CSS
            <hr>
            <input type="Radio" name="vote" value="2"> Java Script
            <hr>
            <input type="Radio" name="vote" value="3"> Framework
            <hr>
            <input type="Radio" name="vote" value="4"> Ruby
            <hr>
            <input type="Radio" name="vote" value="5"> PHP
            <hr>
            <input type="Radio" name="vote" value="6"> my SQL
            <hr>


        </div>
        <input type="button" value="VOTE" id="noname" href="dz7.php">
    </div>


</form>
</body>

</html>