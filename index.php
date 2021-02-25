<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words</title>
</head>
<body>

    <h1>The form method="get" attribute</h1>

    <form action="/action_page.php" method="get" target="_blank">

        <label for="fname">Frase da controllare:</label>
        <input type="text" name="frase"><br><br>
        
        <label for="lname">Bad words:</label>
        <input type="text" name="badWords"><br><br>
        
        <input type="submit" value="Submit">

    </form>

    
</body>
</html>