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
                <li><a href="#">er heerst paniek...</a></li>
                <li><a href="#">onkunde</a></li>
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
    $question8 = $_POST['Question8'];


    echo "<h2 class='text'>er heerst paniek<br></h2>";
    echo "<p class='text'>Er heerst paniek in het koninkrijk $question3. Koning $question6 is ten einde raad en als koning $question6 ten einde raad is, dan roept hij zijn ten-einde-raadsheer $question2.<br><br>'$question2! Het is een ramp! Het is een schande!'<br><br>'Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?'<br><br>'Mijn $question1 is verdwenen! Zo maar, zonder waarschuwing. En ik had net $question5 voor hem gekocht!'<br><br>'Majesteit, uw $question1 komt vast vanzelf weer terug?'<br><br>'Ja da's leuk en aardig maar hoe moet ik in de tussentijd $question8 leren?'<br><br>'Maar Sire, daar kunt u toch uw $question7 gebruiken.'<br><br>'$question2, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had Sire.</p>'";
}
?>
 
    </div>
    <footer>
        <p>&copy; 2023 Akash Ramlal.</p>
    </footer>
</body>
</html>