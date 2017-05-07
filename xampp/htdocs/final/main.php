<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include 'view/header.php'; 
?>
<?php
 
   
       date_default_timezone_set('America/New_York');
   $todays_date=date("Y-m-d G:i:s", time());;
 //  print date("Y-m-d H:i:s", time());;
//G:i:s <br>
  
   ?>
        <?php
        // put your code here
        require 'model/tasks.php';
         require 'model/people.php'; 
        session_start();
        $name="User";
        if(isset($_SESSION["name"]))
        {
            $name= $_SESSION["name"];
//            echo $_SESSION["email"];
          $c= getTasksFor($_SESSION["email"]);
          $p=getUser($_SESSION["email"]);
         
       //   print_r($p);
          $li_on='';
          $li_d='';
          
          
          $li_do_li1='<li style="
    border: 1px solid rgba(255, 165, 0, 0.36);
    border-left: 11px solid #fa7d7c;
    margin-bottom: 21px;
    min-height: 120px;
    overflow:hidden;
        margin-top: 37px;
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
    " class="confirm">Are you sure? <a class="yn yes" style="cursor:pointer">Yes</a> <a class="yn no" style="
    cursor: pointer;
">No</a></section>
     
     
     
            <h2 class="li-task-title" style="text-decoration: line-through;cursor: pointer;/* margin-top: 50px; */margin-bottom: 0px;" >';
          
          
          $li_do_li2='</h2>
             
            
           <section class="li-task-desc" style="
    margin: 3;
    padding: 0;
   
    padding-left: 9px;
    font-size: medium;
    color: rgba(62, 62, 62, 0.79);
    /* font-style: italic; */
    margin-top: 0px;
    margin-bottom: 13px;
    text-decoration: line-through;text-transform: capitalize;
     display:none;
">';
          $li_do_li3='</section>
    <section style="
  margin-bottom:0;
"><span style="padding:3px;text-align:left;margin-left:0">';
                 
$li_do_li4='</span></section><span style="
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
    " class="del">	&#x1f5d1;</span>
         
     <span class="uncheck" onclick="" style="
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
    ">&#x2716;</span></li>';
          
          $li_on_li_1=' <li style="
    border: 1px solid rgba(255, 165, 0, 0.36);
    border-left: 11px solid #63efe1;
    margin-bottom: 21px;
    min-height: 120px;
    overflow:hidden;
        margin-top: 37px;
    ">
    ';
                $li_ov_li_1=' <li style="
    border: 1px solid rgba(255, 165, 0, 0.36);
    border-left: 11px solid #ff6c3b;
    margin-bottom: 21px;
    min-height: 120px;
    overflow:hidden;
        margin-top: 37px;
    ">
    ';
     
      $li_on_li1='
     <section style="
       color: rgb(243, 137, 60);
    border-bottom: 1px solid;
    /* position: absolute; */
    margin-top: -9px;
    border-left: 1px solid;
    margin-left: 187px;
    margin-right: -9px;
    display: none;
    " class="confirm">Are you sure? <a style="cursor:pointer" class="yn yes" >Yes</a> <a class="yn no" style="
    cursor: pointer;
">No</a></section>
     
     
     
            <h2 style="cursor: pointer;/* margin-top: 50px; */margin-bottom: 0px;" class="li-task-title">';
       $li_on_li2=   '</h2>
             
            
           <section class="li-task-desc"  style="
    margin: 3;
    padding: 0;
    padding-left: 9px;
    font-size: medium;
    color: rgba(62, 62, 62, 0.79);
    /* font-style: italic; */
    margin-top: 0px;
    margin-bottom: 13px;text-transform: capitalize;
     display:none;
">';
$li_on_l3='</section><section style="
       margin-bottom: 0;
"><span style="padding:3px;margin-left:0" >';
$li_on_l4=' <span> </section><span style="
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
    " class="del">	&#x1f5d1;</span>
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
    ">	&#x1f58a;</span>
        <span class="check" onclick="" style="
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
    ">	&#x1f5f8;</span></li>';
       
  
    
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
         else{
           header('location:index.php');
            }        
        ?>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  
  <script>
  function setOv(title)
  {
          $.post("task_func_del_check.php",{ email:'<?php echo $_SESSION["email"]?>',f:'v',tasktitle: title} ,function(data) {
   // window.location.reload();
        //  more codes
   });
  }
//   function details(title)
//  {
//          $.post("task_func_del_check.php",{ email:'<?php echo $_SESSION["email"]?>',f:'v',tasktitle: title} ,function(data) {
//   // window.location.reload();
//        //  more codes
//   });
//  }
  </script>

<div style="min-height: 90px;border-bottom-right-radius: 15px;border-top-right-radius: 15px;overflow: hidden;/* float: left; */display: inline-block;padding: 5px;background: rgba(249, 101, 101, 0.84);margin: 0;transition: all 0.2s ease;display: inline-block;/* clear:curs both; */">
        <h2 style="
    width: 60%;
    min-width: 250px;
    max-width: 250px;
    opacity:0.35;
    cursor:pointer;
" onclick="$('#editprof').fadeToggle('slow');$('#edit_tasks').fadeToggle('slow');">Welcome <?php  echo $p['first_n']." ". $p['last_n']; ?></h2>
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
       
        
        <div style="min-height:19px;overflow:hidden;display:none;padding:8px;border:1px solid gainsboro" id="editprof">
        
        
<h5 style="opacity:0.4"><i>Click on your name to close this window</i></h5>
        <h2>Edit your profile</h2>
<form action="task_func_del_check.php" method="POST" id="editp">
        
        <span>First Name</span>   <input type="text" value="" name="first_name" id="first_name"> <br>
          <span>Last Name</span>   <input type="text" value="" name="last_name" id="last_name"> <br>
              <span>Mobile No.</span>   <input type="tel" minlength="10" value="" name="mobile_no" id="mobile_no"><br>  
                <span>Birth Date</span>   <input type="date" value="" name="bday" id="Bday"><br>    
                
           <span>Gender</span>       <label for="g_m">Male</label>   <input  id="g_m" name="G" value="m" type="radio">
             <label for="g_f">Female</label>   <input  id="g_f" name="G" value="f" type="radio">

             <br><br>
                
                
    <center style="margin-left:-74px">  <input type="submit" value="Edit"></center>
        
        </form>
        
        <?php 
        
       
            
        ?>
        
<?php 
echo '<script>document.getElementById("first_name").value="'.$p["first_n"].'";</script>';
echo '<script>document.getElementById("last_name").value="'.$p["last_n"].'";</script>';
echo '<script>document.getElementById("mobile_no").value="'.$p["cell_phone_no"].'";</script>';
echo '<script>document.getElementById("Bday").value="'.$p["b_day"].'";</script>';
if($p["gender"]=='f')echo '<script>document.getElementById("g_f").checked=true;</script>';
else echo '<script>document.getElementById("g_m").checked=true;</script>';
?>
    <h4 style="margin-top:19px"><big>Change Password</big></h4>

<form action="task_func_del_check.php" method="POST">
         <span>Old Password</span>   <input required="true" id="opwd" autocomplete="off" type="password" value="" name="opword"><br>
        <span>Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>   <input required="true" id="pwd" onkeyup="key_up()" autocomplete="off" type="password" value="" name="pword"><br>
          <span>Confirm &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>   <input  required="true" id="cpwd" onkeyup="key_up()" autocomplete="off" type="password" value="" name="cpword"><br>
               
    <center style="margin-left:-74px">  <input type="submit" value="Edit Password"></center>
        <script>
function key_up()
{

console.log('key_up...');
var p=document.getElementById('pwd');
var cp=document.getElementById('cpwd');

if(p.value!=""&&cp.value!=""){

if(p.value==cp.value){

//$('#regB').removeClass('dis');
console.log('c==p');
p.setCustomValidity('');


}
else{

//$('#regB').addClass('dis');
   p.setCustomValidity("Passwords Don't Match");
}

}
else{//
//d.disabled=true;
//$('#regB').addClass('dis');
}

}

</script>
        </form>
        
        
        
        
        
        
        
        
        
        
        
        
        
        </div>
        
        
           <div style="min-height:19px;overflow:hidden;" id="edit_tasks">
        
       
        <h2>Ongoing Tasks</h2>       
        <ul id="ongoing-tasks">   
            
            
            
            
            
            <?php
            
                foreach ($c as $value) {
        //echo $arr;
//     echo json_encode($value).'<br>';
     
     if($value['status']=='ongoing'){
         
         
         
         $diff=date_diff(date_create($todays_date),date_create($value['task-date'].' '.$value['task-time']));
             $due='';
           if($diff->format("%R")=='-')
           {
               echo '<script>setOv("'.$value['task_title'].'");</script>';
           }
               else{  if($diff->y>0)
             {
                $due= ($diff->y.' years '.$diff->m.' months '.$diff->d.' days '.$diff->h.' hours '.$diff->i.' min '.$diff->s. ' secs ');
             }
             else              if($diff->m>0)
             {
                $due= ($diff->m.' months '.$diff->d.' days '.$diff->h.' hours '.$diff->i.' min '.$diff->s. ' secs ');
             }
              else              if($diff->d>0)
             {
                $due= ($diff->d.' days '.$diff->h.' hours '.$diff->i.' min '.$diff->s. ' secs ');
             }
               else              if($diff->h>0)
             {
                $due= ($diff->h.' hours '.$diff->i.' min '.$diff->s. ' secs ');
             }
              else              if($diff->i>0)
             {
                $due= ($diff->i.' min '.$diff->s. ' secs ');
             }
                else              if($diff->s>0)
             {
                $due= ($diff->s. ' secs ');
             }
           }
         $str=$li_on_li_1.$li_on_li1.$value['task_title'].$li_on_li2.$value['task_desc'].$li_on_l3.'Due in '. $due.$li_on_l4;
      if($due!='')  echo $str;
//      print_r($diff);
         
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
    " class="del">??</span>
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
    ">??</span>
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
    ">??</span><section style="
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
    " class="del">??</span>
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
    ">??</span>
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
    ">??</span><section style="
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
    " class="del">??</span>
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
    ">??</span>
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
    ">??</span><section style="
    /* font-size: large; */
">Due in 3 days</section></li>-->
        
        
        
        </ul>
        
        
         <h2 style="    margin-top: 49px;">Overdue Tasks</h2>       
        <ul id="tasks-overdue">   
            
            
            
            
                  <?php
            
                foreach ($c as $value) {
        //echo $arr;
//     echo json_encode($value).'<br>';
     
     if($value['status']=='ongoing'or $value['status']=='overdue'){
         
         
         
         $diff=date_diff(date_create($todays_date),date_create($value['task-date'].' '.$value['task-time']));
             $due='';
           if($diff->format("%R")=='-'){  if($diff->y>0)
             {
                $due= ($diff->y.' years '.$diff->m.' months '.$diff->d.' days '.$diff->h.' hours '.$diff->i.' min '.$diff->s. ' secs ');
             }
             else              if($diff->m>0)
             {
                $due= ($diff->m.' months '.$diff->d.' days '.$diff->h.' hours '.$diff->i.' min '.$diff->s. ' secs ');
             }
              else              if($diff->d>0)
             {
                $due= ($diff->d.' days '.$diff->h.' hours '.$diff->i.' min '.$diff->s. ' secs ');
             }
               else              if($diff->h>0)
             {
                $due= ($diff->h.' hours '.$diff->i.' min '.$diff->s. ' secs ');
             }
              else              if($diff->i>0)
             {
                $due= ($diff->i.' min '.$diff->s. ' secs ');
             }
                else              if($diff->s>0)
             {
                $due= ($diff->s. ' secs ');
             }
           }
         $str=$li_ov_li_1.$li_on_li1.$value['task_title'].$li_on_li2.$value['task_desc'].$li_on_l3.'Overdue by '. $due.$li_on_l4;
      if($due!='')  echo $str;
//      print_r($diff);
         
     }
    
       
    }
    
            
            
            ?>
            
            
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
    " class="del">??</span>
         
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
    ">? </span>
    
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
    " class="del">??</span>
          
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
    ">? </span>
    
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
    " class="del">??</span>
          
       
    
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
    ">? </span>
    
    <section style="
    /* font-size: large; */
">Done on 4th April 2017 9:00</section></li>-->
        
          <?php
            
                foreach ($c as $value) {
        //echo $arr;
//     echo json_encode($value).'<br>';
     
     
      if ($value['status']=='done') {
      $str=$li_do_li1.$value['task_title'].$li_do_li2.$value['task_desc'].$li_do_li3.'Done on : '.$value['done_date'].'&nbsp;&nbsp;'.$value['done_time'].$li_do_li4;
        echo $str;
      }
       
    }
    
            
            
            ?>
            
        
        </ul>
       </div> 
    </section>    
</div>


<script>
      
  $(document).ready(function(){
      
     $(".del").click(function(){
          console.log($(this).parent().children('.confirm'));
           $(".del").parent().children('.confirm').fadeOut("fast");
         $(".del").fadeIn("fast");
          
         $(this).parent().children('.confirm').fadeIn("fast");
         $(this).fadeOut("fast");
     });
      $('.check').click(function(){
          var d=$(this).parent().children('.li-task-title').html();
          console.log(d);
//          console.log(d==='Set Alarm');
           $.post("task_func_del_check.php",{ email:'<?php echo $_SESSION["email"]?>',f:'c',tasktitle: d} ,function(data) {
    window.location.reload();
        //  more codes
   });
//    
      });
      
      $('.yn.yes').click(function(){
          
     var d=$(this).parent().parent().children('.li-task-title').html();
  $.post("task_func_del_check.php",{ email:'<?php echo $_SESSION["email"]?>',f:'d',tasktitle: d} ,function(data) {
    window.location.reload();
        //  more codes
   });
      });
      
      
      $(".yn.no").click(function(){
          
           $(this).parent().fadeOut("fast");
            $(this).parent().parent().children('.del').fadeIn("fast");
      });
      
      $('.modify-button').click(function(){
          
//         
          var d=$(this).parent().children('.li-task-title').html();
             var desc=$(this).parent().children('.li-task-desc').html() ;
             console.log('modify.php?m=0&tasktitle='+d+'&taskdesc='+desc);
             window.location.href='modify.php?m=0&tasktitle='+d+'&taskdesc='+desc;
             
             
      });
      $('.uncheck').click(function(){
          
//         
          var d=$(this).parent().children('.li-task-title').html();
             var desc=$(this).parent().children('.li-task-desc').html() ;
             console.log('modify.php?m=0&tasktitle='+d+'&taskdesc='+desc);
             window.location.href='modify.php?m=5&tasktitle='+d+'&taskdesc='+desc;
             
             
      });
      $('.li-task-title').click(function(){
         
           var t=$(this).html();
           window.location.href='details.php?tasktitle='+t;
//            $.get("details.php",{ email:'',f:'v',tasktitle: t} ,function(data) {
//               //  window.location.href='details.php?';
// // window.location.reload();
//        //  more codes
//   });
      });
  });
  </script>
<?php include 'view/footer.php'; ?>
