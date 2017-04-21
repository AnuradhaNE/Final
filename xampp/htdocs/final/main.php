<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include 'view/header.php'; 

?>
        <?php
        // put your code here
        require 'model/tasks.php';
        session_start();
        $name="User";
        if(isset($_SESSION["name"]))
        {
            $name= $_SESSION["name"];
//            echo $_SESSION["email"];
          $c= getTasksFor($_SESSION["email"]);
          
         
          
          $li_on='';
          $li_d='';
          
          
          $li_do_li1='<li style="
    border: 1px solid rgba(255, 165, 0, 0.36);
    border-left: 11px solid #fa7d7c;
    margin-bottom: 21px;
    min-height: 120px;
    ">

    
     
     
     <section style="
      color: rgb(243, 137, 60);
    border-bottom: 1px solid;
    /* position: absolute; */
    margin-top: -9px;
    border-left: 1px solid;
    margin-left: 187px;
    margin-right: -9px;
    display: none;
    " class="confirm">Are you sure? <a class="yn" href="delete">Yes</a> <a class="yn no" style="
    cursor: pointer;
">No</a></section>
     
     
     
            <h2 class="li-task-title" style="text-decoration: line-through;cursor: pointer;/* margin-top: 50px; */margin-bottom: 0px;" >';
          
          
          $li_do_li2='</h2>
             
            
           <section style="
    margin: 3;
    padding: 0;
    padding-left: 9px;
    font-size: medium;
    color: rgba(62, 62, 62, 0.79);
    /* font-style: italic; */
    margin-top: 0px;
    margin-bottom: 13px;
    text-decoration: line-through;
">';
          $li_do_li3='</section><span style="
    font-size: x-large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.25);
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
    " class="del">🗑</span>
         
     <span onclick="" style="
    font-size: large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.25);
    border-radius: 50%;
    min-width: 22px;
    padding: 4px;
    text-align: center;
    cursor: pointer;
    height: 22px;
    line-height: 1.3;
    color: rgb(171, 170, 169);
    /* position: absolute; */
    margin-top: 9px;
    margin-right: 20px;
    ">✖ </span>
    <section style="
  
">
   ';
                 

$li_do_li4='</section></li>';
          
          $li_on_li1=' <li style="
    border: 1px solid rgba(255, 165, 0, 0.36);
    border-left: 11px solid #63efe1;
    margin-bottom: 21px;
    min-height: 120px;
    ">

    
     
     
     <section style="
       color: rgb(243, 137, 60);
    border-bottom: 1px solid;
    /* position: absolute; */
    margin-top: -9px;
    border-left: 1px solid;
    margin-left: 187px;
    margin-right: -9px;
    display: none;
    " class="confirm">Are you sure? <a class="yn" href="delete">Yes</a> <a class="yn no" style="
    cursor: pointer;
">No</a></section>
     
     
     
            <h2 style="cursor: pointer;/* margin-top: 50px; */margin-bottom: 0px;" class="li-task-title"> 
            
';
       $li_on_li2=   '</h2>
             
            
           <section style="
    margin: 3;
    padding: 0;
    padding-left: 9px;
    font-size: medium;
    color: rgba(62, 62, 62, 0.79);
    /* font-style: italic; */
    margin-top: 0px;
    margin-bottom: 13px;
">';


$li_on_l3='</section><span style="
    font-size: x-large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.25);
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
    " class="del">🗑</span>
            <span class="modify-button" style="
    font-size: large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.25);
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
    border: 1px solid rgba(51, 51, 51, 0.25);
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
">Due in 3 days</section></li>';
       
  
    
//            
//            foreach($array as $item) {
//    echo $item['task_title'];
////    echo $item['email'];
//
//    // to know what's in $item
//    
//}
//            
//            
//            
//            
//            
////            echo $c;
        }
              
        ?>
<div style="min-height: 90px;border-bottom-right-radius: 15px;border-top-right-radius: 15px;overflow: hidden;/* float: left; */display: inline-block;padding: 5px;background: rgba(249, 101, 101, 0.84);margin: 0;transition: all 0.2s ease;display: inline-block;/* clear:curs both; */">
        <h2 style="
    width: 60%;
    min-width: 250px;
    max-width: 250px;
    opacity:0.35;
">Welcome <?php echo $name; ?></h2>
       <form method="POST" style="
    background: transparent;
    margin: 0px;
    color: white;
    padding: 5px;
    clear: left;
    clear: both;
    padding-bottom: 5px;
    
" action="index.php?h">
           
             <input  value="Logout" type="submit" style="cursor: pointer;min-width: 100px;margin:10px;margin-top: 11px;margin-right: 5px;"/>    
       
             
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
<div id="tasks" style="min-height: 450px;overflow: hidden;/* float: left; */width: 60%;min-width: 390px;max-width: 550px;margin-left: 30%;margin-top: -180px;">

    <section>
       
        
        
        
        
        
       
        <h2>Ongoing Tasks</h2>       
        <ul id="ongoing-tasks">   
            
            
            
            
            
            <?php
            
                foreach ($c as $value) {
        //echo $arr;
//     echo json_encode($value).'<br>';
     
     if($value['status']=='ongoing'){
         
         
         $str=$li_on_li1.$value['task_title'].$li_on_li2.$value['task_desc'].$li_on_l3;
        echo $str;
         
     }
    
       
    }
    
            
            
            ?>
            
            
            
            
            
<!-- <li style="
    border: 1px solid rgba(255, 165, 0, 0.36);
    border-left: 11px solid #63efe1;
    margin-bottom: 21px;
    min-height: 120px;
    ">

    
     
     
     <section style="
       color: rgb(243, 137, 60);
    border-bottom: 1px solid;
    /* position: absolute; */
    margin-top: -9px;
    border-left: 1px solid;
    margin-left: 187px;
    margin-right: -9px;
    display: none;
    " class="confirm">Are you sure? <a class="yn" href="delete">Yes</a> <a class="yn no" style="
    cursor: pointer;
">No</a></section>
     
     
     
            <h2 style="cursor: pointer;/* margin-top: 50px; */margin-bottom: 0px;" onclick="window.location.href='details.php'">Item 1</h2>
             
            
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
    border: 1px solid rgba(51, 51, 51, 0.25);
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
    " class="del">🗑</span>
            <span onclick="location.href='modify.php?m=modify'" style="
    font-size: large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.25);
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
    border: 1px solid rgba(51, 51, 51, 0.25);
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
">Due in 3 days</section></li>-->
        
        
        
        
<!--        
            
       
        
        
 <li style="
    border: 1px solid rgba(255, 165, 0, 0.36);
    border-left: 11px solid #63efe1;
    margin-bottom: 21px;
    min-height: 120px;
    ">

    
     
     
     <section style="
       color: rgb(243, 137, 60);
    border-bottom: 1px solid;
    /* position: absolute; */
    margin-top: -9px;
    border-left: 1px solid;
    margin-left: 187px;
    margin-right: -9px;
   display: none;
    " class="confirm">Are you sure? <a class="yn" href="delete">Yes</a> <a class="yn no" style="
    cursor: pointer;
">No</a></section>
     
     
     
            <h2 style="cursor: pointer;/* margin-top: 50px; */margin-bottom: 0px;" onclick="window.location.href='details.php'">Item 1</h2>
             
            
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
    border: 1px solid rgba(51, 51, 51, 0.25);
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
    " class="del">🗑</span>
            <span onclick="location.href='modify.php?m=modify'" style="
    font-size: large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.25);
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
    border: 1px solid rgba(51, 51, 51, 0.25);
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
        -->
        
        
       
        
        
        
        
        
        
<!--        
 <li style="
    border: 1px solid rgba(255, 165, 0, 0.36);
    border-left: 11px solid #63efe1;
    margin-bottom: 21px;
    min-height: 120px;
    ">

    
     
     
     <section style="
      color: rgb(243, 137, 60);
    border-bottom: 1px solid;
    /* position: absolute; */
    margin-top: -9px;
    border-left: 1px solid;
    margin-left: 187px;
    margin-right: -9px;
    display: none;
    " class="confirm">Are you sure? <a class="yn" href="delete">Yes</a> <a class="yn no" style="
    cursor: pointer;
">No</a></section>
     
     
     
            <h2 style="cursor: pointer;/* margin-top: 50px; */margin-bottom: 0px;" onclick="window.location.href='details.php'">Item 1</h2>
             
            
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
    border: 1px solid rgba(51, 51, 51, 0.25);
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
    " class="del">🗑</span>
            <span onclick="location.href='modify.php?m=modify'" style="
    font-size: large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.25);
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
    border: 1px solid rgba(51, 51, 51, 0.25);
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
">Due in 3 days</section></li>-->
        
        
        
        </ul>
        
        
        
        
        
        <h2 style="    margin-top: 49px;">Completed Tasks</h2>       
        <ul id="tasks-completed">   
<!-- <li style="
    border: 1px solid rgba(255, 165, 0, 0.36);
    border-left: 11px solid #fa7d7c;
    margin-bottom: 21px;
    min-height: 120px;
    ">

    
     
     
     <section style="
      color: rgb(243, 137, 60);
    border-bottom: 1px solid;
    /* position: absolute; */
    margin-top: -9px;
    border-left: 1px solid;
    margin-left: 187px;
    margin-right: -9px;
    display: none;
    " class="confirm">Are you sure? <a class="yn" href="delete">Yes</a> <a class="yn no" style="
    cursor: pointer;
">No</a></section>
     
     
     
            <h2 style="text-decoration: line-through;cursor: pointer;/* margin-top: 50px; */margin-bottom: 0px;" onclick="window.location.href='details.php'">Item 1</h2>
             
            
           <section style="
    margin: 3;
    padding: 0;
    padding-left: 9px;
    font-size: medium;
    color: rgba(62, 62, 62, 0.79);
    /* font-style: italic; */
    margin-top: 0px;
    margin-bottom: 13px;
    text-decoration: line-through;
">This is item 1</section><span style="
    font-size: x-large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.25);
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
    " class="del">🗑</span>
         
     <span onclick="" style="
    font-size: large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.25);
    border-radius: 50%;
    min-width: 22px;
    padding: 4px;
    text-align: center;
    cursor: pointer;
    height: 22px;
    line-height: 1.3;
    color: rgb(171, 170, 169);
    /* position: absolute; */
    margin-top: 9px;
    margin-right: 20px;
    ">✖ </span>
    
    <section style="
    /* font-size: large; */
">Done on 4th April 2017 9:00 </section></li>
        
        
        
        -->
        
            
       
<!--        
        
 <li style="
    border: 1px solid rgba(255, 165, 0, 0.36);
    border-left: 11px solid #fa7d7c;
    margin-bottom: 21px;
    min-height: 120px;
    
    ">

    
     
     
     <section style="
     color: rgb(243, 137, 60);
    border-bottom: 1px solid;
    /* position: absolute; */
    margin-top: -9px;
    border-left: 1px solid;
    margin-left: 187px;
    margin-right: -9px;
    display: none;
    " class="confirm">Are you sure? <a class="yn" href="delete">Yes</a> <a class="yn no" style="
    cursor: pointer;
">No</a></section>
     
     
     
            <h2 style="text-decoration: line-through;cursor: pointer;/* margin-top: 50px; */margin-bottom: 0px;" onclick="window.location.href='details.php'">Item 1</h2>
             
            
           <section style="
    margin: 3;
    padding: 0;
    padding-left: 9px;
    font-size: medium;
    color: rgba(62, 62, 62, 0.79);
    /* font-style: italic; */
    margin-top: 0px;
    margin-bottom: 13px;
    text-decoration: line-through;
">This is item 1</section>
            <span class="del" style="
    font-size: x-large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.25);
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
    " class="del">🗑</span>
          
     <span onclick="" style="
    font-size: large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.25);
    border-radius: 50%;
    min-width: 22px;
    padding: 4px;
    text-align: center;
    cursor: pointer;
    height: 22px;
    line-height: 1.3;
    color: rgb(171, 170, 169);
    /* position: absolute; */
    margin-top: 9px;
    margin-right: 20px;
    ">✖ </span>
    
    <section style="
    /* font-size: large; */
">Done on 4th April 2017 9:00</section></li>
        -->
        
        
       
        
        
        
        
        
        
<!--        
 <li style="
    border: 1px solid rgba(255, 165, 0, 0.36);
    border-left: 11px solid #fa7d7c;
    margin-bottom: 21px;
    min-height: 120px;
    ">

    
     
     
     <section style="
      color: rgb(243, 137, 60);
    border-bottom: 1px solid;
    /* position: absolute; */
    margin-top: -9px;
    border-left: 1px solid;
    margin-left: 187px;
    margin-right: -9px;
    display: none;
    " class="confirm">Are you sure? <a class="yn" href="delete">Yes</a> <a  class="yn no" style="
    cursor: pointer;
">No</a></section>
     
     
     
            <h2 style="text-decoration: line-through;cursor: pointer;/* margin-top: 50px; */margin-bottom: 0px;" onclick="window.location.href='details.php'">Item 1</h2>
             
            
           <section style="
    margin: 3;
    padding: 0;
    padding-left: 9px;
    font-size: medium;
    color: rgba(62, 62, 62, 0.79);
    /* font-style: italic; */
    margin-top: 0px;
    text-decoration: line-through;
    margin-bottom: 13px;
">This is item 1</section><span style="
    font-size: x-large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.25);
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
    " class="del">🗑</span>
          
       
    
    <span onclick="" style="
    font-size: large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.25);
    border-radius: 50%;
    min-width: 22px;
    padding: 4px;
    text-align: center;
    cursor: pointer;
    height: 22px;
    line-height: 1.3;
    color: rgb(171, 170, 169);
    /* position: absolute; */
    margin-top: 9px;
    margin-right: 20px;
    ">✖ </span>
    
    <section style="
    /* font-size: large; */
">Done on 4th April 2017 9:00</section></li>-->
        
          <?php
            
                foreach ($c as $value) {
        //echo $arr;
//     echo json_encode($value).'<br>';
     
     
      if ($value['status']=='done') {
      $str=$li_do_li1.$value['task_title'].$li_do_li2.$value['task_desc'].$li_do_li3.'Done on : '.$value['task-date'].'&nbsp;&nbsp;'.$value['task-time'].$li_do_li4;
        echo $str;
      }
       
    }
    
            
            
            ?>
            
        
        </ul>
        
    </section>    
</div>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script>
  $(document).ready(function(){
      
     $(".del").click(function(){
          console.log($(this).parent().children('.confirm'));
           $(".del").parent().children('.confirm').fadeOut("fast");
         $(".del").fadeIn("fast");
          
         $(this).parent().children('.confirm').fadeIn("fast");
         $(this).fadeOut("fast");
     });
      
      $(".yn.no").click(function(){
          
           $(this).parent().fadeOut("fast");
            $(this).parent().parent().children('.del').fadeIn("fast");
      });
      
      $('.modify-button').click(function(){
          
          window.location.href='modify.php?m=0&tasktitle=mod';
      });
      $('.li-task-title').click(function(){
           window.location.href='details.php?';
      });
  });
  </script>
<?php include 'view/footer.php'; ?>