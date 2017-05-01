<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include 'view/header.php'; ?>
         <?php
        // put your code here
        require 'model/tasks.php';
        session_start();
        $name="User";
        $st=NULL;
        if(isset($_SESSION["name"]))
        {
            $name= $_SESSION["name"];
            $st= getTaskFor($_SESSION["email"],  $_REQUEST['tasktitle']);
//            print_r($st);
        }// put your code here
  else{
           header('location:index.php');
            } 
        ?>
<div style="min-height: 90px;border-bottom-right-radius: 15px;border-top-right-radius: 15px;overflow: hidden;/* float: left; */display: inline-block;padding: 5px;background: rgba(249, 101, 101, 0.84);margin: 0;transition: all 0.2s ease;display: inline-block;/* clear:curs both; */">
        <h2 style="
    width: 60%;
    min-width: 250px;
    max-width: 250px;
    opacity:0.35;
">Welcome  <?php echo $name; ?></h2>
       <form method="POST" style="
    background: transparent;
    margin: 0px;
    color: white;
    padding: 5px;
    clear: left;
    clear: both;
    padding-bottom: 5px;
    
"
 action="index.php?h">
           
             <input value="Logout" type="submit" style="cursor: pointer;min-width: 100px;margin:10px;margin-top: 11px;margin-right: 5px;"/>    
       
             
       </form>

</div>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  
<br>
<!--  <link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">-->

<div  onclick="window.location.href='main.php'" style="min-height: 90px;border-bottom-right-radius: 15px;border-top-right-radius: 15px;overflow: hidden;float:left;display: inline-block;padding: 5px;background: rgba(38, 220, 203, 0.84);margin: 0;cursor: pointer;transition: all 0.2s ease;display: inline-block;/* clear: both; */margin-top: 30px;">
        <h2 style="
    width: 60%;
    min-width: 250px;
    max-width: 250px;
        opacity:0.35;

">Go Back</h2>
       
</div>

<div id="tasks" style="min-height: 450px;overflow: hidden;width: 60%;min-width: 390px;border: 0px solid rgba(128, 128, 128, 0.13);max-width: 550px;margin-left: 6%;margin-top: -140px;">

    
    <h1 style="
    color: rgba(167, 136, 136, 0.45);
">Details</h1>
    <ul>
       
        
        
        
       <?php 
        if($st!=NULL)
        {
      ?>
        
      <li style="
    border: 1px solid rgba(255, 165, 0, 0.25);
   
    margin-bottom: 21px; 
    min-height: 300px;
    " id="detail-li-item">
          <?php
          if($st['status']=='ongoing'){
              echo "<script>document.getElementById('detail-li-item').style.borderLeft='11px solid #63efe1'</script>";
          }
          else if($st['status']=='overdue'){
                            echo "<script>document.getElementById('detail-li-item').style.borderLeft='11px solid #ff6c3b'</script>";

          }
          else if($st['status']=='done'){
                                          echo "<script>document.getElementById('detail-li-item').style.borderLeft='11px solid #fa7d7c'</script>";

          }
          
          ?>
          
          <section class="confirm" style="
    color: salmon;
    border-bottom: 1px solid;
    position: absolute;
    /* opacity: 0; */
    display: none;
    ">Are you sure? <a class="yn yes" style="cursor:pointer" >Yes</a> <a style="cursor:pointer" class ="yn no">No</a></section>
            <h2 class="li-task-title" style="cursor: pointer;margin-top: 50px;" ><?php echo $_REQUEST['tasktitle'] ?></h2>
            <section class="li-task-desc" style="text-transform: capitalize;"><?php echo $st['task_desc']?></section> 
            <section>Due on :<b><?php echo $st['task-date']?> &nbsp;&nbsp; <?php echo $st['task-time']?> </b></section>
           <span style="
    font-size: xx-large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.25);
    border-radius: 50%;
    min-width: 27px;
    padding: 4px;
    text-align: center;
    cursor: pointer;
    height: 30px;
    line-height: 1;
    color: rgba(132, 132, 132, 0.91);
    /* position: absolute; */
    margin-top: 50px;
    " class="del">🗑</span>
            <span class="modify-button"  style="
    font-size: x-large;
    float: right;
    margin-top: -49px;
    border: 1px solid rgba(51, 51, 51, 0.25);
    border-radius: 50%;
    min-width: 27px;
    padding: 4px;
    text-align: center;
    cursor: pointer;
    height: 30px;
    line-height: 1.4;
    color: rgba(132, 132, 132, 0.91);
    /* position: absolute; */
    margin-top: 50px;
    margin-right: 20px;
    ">🖊</span>
        </li>  
        
        
        <?php }?>
        
        
        
        <script>
      
  $(document).ready(function(){
         $(".del").click(function(){
          console.log($(this).parent().children('.confirm'));
           $(".del").parent().children('.confirm').fadeOut("fast");
         $(".del").fadeIn("fast");
          
         $(this).parent().children('.confirm').fadeIn("fast");
         $(this).fadeOut("fast");
     });
     
     
     
     
     
     
      $('.modify-button').click(function(){
          
//         
          var d=$(this).parent().children('.li-task-title').html();
             var desc=$(this).parent().children('.li-task-desc').html() ;
             console.log('modify.php?m=0&tasktitle='+d+'&taskdesc='+desc);
             window.location.href='modify.php?m=0&tasktitle='+d+'&taskdesc='+desc;
             
             

      });
     
     
       $('.yn.yes').click(function(){
          
     var d=$(this).parent().parent().children('.li-task-title').html();
  $.post("task_func_del_check.php",{ email:'<?php echo $_SESSION["email"]?>',f:'d',tasktitle: d} ,function(data) {
    window.location.href='main.php';
        //  more codes
   });


      });
      
      
      $(".yn.no").click(function(){
          
           $(this).parent().fadeOut("fast");
            $(this).parent().parent().children('.del').fadeIn("fast");
      });
     
  });
  </script>
  
        
        
        
        
        
        
        
        
    </ul>    
</div>

<?php include 'view/footer.php'; ?>
