<?php
require('database.php');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/***Author :Anu*/

/* File to deal with the tasks of this app*/
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