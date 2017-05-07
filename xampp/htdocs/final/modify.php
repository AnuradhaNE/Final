<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'model/tasks.php';
session_start();

$email="";

if(!isset($_SESSION["email"]))
{
 header('location:index.php');
}
else{

$email=     $_SESSION["email"] ;
}


?>
<?php include 'view/header.php'; ?>
        <?php
        // put your code here
        $msg="Add Task";
        $tomodify=0;
        $dt='';
        $url ="modify.php";
        if(isset($_REQUEST['m'])){
           
            if($_REQUEST['m']==0){  $tomodify=1;
                    $msg="Edit Task";
                   
                    
                    $c= getTaskFor($email,$_REQUEST["tasktitle"]);
                    $dued="90-12-09";
                    $duet="07:09";
//                       foreach ($c as $value) {
                           
                           $duet=$c['task-time'];
                             $dued=$c['task-date'];
                             $dt=$dued;
//                           break;
//                       }
              }
              elseif($_REQUEST['m']==5){
                   $msg="Uncheck Task";
                     $tomodify=5;
              }
                    
        }
        
        ?>
<div style="min-height: 90px;overflow: hidden;text-align: center">
<div style="min-height: 90px;border-radius: 15px;overflow: hidden;/* float: left; */display: inline-block;padding: 5px;background: #7eeae0;margin: 0;transition: all 0.2s ease;display: inline-block;/* clear: both; */">
        <h2 style="
    width: 60%;
    min-width: 250px;
    max-width: 250px;
    opacity:0.35;
"><?php echo $msg; ?></h2>
       <form method="POST"  action="<?php echo $url ?>" style="
    background: transparent;
    margin: 0px;
    color: white;
    padding: 20px;
    clear: left;
    clear: both;
    padding-bottom: 40px;
    
">
           <input name="Modify"  type="hidden"  value="<?php echo $tomodify; ?>" />  
               <input required name="tasktitle"  type="hidden"  value="<?php echo $_REQUEST['tasktitle']; ?>" />  
            <section style="
        color: white;
    width: 200px;
    float: left;
    padding-top: 20px;
">Title</section>    <input
    
    value=""
    
    id="entertasktitle"  required="true" name="Title" type="text" placeholder="Enter Task Title..."><br>

  <section style="
        color: white;
    width: 200px;
    float: left;
    padding-top: 20px;
">Description</section>    <input  required="true" id="entertaskdesc" name="Description" type="text" placeholder="Enter Description..."><br>



<section style="
       color: white;
    width: 200px;
    float: left;
    padding-top: 20px;
">Due Date</section>    <input onchange="datechange()" required="true"  id="Date" name="DD" type="date" placeholder="Enter Description..."><br>



<section style="
     color: white;
    width: 200px;
    float: left;
    padding-top: 20px;
">Due time</section>    <input id="Time"  required="true" name="Dtime" type="time" placeholder="Enter Description..."><br>
     
     <script>
function datechange()
{
var date =document.getElementById('Date');

var ds=date.value;


var parts =ds.split('-');
var t=new Date(parts[0],parts[1]-1,parts[2]);
var H=t.getHours();
var M =t.getMinutes();

if(((t.getMonth()+1)-mm)>0||(t.getDate()-dd)>0||(t.getFullYear()-yyyy)>0){document.getElementById("Time").min="";console.log('big');}
else { document.getElementById("Time").setAttribute("min", now);console.log('small ');}

console.log(date.value+'\n'+t.getDate()+'\n'+((t.getMonth()+1)-mm)+'\n'+t.getFullYear()+' \n'+now);

}

function datechanged(arg)
{
console.log('date change init');
var date =document.getElementById('Date');

var ds=arg;

{
var parts =ds.split('-');
var t=new Date(parts[0],parts[1]-1,parts[2]);
var H=t.getHours();
var M =t.getMinutes();

if(((t.getMonth()+1)-mm)>0||(t.getDate()-dd)>0||(t.getFullYear()-yyyy)>0){document.getElementById("Time").min="";console.log('big');}
else { document.getElementById("Time").setAttribute("min", now);console.log('small ');}

console.log(date.value+'\n'+t.getDate()+'\n'+((t.getMonth()+1)-mm)+'\n'+t.getFullYear()+' \n'+now);
}
}
</script>
     
     
         <script>
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
var h=today.getHours();
var m =today.getMinutes();
console.log();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 
if(h<10)h="0"+h;
if(m<0)h="0"+m;
today = yyyy+'-'+mm+'-'+dd;
now=h+":"+m;
console.log(dd+" "+mm+" "+yyyy);
document.getElementById("Date").setAttribute("min", today);
<?php if($dt!='')  echo 'if(true)';
else echo 'if(false)'; ?>
datechanged(<?php echo '"'.$dt.'"';?>);
</script>


    <input value="Done" type="submit" style="background:mediumaquamarine;cursor: pointer;min-width: 100px;margin:20px;margin-top: 21px;margin-right: 5px;"/>    
       
             <br>   <br>

       </form>
<?php 



 if(isset($_REQUEST['m'])){
            $tomodify=1;
                    $msg="Edit Task";
                    
                    if(isset($_REQUEST['tasktitle'])){
                        
                        echo '<script>document.getElementById("entertasktitle").value="'.$_REQUEST['tasktitle'].'"</script>';
                        
                    }
                    if(isset($_REQUEST['taskdesc'])){
                        
                           echo '<script>document.getElementById("entertaskdesc").value="'.$_REQUEST['taskdesc'].'"</script>';
                    }
                    if(isset($_REQUEST['taskdate'])){
                        
                           echo '<script>document.getElementById("Date").value="'.$_REQUEST['taskdate'].'"</script>';
                    }
                    else if($_REQUEST['m']==0){
                         echo '<script>document.getElementById("Date").value="'.$dued.'"</script>';
                    }
                    if(isset($_REQUEST['tasktime'])){
                           echo '<script>document.getElementById("Time").value="'.$_REQUEST['tasktime'].'"</script>';
                    }
                    else if($_REQUEST['m']==0){
                         echo '<script>document.getElementById("Time").value="'.$duet.'"</script>';
                    }
                    
        }

if(isset($_POST['Modify']))
{
    if($_POST['Modify']==1){
     
        
        editTask($email, $_POST['tasktitle'], $_POST["Title"],$_POST["Description"],  $_POST["DD"],$_POST["Dtime"],'ongoing');
     echo '<script>window.location.href = "main.php";</script>'; 
        }
        else  if($_POST['Modify']==5){
     
        
        editTask($email, $_POST['tasktitle'], $_POST["Title"],$_POST["Description"],  $_POST["DD"],$_POST["Dtime"],'ongoing');
     echo '<script>window.location.href = "main.php";</script>'; 
        }
    else{ 
        
    putaTask($_POST["Title"],$_POST["Description"], $email, $_POST["DD"],$_POST["Dtime"],'ongoing');
      
         echo '<script>window.location.href = "main.php";</script>'; 

    }
    
};

?>
    <h4 style="opacity:0.3;text-align: right" ><i id="msg">All fields are mandatory</i></h4>
</div>
</div>
<br>
<!--  <link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">-->

<!--<div style="min-height: 90px;border-bottom-right-radius: 15px;border-top-right-radius: 15px;overflow: hidden;float:left;display: inline-block;padding: 5px;background: rgba(38, 220, 203, 0.84);margin: 0;cursor: pointer;transition: all 0.2s ease;display: inline-block;/* clear: both; */margin-top: 30px;">
        <h2 style="
    width: 60%;
    min-width: 250px;
    max-width: 250px;
        opacity:0.35;

">Add a task</h2>
       
</div>

<div id="tasks" style="min-height: 450px;overflow: hidden;float: left;width: 60%;min-width: 360px;border: 2px solid rgba(128, 128, 128, 0.13);max-width: 550px;margin-left: 6%;margin-top: -70px;"></div>-->

<?php include 'view/footer.php'; ?>
