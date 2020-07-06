<?php
include ("config.php");
?>
<style>
.error{
color:red;
}
.button{
    color:blue;
}
</style>

<h1><center>registratin form</center></h1>
<form action="home.php" method="post">
<div class="error"><center>enter name  <input type="text" name="name" ></center></div>

<div class="button"> <center>click here</center></div>
</div  ><center><button type="submit" >submit</button></center></div>
</form>
<?php
$sql = "INSERT INTO student (name) VALUES ("John")";
?>

