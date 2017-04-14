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

<div  onclick="window.location.href='modify.php'" style="min-height: 90px;border-bottom-right-radius: 15px;border-top-right-radius: 15px;overflow: hidden;float:left;display: inline-block;padding: 5px;background: rgba(38, 220, 203, 0.84);margin: 0;cursor: pointer;transition: all 0.2s ease;display: inline-block;/* clear: both; */margin-top: 30px;">
        <h2 style="
    width: 60%;
    min-width: 250px;
    max-width: 250px;
        opacity:0.35;

">Add a task</h2>
       
</div>
<div id="tasks" style="min-height: 450px;overflow: hidden;/* float: left; */width: 60%;min-width: 390px;border: 2px solid rgba(128, 128, 128, 0.08);max-width: 550px;margin-left: 30%;margin-top: -70px;">

    <ul>
       
        
        
        
        
        
        <li style="
    border: 1px solid rgba(255, 165, 0, 0.25);
    border-left: 11px solid #63efe1;
    margin-bottom: 21px; 
    ">
            <h2 style="cursor: pointer;" onclick="window.location.href='details.php'">Item 1</h2>
            
            <section>Due in 7 days</section>
   

        </li>
        
        
        
        
            
        <li style="
    border: 1px solid rgba(255, 165, 0, 0.25);
    border-left: 11px solid #fa7d7c;
    margin-bottom: 21px;
    ">
            <h2 style="cursor: pointer;" onclick="window.location.href='details.php'">Item 2</h2>
            
            <section>Due in 3 days</section>
   

        </li>
        
        
        
        
       
        
        
        
        
        
        
        
 <li style="
    border: 1px solid rgba(255, 165, 0, 0.25);
    border-left: 11px solid #63efe1;
    margin-bottom: 21px;
    min-height: 120px;
    ">

    
     
     
     <section style="
    color: #f3893c;
    border-bottom: 1px solid;
    position: absolute;
    /* opacity: 0; */
    margin-top: -9px;
     display: none; 
    border-left: 1px solid;
    margin-left: 186px;
    ">Are you sure? <a class="yn" href="delete">Yes</a> <a class="yn" style="
    cursor: pointer;
">No</a></section>
     
     
     
            <h2 style="cursor: pointer;/* margin-top: 50px; */margin-bottom: 0px;" onclick="window.location.href='modify.php?m=modify'">Item 1</h2>
             
            
           <section style="
    margin: 3;
    padding: 0;
    padding-left: 9px;
    font-size: medium;
    color: rgba(62, 62, 62, 0.79);
    /* font-style: italic; */
    margin-top: 0px;
    margin-bottom: 13px;
">This is item 1</section><span style="
    font-size: x-large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.13);
    border-radius: 50%;
    min-width: 22px;
    padding: 4px;
    text-align: center;
    cursor: pointer;
    height: 25px;
    line-height: 1;
    color: rgba(132, 132, 132, 0.91);
    /* position: absolute; */
    margin-top: 8px;
    ">🗑</span>
            <span onclick="location.href='modify.php?m=modify'" style="
    font-size: large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.13);
    border-radius: 50%;
    min-width: 22px;
    padding: 4px;
    text-align: center;
    cursor: pointer;
    height: 25px;
    line-height: 1.4;
    color: rgba(132, 132, 132, 0.91);
    /* position: absolute; */
    margin-top: 8px;
    margin-right: 20px;
    ">🖊</span>
        <span onclick="" style="
    font-size: x-large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.13);
    border-radius: 50%;
    min-width: 22px;
    padding: 4px;
    text-align: center;
    cursor: pointer;
    height: 22px;
    line-height: 1.1;
    color: rgba(132, 132, 132, 0.91);
    /* position: absolute; */
    margin-top: 9px;
    margin-right: 20px;
    ">🗸</span><section style="
    /* font-size: large; */
">Due in 3 days</section></li>
        
        
        
        
    </ul>    
</div>

<?php include 'view/footer.php'; ?>