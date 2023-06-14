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
        .test {
            color: #fefefe;
            margin:50px;
        }
        .form {
            margin: 50px;
            background-color: #fefefe;
        }

        ul{
            background-color:red;
        }

        ul li{
            display:inline-block;
            margin:10px;   
        }

        li a{
            color: white;
            text-decoration: none;
        }

        .inputs li{
            margin-bottom:20px;
            list-style-type: none;
            margin-left:20px;
        }

        .inputs h2{
            margin-left:20px;
        }

        .inputs{
            margin:20px;
            margin-bottom: 30px;
        }
        footer {
            background-color: #211b18;
            color: #fefefe;
            text-align: center;
            padding: 20px;
        }
    </style>
    <title>madlips</title>
</head>

<body>
    <h1 class="test">Mad Lips</h1>

    <div class="form">
        <div class="nav">
            <ul>
                <li><a href="madlips_paniek.php">er heerst paniek...</a></li>
                <li><a href="madlips_onkunde.php">onkunde</a></li>
            </ul>
        </div>

        <form action="madlips_onkunde_result.php" method="post">
            <div class="inputs">
                <label>Wat zou je graag willen kunnen?</label>
                <input name="Question1" placeholder="Insert your answer" required>
            </div>

            <div class="inputs">
                <label>met welke persoon kan je goed opschieten?</label>
                <input name="Question2" placeholder="Insert your answer" required>
            </div>

            <div class="inputs">
                <label>wat is je favoriete getal?</label>
                <input name="Question3" placeholder="Insert your answer" required>
            </div>

            <div class="inputs">
                <label>wat heb je altijd bij je al je op vakantie gaat? </label>
                <input name="Question4" placeholder="Insert your answer" required>
            </div>

            <div class="inputs">
                <label>wat is je beste persoonlijke eigenschap?</label>
                <input name="Question5" placeholder="Insert your answer" required>
            </div>

            <div class="inputs">
                <label>wat is je slechtste persoonlijke eigenschap</label>
                <input name="Question6" placeholder="Insert your answer" required>
            </div>

            <div class="inputs">
                <label>wat is het ergste dat je kan overkomen</label>
                <input name="Question7" placeholder="Insert your answer" required>
            </div>

            

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
