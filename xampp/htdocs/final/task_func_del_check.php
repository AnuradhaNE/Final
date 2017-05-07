<?php

require 'model/tasks.php';
require 'model/people.php';
       date_default_timezone_set('America/New_York');
session_start();
if(isset($_REQUEST['f'])&&isset($_REQUEST['email'])&&isset($_REQUEST['tasktitle'])){
    
    if($_REQUEST['f']=='d'){
        
        deleteATask($_REQUEST['email'],$_REQUEST['tasktitle']);
    }
        elseif ($_REQUEST['f']=='c') {
        changestat($_REQUEST['email'],$_REQUEST['tasktitle'], 'done');
        editdonetimeanddate(  date("Y-m-d", time()),date("H:i:s", time()), $_REQUEST['tasktitle'], $_REQUEST['email']);
    }
     elseif ($_REQUEST['f']=='u') {
        changestat($_REQUEST['email'],$_REQUEST['tasktitle'], 'ongoing');
    }
     elseif ($_REQUEST['f']=='v') {
        changestat($_REQUEST['email'],$_REQUEST['tasktitle'], 'overdue');
    }
    header('location:main.php');
}
else  if(isset($_POST['first_name'])&&isset($_POST['mobile_no'])&&isset($_SESSION['email'])){
        
        updateUser($_POST['first_name'],$_POST['last_name'],$_POST['mobile_no'],$_POST['bday'],$_POST['G'],$_SESSION['email']);
         header('location:main.php');
        //echo '<script>window.location.reload();</script>';

        }

else  if(isset($_POST['opword'])&&isset($_POST['pword'])&&isset($_SESSION['email'])){
        
        updatepass($_POST['pword'],$_SESSION['email'],$_POST['opword']);
         header('location:main.php');
        //echo '<script>window.location.reload();</script>';

        }
else {
 
    header('location:errors/error.php');
}


?>
