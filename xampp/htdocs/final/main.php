<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include 'view/header.php'; ?>
        <?php
        // put your code here
        ?>
<div style="min-height: 90px;border-bottom-right-radius: 15px;border-top-right-radius: 15px;overflow: hidden;/* float: left; */display: inline-block;padding: 5px;background: rgba(249, 101, 101, 0.84);margin: 0;transition: all 0.2s ease;display: inline-block;/* clear:curs both; */">
        <h2 style="
    width: 60%;
    min-width: 250px;
    max-width: 250px;
    opacity:0.35;
">Welcome User</h2>
       <form method="POST" style="
    background: transparent;
    margin: 0px;
    color: white;
    padding: 5px;
    clear: left;
    clear: both;
    padding-bottom: 5px;
    
">
           
             <input value="Logout" type="submit" style="cursor: pointer;min-width: 100px;margin:10px;margin-top: 11px;margin-right: 5px;"/>    
       
             
       </form>

</div>

<br>
<!--  <link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">-->

<div style="min-height: 90px;border-bottom-right-radius: 15px;border-top-right-radius: 15px;overflow: hidden;float:left;display: inline-block;padding: 5px;background: rgba(38, 220, 203, 0.84);margin: 0;cursor: pointer;transition: all 0.2s ease;display: inline-block;/* clear: both; */margin-top: 30px;">
        <h2 style="
    width: 60%;
    min-width: 250px;
    max-width: 250px;
        opacity:0.35;

">Add a task</h2>
       
</div>

<div id="tasks" style="min-height: 450px;overflow: hidden;float: left;width: 60%;min-width: 390px;border: 2px solid rgba(128, 128, 128, 0.13);max-width: 550px;margin-left: 6%;margin-top: -70px;">

    <ul>
       
        
        
        
        
        
        <li style="
    border: 1px solid rgba(255, 165, 0, 0.25);
    border-left: 11px solid #63efe1;
    margin-bottom: 21px; cursor: pointer;
    " >
            <h2>Item 1</h2>
            <section>Desc</section> 
            <section>Due on :<b>7:30 pm 13th april 2017</b></section>
            <span style="font-size: x-large;float: right;margin-top: -49px;border: 1px solid rgba(51, 51, 51, 0.25);border-radius: 50%;min-width: 27px;padding: 4px;text-align: center;cursor: pointer;">&#128465;</span>

        </li>
        
        
        
        
        <li style="
    border: 1px solid rgba(255, 165, 0, 0.25);
    border-left: 11px solid #63efe1;
    margin-bottom: 21px;
    cursor: pointer;
    ">
            <h2>Item 1</h2>
            <section>Desc</section> 
            <section>Due on :<b>7:30 pm 13th april 2017</b></section>
                       
<span style="font-size: x-large;float: right;margin-top: -49px;border: 1px solid rgba(51, 51, 51, 0.25);border-radius: 50%;min-width: 27px;padding: 4px;text-align: center;cursor: pointer;">&#128465;</span>
        </li>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </ul>    
</div>

<?php include 'view/footer.php'; ?>