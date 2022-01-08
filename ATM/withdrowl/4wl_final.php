<?php 
include '../function/wl_function.php';

?>


<link rel="stylesheet" type="text/css" href="style.css">

<div class="main">
	<form method="POST" >

<?php
session_start();
?><h2>Total <br>Amount  is:<center><h1><u><?php

//amount print
echo $_SESSION['amount'] ;

?></u></h1></center></h2><?php?>


<hr><hr>
<br><br>

<input type="radio"  name="account_type" value="saving" checked>
<label for="html">SAVING</label><br>
<input type="radio"  name="account_type" value="currant">
<label for="css">CURRANT</label><br>

<br><button name="confirm_type">CONFIRM</button>
</form>

</div>


