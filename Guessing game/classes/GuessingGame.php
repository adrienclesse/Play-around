<?php

class GuessingGame
{
    //public $maxGuesses;
    //public $secretNumber;
   // public $resultMessage;
    public $amountGuess = 0;
    

    
    public function __construct(int $maxGuesses=5)
    {
        if(!empty($_SESSION["secretNumber"])){
         $this->secretNumber = $_SESSION["secretNumber"];
        }


        if(!empty($_SESSION["amountGuess"])){
            $this->amountGuess = $_SESSION["amountGuess"];
           }
        // We ask for the max guesses when someone creates a game
        // Allowing your settings to be chosen like this, will bring a lot of flexibility
      //  $this->maxGuesses = $_POST['tries'];
    }

    public function run()
    {
    if(empty($this->secretNumber))
    {
           $this->generateNumber();
    }
        if(!empty($_POST['chosenNumber'])){
           
        if($this->secretNumber==$_POST['chosenNumber']) 
        {
            $this->playerWins();
            $this->reset();
            
        }
        else if ($this->secretNumber<$_POST['chosenNumber'])
        {
            $this->tooHigh();
            $this->amountGuess++;
            $_SESSION["amountGuess"] = $this->amountGuess;

        }
        else if ($this->secretNumber>$_POST['chosenNumber'])
        {
            $this->tooLow();
            $this->amountGuess++;
            $_SESSION["amountGuess"] = $this->amountGuess;          
        }
         
        }
        if($this->amountGuess==5) {
            $this->playerLoses();
            $this->reset();
        }

    }

        // This function functions as your game "engine"
        // It will run every time, check what needs to happen and run the according functions (or even create other classes)

        // TODO: check if a secret number has been generated yet
        // --> if not, generate one and store it in the session (so it can be kept when the user submits the form)
        // TODO: check if the player has submitted a guess
        // --> if so, check if the player won (run the related function) or not (give a hint if the number was higher/lower or run playerLoses if all guesses are used).
        // TODO as an extra: if a reset button was clicked, use the reset function to set up a new game
    
    // TODO: show a winner message (mention how many tries were needed)
    

    public function generateNumber(){
        

        $this->secretNumber= rand(1, 10);
        $_SESSION["secretNumber"] = $this->secretNumber;
    }
    public function tooHigh()
    {
    
       $this->resultMessage ="The number you've select is too high, try again";
    }

    public function tooLow()
    {
    
       $this->resultMessage ="The number you've select is too low, try again";
    }

    public function chosenNumber(){
        $this->chosenNumber= $_POST['chosenNumber'];
        }




    
    public function playerWins()
    {
    
       $this->resultMessage ="YOU WIIIIIN, " .$this->secretNumber. " was the right number";
    }



    public function playerLoses()
    {
        
        // TODO: show a lost message (mention the secret number)
        $this->resultMessage= "You've lost! The right number was ". $this->secretNumber;
    }

    public function reset()
    {
        // TODO: Generate a new secret number and overwrite the previous one
        $this->generateNumber();
        $this->amountGuess=0;
        $_SESSION['amountGuess']=0;
    }
}