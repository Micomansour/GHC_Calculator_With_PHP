<?php

/**
 * 
 * starting is refered as first integer
 * Ending is refered as second integer
 * 
 * */ 

class Opration{
    var $data;
    var $starting = 0;
    var $ending = 0;
    var $answer;

    function __construct($starting,$ending){
        //Innitializing data members
        $this->starting = $starting;
        $this->ending = $ending;
        $this->data = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    }

    //Getters
    public function getStarting(){
        return $this->starting;
    }
    public function getEnding(){
        return $this->ending;
    }
    public function getData(){
        return $this->data;        
    }
    public function getAnswer(){
        return $this->answer;        
    }

    //Setters
    public function setStarting($starting){
        $this->starting = $starting;
    }
    public function setEnding($ending){
        $this->ending = $ending;
    }
    public function setData($data){
        $this->data = $data;   
    }

    public function findElement($element){
        for($i = 0 ;  $i < count($this->data); $i++ ){
            if($this->data[$i] == $element){
                return true;
            }
        }
        return false;
    }

    public function getIndex($element){
        for($i = 0 ;  $i < count($this->data); $i++ ){
            if($this->data[$i] == $element){
                return $i;
            }
        }
        return -1;
    }
 
    public function sum(){
        // Getting the index of the first integer(starting)
        $startingIndex =  $this->getIndex($this->starting);
        // Getting the index of the first integer(ending)
        $endIndex =  $this->getIndex($this->ending);
        // sum initialization
        $sum = 0;
        for($i = 0 ;  $i < count($this->data); $i++ ){
            /**
             * 
             * If ending value is in the bound of aur array else it will sum from the first element to the end
             * 
             * */ 
            if($this->ending <= 100){
                 /**
                  * it will sum from  the first integer which is refered as 
                  * starting value to the second integer(ending) if it counted 
                  * in the bound of this array(data) 
                  */ 
                if($i >= $startingIndex && $i <= $endIndex){
                     // this  statement will be suming from last sum value
                    $sum += $this->data[$i];
                }
            }
            else{  
                // it will sum from  the first integer which is refered as starting value
                if($i >= $startingIndex){
                     // this  statement will be summing from last sum value
                    $sum += $this->data[$i];             
                }
            }           
        }
        return $sum;        
    }

    //Operation
    public function calculate(){

        /**
        * The two integers passed to the function should be positive; if not, the function should return -1.
        */  
        if($this->starting < 0)
            return $this->answer = -1;
        if($this->ending < 0)
            return $this->answer = -1;
        
        /**
        * Validate that the first integer is lower than the second integer. If not, the function should return 0.
        */  

        if($this->starting > $this->ending)
            return $this->answer = 0;

        /**
        * 
        * If the first integer is in the array, and the second is above 100, for example 90 and 120,
        * then the function should return the sum of those integers that are within the array and in
        * between the range given. In this case, that would be 190.
        *
        */ 

        // Finding 
        $startingValueExist = $this->findElement($this->starting);
        $endingValueExist = $this->findElement($this->ending);


        /**
         * 
         * If both integers are not found in the array, for example 110 and 120, the function should return 0.
         * 
         * */ 

        if(!$startingValueExist && !$endingValueExist){           
            return $this->answer = 0;
        }

        /**
         * 
         * Now we will summ the element in the array
         * 
         * */ 
        return $this->answer = $this->sum();
    }
}


function calculation($firstInteger , $secondInteger){
    // making an istance of optaion
    $operation = new Opration($firstInteger,$secondInteger);
    // running calicilation
    $operation->calculate();
    // getting the answer
    $getAnswer = $operation->getAnswer();
    // retuning the answer
    return $getAnswer;
}