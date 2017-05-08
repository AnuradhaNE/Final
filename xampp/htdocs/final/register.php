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


<div style="min-height: 90px;overflow: hidden;text-align: center">
<div style="min-height: 90px;border-radius: 15px;overflow: hidden;/* float: left; */display: inline-block;padding: 5px;background: rgba(249, 101, 101, 0.84);margin: 0;transition: all 0.2s ease;display: inline-block;/* clear: both; */">
        <h2 style="
    width: 60%;
    min-width: 250px;
    max-width: 250px;
    opacity:0.35;
">Register now</h2>
    <form id="reg" action="register.php" method="POST" style="
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
    ">Email :</section>    <input required="true" name="Email" type="email" placeholder="Enter Email..."><br>
         <section style="
    width: 200px;
    float: left;
">First Name :</section>     <input required="true" name="FirstName" type="text" placeholder="Enter First Name..."><br>
         <section style="
    width: 200px;
    float: left;
">Last Name :</section>     <input autocomplete="off" required="true" name="LastName" type="text" placeholder="Enter Last Name..."><br>

  <section style="
    width: 200px;
    float: left;
">Password :</section>     <input autocomplete="off" onkeyup="key_up()" id="pwd" required="true" name="Password" type="password" placeholder="Enter a password"><br>
  <section style="
    width: 200px;
    float: left;
">Confirm Password :</section>     <input  onkeyup="key_up()" autocomplete="off" id="cpwd" required="true" name="CPassword" type="password" placeholder="Enter a password"><br>

<script>
function key_up()
{

console.log('key_up...');
var p=document.getElementById('pwd');
var cp=document.getElementById('cpwd');
var d=document.getElementById('regB');

if(p.value!=""&&cp.value!=""){

if(p.value==cp.value){
d.disabled=false;
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
         <section style="
    width: 200px;
    float: left;
    ">Mobile Number :</section>     <input minlength="10" required="true" name="CellPhone" type="tel" placeholder="Enter Mobile Number..."><br>
        <section style="
    width: 200px;
    float: left;
">Birthday :</section>      <input id="bday" required="true" name="Birthday" type="date" placeholder="Enter your Birthday..."><br>
            
            
            <script>

document.getElementById('bday').min="1930-01-01";
document.getElementById('bday').max="1999-12-31";
document.getElementById('bday').defaultValue="1993-01-01";
</script>
            
            <section style="
    width: 200px;
    float: left;
">Gender :</section><label for="g_m">Male</label>   <input required="true" id="g_m" name="G" value="m" type="radio">
             <label for="g_f">Female</label>   <input required="true" id="g_f" name="G" value="f" type="radio">
<!--             <label for="g_o">O</label>   <input required="true" id="g_o" name="G" value="o" type="radio">-->
             <br><br>
             
             
             
             
             
             
             <input id="regB" value="Register" type="submit" style="min-width: 100px;margin:20px;margin-top: 21px;margin-right: 5px;"/>    
      
    <?php
    
    if(isset($_POST["G"])&&isset($_POST["Password"])&&isset($_POST["Email"])){
        
        require 'model/people.php';
       // echo 'ready to register : '.$_POST["G"];
       if(userExists($_POST['Email'])!='') echo '<br><span style="font-size:small;padding:7px;word-wrap:break-word;opacity:0.70;">There is an already an account registered with that email.</span>';
       else{ register($_POST["Email"], $_POST["FirstName"], $_POST["LastName"],$_POST["Password"], $_POST["CellPhone"], $_POST["Birthday"], $_POST["G"]);
           echo "<script>window.location.href='index.php'</script>";} 
        
        }
        else{
            
               

        }
        
    ?>
    
    </form>
    <h4 style="opacity:0.3;text-align: right" ><i>All fields are mandatory</i></h4>
</div>
</div>
<br>
<!--  <link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">-->



<?php include 'view/footer.php'; ?>
