<?php
require 'model/tasks.php';
if(isset($_REQUEST['f'])&&isset($_REQUEST['email'])&&isset($_REQUEST['tasktitle'])){
    
    if($_REQUEST['f']=='d'){
        
        deleteATask($_REQUEST['email'],$_REQUEST['tasktitle']);
    }
        elseif ($_REQUEST['f']=='c') {
        changestat($_REQUEST['email'],$_REQUEST['tasktitle'], 'done');
    }
     elseif ($_REQUEST['f']=='u') {
        changestat($_REQUEST['email'],$_REQUEST['tasktitle'], 'ongoing');
    }
    header('location:main.php');
}
else {
 
    header('location:errors/error.php');
}


?>