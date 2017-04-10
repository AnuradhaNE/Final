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
function validate($email,$pword) {
   global $db;
   $q="SELECT `first_n` FROM `adn24`.`to_do_members` where email='$email' and pword='$pword'";
          
$statement = $db->prepare($q);
 $statement->execute();
   $category = $statement->fetch();
   print_r(count($statement->fetchAll()));

    $statement->closeCursor();    
    $f_name = $category['first_n'];
    echo $f_name;
    echo 'is'.$f_name==='';
    return $f_name;
}
//register('ggj@@');
?>
