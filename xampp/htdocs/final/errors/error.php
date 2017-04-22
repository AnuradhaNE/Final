<?php include '../view/header.php'; ?>
<div id="main">
    <h1 class="top">Error</h1>
    <p class="first_paragraph"><?php 
    
    if(isset($error))echo $error; 
    else echo 'Something went wrong.';?></p>
</div>
<?php include '../view/footer.php'; ?>