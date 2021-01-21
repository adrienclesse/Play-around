<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styling.css">
	<title>Casino royale - rock, paper, scissors</title>
</head>
<body>
<div class="game">
<form  method="post">
<div class="buttons">
<button class="rock" name="rock"><img src="images/rock.png"></button>
<button class="paper" name="paper"><img src="images/paper.png"></button>
<button class="scissors" name="scissors"><img src="images/scissors.png"></button>
</div>
</form>
<img class="computer" src=<?php echo $game->imageSrc ?>> </img>
<p><?php echo $game->result ?> </p>
<p><b>Your score :</b><?php echo $game->scorePlayer ?> </p>
<p><b>Computer score:</b><?php echo $game->scoreComputer ?> </p>

<h3><?php echo $game->finalMessage ?> </h3>
</div>

</body>
</html>