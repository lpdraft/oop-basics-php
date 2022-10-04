<?php 
require_once 'abstClass.php';

class Destination extends Vacation{
    protected $strMessage;
    protected $destiPlace;



    function __construct(string $name, string $lastName, INT $age)
        {
            parent::__construct( $name,  $lastName,  $age);

            $destiOptions = array('Caribe','Maldives','Barcelona','Fiji','New York', 'Thailand', 'Norway','Hawai');
            $randomName = $destiOptions[rand(0,sizeof($destiOptions)-1)];

            $this -> destiPlace = $randomName;
        }


    public function setPromoMessage(string $message){
        return $this ->strMessage = $message . '<b>'. $this->destiPlace . '</b>';
        }

    // Method to GET extended info grouped
    public function getWinnerInfo()
        {
        $data = "
        <h3><i>Show Winner Info</i></h3>
        <hr>
        <b>First Name</b> {$this -> strName} <br>
        <b>Last Name</b> {$this -> strLastName} <br>
        <b>Age</b> {$this -> intAge} <br>
        <b>Destination</b> {$this -> destiPlace} <br>
        <b>Message</b> {$this -> strMessage} <br>
        ";
        return $data;
        }
     
}


?>