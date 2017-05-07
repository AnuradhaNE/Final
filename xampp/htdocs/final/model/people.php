<?php

require('database.php');
 /***Author :Anu*/

/* File to deal with the members dbase of this app*/
function register($email,$fname,$lname,$pword,$cell_phone_no,$bday,$gender) {
   global $db;
   $q=" INSERT INTO `to_do_members` (`email`, `first_n`, `last_n`, `pword`, `cell_phone_no`, `b_day`, `gender`) VALUES ('$email', '$fname', '$lname', '$pword', '$cell_phone_no', '$bday', '$gender')";
            
$statement = $db->prepare($q);
 $statement->execute();
 $statement->closeCursor();
 return ;
}

function getUser($email) {
   global $db;
   $q="SELECT `first_n`,`last_n`,`cell_phone_no`, `b_day`,`gender` FROM `adn24`.`to_do_members` where email='$email'";
          
$statement = $db->prepare($q);
 $statement->execute();
   $category = $statement->fetch();
//   print_r(count($statement->fetchAll()));

    $statement->closeCursor();    
   
        ;

//    echo $f_name.'<br>';
//    echo '';
    return $category;
}
function updateUser($f,$l,$cp,$bday,$gen,$email)
{

global $db;
$q="UPDATE `adn24`.`to_do_members` SET `first_n`='$f',`last_n`='$l',`cell_phone_no`='$cp',`b_day`='$bday',`gender`='$gen' WHERE `email`='$email'";
$statement = $db->prepare($q);
 $statement->execute();
 $statement->closeCursor();
 return ;

}
function updatepass($pass,$email,$oldpass)
{
global $db;
$q="UPDATE `adn24`.`to_do_members` SET `pword` = '$pass' WHERE `to_do_members`.`email` = '$email' and `pword`='$oldpass'";
$statement = $db->prepare($q);
 $statement->execute();
 $statement->closeCursor();
 return ;
}
function validate($email,$pword) {
   global $db;
   $q="SELECT `first_n`,`last_n` FROM `adn24`.`to_do_members` where email='$email' and pword='$pword'";
          
$statement = $db->prepare($q);
 $statement->execute();
   $category = $statement->fetch();
//   print_r(count($statement->fetchAll()));

    $statement->closeCursor();    
    $f_name = $category['first_n']." ". $category['last_n'];
        ;

//    echo $f_name.'<br>';
//    echo '';
    return $f_name;
}



function userExists($email) {
   global $db;
   $q="SELECT `email` FROM `adn24`.`to_do_members` where email='$email' ";
          
$statement = $db->prepare($q);
 $statement->execute();
   $category = $statement->fetch();
//   print_r(count($statement->fetchAll()));

    $statement->closeCursor();    
    $f_name = $category['email'];
  //  echo $f_name.'<br>';
//    echo ''.count($statement->fetchAll()).$f_name;
    return $f_name;
}
//register('ggj@@');
?>
