<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Casino royale - guessing game</title>
</head>
<body>
<h1>Guess the number</h1>  
<h2>Chose a number from 1 to 20 and press the submit button to see if you've done the right guess</h2>
<div class="game">
<form  method="post">

    <p>Chose a number :</p><input type="number"min="1" max="20" name='chosenNumber'></input>
    <button name="submit" class="submit">SUBMIT</button>
    <br><br>
    <button name="reset" class="reset" onclick='window.location.reload()'>RESET</button>

    <p>Result : <?php if (!empty($game->resultMessage)) { echo $game->resultMessage;} ?> </p>  
    <p>Guesses : <?php echo $game->amountGuess; ?></p>
</form>
</div>
</body>
</html>