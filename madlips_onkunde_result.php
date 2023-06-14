<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #211b18;
        }
        .title {
            color: #fefefe;
            margin: 50px;
        }
        .form {
            margin: 50px;
            background-color: #fefefe;
        }

        ul {
            background-color: red;
        }

        ul li {
            display: inline-block;
            margin: 10px;   
        }

        li a {
            color: white;
            text-decoration: none;
        }

        .inputs li {
            margin-bottom: 20px;
            list-style-type: none;
            margin-left: 20px;
        }

        .inputs h2 {
            margin-left: 20px;
        }

        .inputs {
            margin: 20px;
            margin-bottom: 30px;
        }
        footer {
            background-color: #211b18;
            color: #fefefe;
            text-align: center;
            padding: 20px;
        }

        .test{
            padding:10%;
        }

        .text {
            max-width: 1000px;
            margin: 0 auto;
        }
    </style>
    <title>madlips - Result</title>
</head>
<body>
    <h1 class="title">Result</h1>

    <div class="form">
        <div class="nav">
            <ul>
                <li><a href="madlips_paniek.php">er heerst paniek...</a></li>
                <li><a href="madlips_onkunde.php">onkunde</a></li>
            </ul>
        </div>

        <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $question1 = $_POST['Question1'];
    $question2 = $_POST['Question2'];
    $question3 = $_POST['Question3'];
    $question4 = $_POST['Question4'];
    $question5 = $_POST['Question5'];
    $question6 = $_POST['Question6'];
    $question7 = $_POST['Question7'];
    

    echo "<h2 class='text'>onkunde<br></h2>";
    echo "<p class='text'>Er zijn veel mensen die niet kunnen $question1. Neem nou $question2. Zelfs met de hulp van een $question3 of zelfs $question4 kan $question2 niet $question1. Dat heeft niet te maken met een gebrek aan $question5, maar met een te veel aan $question6. Te veel $question6 leidt tot $question7 en dat is niet goed als je wilt $question1. Helaas voor $question2.</p>";
}
?>

 
    </div>
    <footer>
        <p>&copy; 2023 Akash Ramlal.</p>
    </footer>
</body>
</html>