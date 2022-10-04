<?php 
require_once 'mainClass.php';

class LoginIssue extends Person{
    private $strEmail;
    private $strPass;

    // Overwrite prop
    static $strRole = 'Manager';

    /*
        - No need to call parent __construct to get its props, "we already EXTENDS those props" in this class
        - Private props can't be instanciated nor inheritated
    */

    public function setExtendEmail(string $email)
        {
        return $this -> strEmail = $email;
        }
    # We can not set two private props togather, they must go in seperate methods
    public function setExtendPass(string $pass)
        {
        return $this -> strPass = $pass;
        }


    // Method to GET extended info grouped
    public function getExtendInfo()
        {
        $data = "
        <h3><i>Show Extended Info</i></h3>
        <hr>
        <b>First Name</b> {$this -> strName} <br>
        <b>Last Name</b> {$this -> strLastName} <br>
        <b>Age</b> {$this -> intAge} <br>
        <b>Country</b> {$this -> strCountry} <br>
        <b><i>Last-Update</i></b> <i>{$this -> strLastUpdate}</i><br>
        <b>Email</b> {$this -> strEmail} <br>
        <b>Password</b> {$this -> strPass} <br>
        <b>Message</b> {$this -> strMessage} <br>
        ";
        return $data;
        }
     
}


?>