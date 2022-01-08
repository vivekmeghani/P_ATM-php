<?php 

include '../function/wl_function.php';

 ?>


	<link rel="stylesheet" type="text/css" href="style.css">
		
	


<div class="main">
<form method="POST" >

Card Number :<input type="text" name="card_number" required ><br>
Card Cvv :<input type="text" name="card_cvv" required ><br>
Card Date :<input type="text" name="card_date" required ><br><br>
<center><span style="color:red">

		<?php echo $_SESSION["card_status"]; ?>

</span>
<br>
<button name="chek">chek</button></center>
</form>

</div>

</body>
</html>
