<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'model/tasks.php';
session_start();
$email=     $_SESSION["email"] ;
?>
<?php include 'view/header.php'; ?>
        <?php
        // put your code here
        $msg="Add Task";
        $tomodify=0;
        $url ="modify.php";
        if(isset($_REQUEST['m'])){
            $tomodify=1;
                    $msg="Edit Task";
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
           <input name="Modify"  type="hidden"  value="<?php echo $tomodify ?>" />  
            <section style="
        color: white;
    width: 200px;
    float: left;
    padding-top: 20px;
">Title</section>    <input name="Title" type="text" placeholder="Enter Task Title..."><br>

  <section style="
        color: white;
    width: 200px;
    float: left;
    padding-top: 20px;
">Description</section>    <input name="Description" type="text" placeholder="Enter Description..."><br>



<section style="
       color: white;
    width: 200px;
    float: left;
    padding-top: 20px;
">Due Date</section>    <input id="Date" name="DD" type="date" placeholder="Enter Description..."><br>



<section style="
     color: white;
    width: 200px;
    float: left;
    padding-top: 20px;
">Due time</section>    <input id="Time" name="Dtime" type="time" placeholder="Enter Description..."><br>
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
document.getElementById("Date").setAttribute("min", today);
document.getElementById("Time").setAttribute("min", now);

</script>

    <input value="Done" type="submit" style="background:mediumaquamarine;cursor: pointer;min-width: 100px;margin:20px;margin-top: 21px;margin-right: 5px;"/>    
       
             <br>   <br>

       </form>
<?php 
if(isset($_POST['Modify']))
{
    if($_POST['Modify']==1){}
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