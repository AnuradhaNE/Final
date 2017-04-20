<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php          session_start();
session_unset();
?>
<?php include 'view/header.php'; ?>
    
<div style="min-height: 90px;overflow: hidden;text-align: center">
<div style="min-height: 90px;border-radius: 15px;overflow: hidden;/* float: left; */display: inline-block;padding: 5px;background: rgba(249, 101, 101, 0.84);margin: 0;transition: all 0.2s ease;display: inline-block;/* clear: both; */">
        <h2 style="
    width: 60%;
    min-width: 250px;
    max-width: 250px;
    opacity:0.35;
">Login now</h2>
    
    <h5 id="not-valid" style="
    text-align: left;
    margin: 4px;
    margin-left: 79px;
    opacity: 0;
    transition: 0.2s ease-in-out;
    padding: 3px;
    /* margin: 5px; */
">Not Valid</h5>
       <form method="POST" style="
    background: transparent;
    margin: 0px;
    color: white;
    padding: 20px;
    clear: left;
    clear: both;
    padding-bottom: 40px;
    
" action="index.php">
            <section style="
    color: white;
    width: 200px;
    float: left;
">Email :</section>    <input name="Email" type="email" placeholder="Enter Email..."><br>

  <section style="
    width: 200px;
    float: left;
">Password :</section>     <input name="Password" type="password" placeholder="Enter a password"><br>


    
             <input value="Login" type="submit" style="cursor: pointer;min-width: 100px;margin:20px;margin-top: 21px;margin-right: 5px;"/>    
       
             <br>     <small><i>Don't have an account?</i><a href="register.php" style="margin-left: -9px;">Create account</a></small><br>

       </form>

    <h4 style="opacity:0.3;text-align: right" ><i>All fields are mandatory</i></h4>
</div>
</div>
<br>



    <?php
        // put your code here
        ;   
        
        if(isset($_POST['Email'])&&isset($_POST['Password'])){
          if($_POST['Email']!=''&&$_POST['Password']!=''){
            require ('model/people.php');
            $f= validate($_POST['Email'],$_POST['Password']);
           if ($f!=''&&preg_match("/[a-z]/i", $f))
           { 
    ?>

<?php 
//echo $f.' is name';
         $_SESSION["name"] = $f;
          $_SESSION["email"] = $_POST['Email'];
     echo '<script>window.location.href = "main.php";</script>'; 
           exit;

           }
           else {
         if(userExists($_POST['Email'])==$_POST['Email'])
         {
              ?>
<script type="text/javascript">
    document.getElementById('not-valid').innerHTML = 'Password Incorrect';;document.getElementById('not-valid').style.opacity = '0.3';
</script>
<?php 
         }
             else{
               ?>
<script type="text/javascript">
    document.getElementById('not-valid').innerHTML = 'No Account found';;document.getElementById('not-valid').style.opacity = '0.3';
</script>
<?php

           
           }
           }
          }
        }
        ?>
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