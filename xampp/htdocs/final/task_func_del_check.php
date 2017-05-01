<?php
require 'model/tasks.php';
       date_default_timezone_set('America/New_York');

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
else {
 
    header('location:errors/error.php');
}


?>