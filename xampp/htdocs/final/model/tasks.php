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
 //echo 'done'.$q;
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
function recordSetToArray($mysql_result) {
 $rs = array();
 foreach($mysql_result as $row) {
        $rs[] = $row;
    
    }
 return ($rs);
}
function recordSetToJson($mysql_result) {
 $rs = array();
 $e=0;
 foreach($mysql_result as $row) {
        
       $e=$e+1;
           echo '<br>'.$e;
     $rs[] = $row;
           echo $row['task_title'];
         
    }
 return json_encode($rs);
}
function  getTasksFor($email)
{
    
    global $db;
    $query = "SELECT * FROM `adn24`.`to_do_tasks` where `email`='$email' ORDER BY `to_do_tasks`.`task-date` ASC";
    $statement = $db->query($query);
   
    $c=$statement->fetchAll();
//    $arr= recordSetToJson($statement);
//   
//    $array = json_decode( $arr, true );
//    $a= $statement->fetch();
//    foreach ($c as $value) {
//        //echo $arr;
//     echo json_encode($value).'<br>';
//       
//    }
//    echo $arr;
//    
    $statement->closeCursor();
    
    
    
    return $c;    

}


function  getTaskFor($email,$task_title)
{
    
    global $db;
    $query = "SELECT * FROM `adn24`.`to_do_tasks` where `email`='$email' and `task_title`='$task_title' ORDER BY `to_do_tasks`.`task-date` DESC, `to_do_tasks`.`task-time` DESC";
    $statement = $db->query($query);
   
    $c=$statement->fetch();
//    $arr= recordSetToJson($statement);
//   
//    $array = json_decode( $arr, true );
//    $a= $statement->fetch();
//    foreach ($c as $value) {
//        //echo $arr;
//     echo json_encode($value).'<br>';
//       
//    }
//    echo $arr;
//    
    $statement->closeCursor();
    
    
    
    return $c;    

}
function editdonetimeanddate($done_date,$done_time,$task_title,$email)
{
    global $db;
    $q ="UPDATE `to_do_tasks` SET `done_date` = '$done_date', `done_time` = '$done_time' WHERE `to_do_tasks`.`task_title` = '$task_title' AND `to_do_tasks`.`email` = '$email';
";
    $statement = $db->prepare($q);
 $statement->execute();
 $statement->closeCursor();
 //echo 'done'.$q;
 return ;
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
