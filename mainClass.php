<!-- PHP Code -->
<?php require 'html_php/header.php';
class Person{
    const filePath = 'oop-basics-php/mainClass.php';

    public $strName;
    public $strLastName;
    public $intAge;
    public $strCountry;

    // Overwriting prop
    static $strRole = 'New Member';
    protected $strMessage;

    # We can only access to it from its own Class[method required] and/or from Sub-Classes, not by instantiating the Class
    protected $strLastUpdate;

    // Build relationship between params and declared variables
    function __construct(string $name, string $lastName, INT $age, string $country)
            {
                $this -> strName = $name;
                $this -> strLastName = $lastName;
                $this -> intAge = $age;
                $this -> strCountry = $country;
                $this -> strLastUpdate = Date('d-m-Y H:m:s');   
            }
    
    // Overwriting method with diff objs
    public function setMessage(string $message){
        return $this ->strMessage = $message;
    }
  
    // Method to show basics info grouped
    public function genericInfo()
        {
        $data = "
        <h3><i>Generic Information</i></h3>
        <hr>
        <b>First Name</b> {$this -> strName} <br>
        <b>Last Name</b> {$this -> strLastName} <br>
        <b>Age</b> {$this -> intAge} <br>
        <b>Country</b> {$this -> strCountry} <br>
        <b><i>Last-Update</i></b><i>{$this -> strLastUpdate}</i><br>
        <b>Message</b> {$this -> strMessage} <br>
        ";
        return $data;
        }

     
    
    // Method to SET New props. Values
    public function setNewPropsValue(string $name, string $lastName, INT $age, string $country)
        {
            $this -> strName = $name;
            $this -> strLastName = $lastName;
            $this -> intAge = $age;
            $this -> strCountry = $country;
            
        } 

    // Method to GET those New Values in Array format [ so that we don't have to return every single props changes ]
    public function getNewPropsValue ()
        {
            $arrNewData = array(
                'First Name' => $this -> strName,
                'Last Name' =>  $this -> strLastName,
                'Age' => $this -> intAge,
                'Country' =>  $this -> strCountry,
                'Last Update' => $this -> strLastUpdate,
                'Message' => $this -> strMessage,
           
            );  
            return $arrNewData;              
        }

    
    // So, this function will destroy/eliminate our two Objects from bottom to top (Person 1 & Person 2 with their related info) 
    public function __destruct()
        {
            # Destroy File Path, no output to be shown

            // unlink(self::filePath);
            echo "<b> I have just destroyed an Obj. of </b> " .$this -> strName .'<br>';
        }

}

require 'html_php/footer.php';?>