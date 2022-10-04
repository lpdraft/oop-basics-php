<?php
require_once 'interfaceClass.php';

class Changes implements InterfaceClass{

    public function newWinnerInfo(string $name, string $lastName, INT $age){
        {
        $data = "
        <h3><i>Track Employee Rejection</i></h3>
        <hr>
        <b>First Name</b> {$name} <br>
        <b>Last Name</b> {$lastName} <br>
        <b>Age</b> {$age} <br>
     
        ";
        return $data;
        }
    }

     public function rejectVacation(string $message){
        return $message;
       
    }
}

?>