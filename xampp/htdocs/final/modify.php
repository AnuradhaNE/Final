<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include 'view/header.php'; ?>
        <?php
        // put your code here
        $msg="Add Task";
        if(isset($_REQUEST['m'])){
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
       <form method="POST" style="
    background: transparent;
    margin: 0px;
    color: white;
    padding: 20px;
    clear: left;
    clear: both;
    padding-bottom: 40px;
    
">
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
">Due Date</section>    <input name="DD" type="date" placeholder="Enter Description..."><br>
    <section style="
     color: white;
    width: 200px;
    float: left;
    padding-top: 20px;
">Due time</section>    <input name="Dtime" type="time" placeholder="Enter Description..."><br>
         

    <input value="Done" type="submit" style="background:mediumaquamarine;cursor: pointer;min-width: 100px;margin:20px;margin-top: 21px;margin-right: 5px;"/>    
       
             <br>   <br>

       </form>

    <h4 style="opacity:0.3;text-align: right" ><i>All fields are mandatory</i></h4>
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