<?php
require_once 'inheritedClass.php';
require_once 'abstExtendClass.php';
require_once 'implementsClass.php';

// Giving values to undefined params from obj __constructor
$objPerson = new Person('Lokesh', 'Pereiro', 25, 'Spain');
$objPerson -> setMessage('Oopa Lokesh Pereiro..');

echo $objPerson->genericInfo();
echo '<b>Role</b> '. Person::$strRole;

// Set new changes
$objPerson -> setNewPropsValue('Lokesh_2', 'Pereiro_2', 23, 'Holand');
$objPerson -> setMessage('Hola Lokesh x2');
// Display new arr info
echo '<pre>';
print_r($objPerson);
echo '</pre>';


// Did echo <pre> to differenciate from first genericInfo() method with no change..
// Check the props changes you made
echo '<pre>';
echo $objPerson->genericInfo();
echo '</pre>';


print "<br> ---  ----------------------------- <> New Person <> -----------------------------  ---  <br>";

/* New Diff Person  */
$objPerson2 = new Person('David', 'Garcia', 30, 'Portugal');
$objPerson2 -> setMessage('Opa David...!');
echo $objPerson2->genericInfo();
echo '<b>Role</b> '. Person::$strRole;

$objPerson2 -> setNewPropsValue('David_2', 'Garcia_2', 24, 'France');
$objPerson2 -> getNewPropsValue();

// Display new arr info
echo '<pre>';
print_r($objPerson2);
echo '</pre>';

// Watch the Props Changes
echo '<pre>';
$objPerson2 -> setMessage('Opa David x2...');
echo $objPerson2 -> genericInfo();
echo '</pre>';


print "<br> ---  ----------------------------- <> Inherited Class Outcome <> -----------------------------  ---  <br>";
// # Notice that, every time we instanciate one Object/Class, we create a new obj.!
$objLoginIssue = new LoginIssue('Jaimito','Jimenez', 18, 'Maldives');
$objLoginIssue -> setExtendEmail('jaimito@ja.com');
$objLoginIssue -> setExtendPass('jaimito123');

echo '<pre>';
$objLoginIssue -> setMessage('Opa Ja Jaimito...');
echo $objLoginIssue -> getExtendInfo();
echo '<b>Current Client</b> '. LoginIssue::$strRole;
echo '</pre>';


print "<br> ---  ----------------------------- <> Abstract Class Outcome <> -----------------------------  ---  <br>";
$objDestination = new Destination('Rodrigo', 'Gutiérrez', 30);
$objDestination->setPromoMessage('Felicidades, te has ganado unas vacaciones a ');

echo '<pre>';
echo $objDestination->getWinnerInfo();
echo '</pre>';




print "<br> ---  ----------------------------- <> Interface//Implements <> -----------------------------  ---  <br>";


$implObjs = new Changes();

echo '<pre>';
echo $implObjs->newWinnerInfo('Ram','Rak',12);
echo $implObjs-> rejectVacation('Dont want to go on vacation');
echo '</pre>';



 print "<br> ---  ----------------------------- <> Destroy Fuction <> -----------------------------  ---  <br>";
// A part from destruction function/method, we can manually destroy our Objects, like so:

// Now the first Obj is destroyed in first place...
unset($objPerson);

// You can also make your Obj sleep or delay before the action of destroying take place
// After 3 seconds both Objs are eliminated in same order

# sleep(seconds:3);



?>