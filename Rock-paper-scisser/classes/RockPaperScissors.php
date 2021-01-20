<?php

class RockPaperScissors
{
    public $computerNumber;
    public $computerMove;
    public $result;
    public $scorePlayer=0;
    public $scoreComputer=0;
    public $finalMessage;

    public function __construct()
    {
        if(!empty($_SESSION["scorePlayer"])){
         $this->scorePlayer = $_SESSION["scorePlayer"];
        }


        if(!empty($_SESSION["scoreComputer"])){
            $this->scoreComputer = $_SESSION["scoreComputer"];
           }
    }



    public function run()
    {
        // This function functions as your game "engine"
        // Now it's on to you to take the steering wheel and determine how it will work
        //create a vardump with game.
        //gernerate a computer number
        //select what user has chosen
        //compare both results
        //add a result message in a if statement in the comparison
        //session with the results(first to 3 point won)
        
        if(empty($this->computerNumber))
        {
               $this->generateMove();
        }
        if(isset( $_POST['rock'])) 
        {
            if($this->computerMove =='rock') {$this->draw();}
            else if ($this->computerMove =='paper') {$this->computerWin();}
            else if ($this->computerMove =='scissors') {$this->youWin();}
        }

        if(isset( $_POST['paper'])) 
        {
            if($this->computerMove =='rock') {$this->youWin();}
            else if ($this->computerMove =='paper') {$this->draw();}
            else if ($this->computerMove =='scissors') {$this->computerWin();}
        }

        if(isset( $_POST['scissors'])) 
        {
            if($this->computerMove =='rock') {$this->computerWin();}
            else if ($this->computerMove =='paper') {$this->youWin();}
            else if ($this->computerMove =='scissors') {$this->draw();}
        }
        if($this->scorePlayer==4){$this->winWholeGame ();}
        else if ($this->scoreComputer==4){$this->loseWoleGame ();}
        
    }

    public function generateMove () {
        $this->computerNumber= rand(1,3);
        if ($this->computerNumber==1){$this->computerMove="rock";}
        else if ($this->computerNumber==2){$this->computerMove="paper";}
        else if ($this->computerNumber==3){$this->computerMove="scissors";}
    }

    public function youWin () {
        $this->result ="You've won, he computer has chosen the $this->computerMove";
        $this->scorePlayer++;
        $_SESSION["scorePlayer"] = $this->scorePlayer;
    }

    public function computerWin () {
        $this->result ="You've lost, the computer has chosen the $this->computerMove";
        $this->scoreComputer++;
        $_SESSION["scoreComputer"] = $this->scorePlayer;

    }

    public function draw () {
        $this->result ="It's a draw, the computer has also chosen the $this->computerMove ";
        $this->scoreComputer;
        $this->scorePlayer;

    }

    public function winWholeGame () {
        $this->finalMessage ="Congratulation, you've won the wole game.";
        $this->reset();
    }

    public function loseWoleGame () {
        $this->finalMessage ="Bad luck, the computer has 4 points and you've lost.";
        $this->reset();
    }


    public function reset()
    {
        $this->generateMove();
        $this->scorePlayer=0;
        $this->scoreComputer=0;
        $_SESSION['scorePlayer']=0;
        $_SESSION['scoreComputer']=0;
    }



}
