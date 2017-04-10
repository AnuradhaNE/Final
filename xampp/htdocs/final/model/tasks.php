<?php
require('database.php');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/***Author :Anu*/

/* File to deal with the tasks of this app*/

function deleteATask($email,$task_t)
{
     global $db;
    $q="DELETE FROM `adn24`.`to_do_tasks` WHERE `to_do_tasks`.`task_title` = '$task_t' AND `to_do_tasks`.`email` = '$email'";
    $statement = $db->prepare($q);
 $statement->execute();
 $statement->closeCursor();
 return ;
}

function editTask($email,$old_t,$task_t,$task_desc,$task_date,$task_time,$task_stat){
    global $db;
    $q="UPDATE `adn24`.`to_do_tasks` SET `task_title`='$task_t',`task_desc`='$task_desc',`task-date`='$task_date',`task-time`='$task_time',`status`='$task_stat' WHERE `email`='$email' AND `task_title`='$old_t'
;";
      $statement = $db->prepare($q);
 $statement->execute();
 $statement->closeCursor();
 echo 'done'.$q;
 return ;
}
function changestat($email,$task_t,$task_stat){
    //can be one of ongoing,done,deleted
    global $db;
    $q="UPDATE `adn24`.`to_do_tasks` SET `status` = '$task_stat' WHERE `to_do_tasks`.`task_title` = '$task_t' AND `to_do_tasks`.`email` = '$email'";
      $statement = $db->prepare($q);
 $statement->execute();
 $statement->closeCursor();
 return;
}

function  getTasksFor($email)
{
    
    global $db;
    $query = "SELECT * FROM `adn24`.`to_do_tasks` WHERE email='$email' ORDER BY `uploaded_on` DESC";
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    

}
function putaTask($task_title, $task_desc, $email, $task_date, $task_time, $status)
{
     global $db;
   $q=" INSERT INTO `adn24`.`to_do_tasks` (`task_title`, `task_desc`, `email`, `task-date`, `task-time`, `status`) VALUES ('$task_title', '$task_desc', '$email', '$task_date', '$task_time', '$status')
 ";
            
$statement = $db->prepare($q);
 $statement->execute();
 $statement->closeCursor();
 return ;
}


?>
