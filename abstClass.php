<!-- PHP Code -->
<?php
abstract class Vacation{
    public $strName;
    public $strLastName;
    public $intAge;
  
    
    // Build relationship between params and declared variables
    function __construct(string $name, string $lastName, INT $age)
            {
                $this -> strName = $name;
                $this -> strLastName = $lastName;
                $this -> intAge = $age;
           
            }
    
    
    abstract public function setPromoMessage(string $message);
    
        
    abstract public function getWinnerInfo();
    


}

?>