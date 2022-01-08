<?php

	include '../function/pin_function.php';

?>

<link rel="stylesheet" type="text/css" href="pin_style.css">


<div class="main">
<form method="POST" >





New Pin :<input type="number" name="new_pin" required><br>

Re - enter<br>New pin :<input type="number" name="rnew_pin" required><br><br>

<span style="color:red">

		<?php echo $_SESSION["pin_status"]; ?>

</span>
<center>
		<button name="confirm_pin">CONFIRM</button>
</center>
</form>
</div>