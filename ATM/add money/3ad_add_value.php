<?php 

include '../function/ad_function.php';

?>
<link rel="stylesheet" type="text/css" href="style.css">

<div class="main">
	<form method="POST" action="">

2000<input type="number" name="note_2000" ><br>
500<input type="number" name="note_500"  ><br>
200<input type="number" name="note_200"  ><br>
100<input type="number" name="note_100"  ><br>
50<input type="number" name="note_50"   ><br><br>
<center>
		<button name="confirm_add">CONFIRM</button>
</center>
</form>

<div class="noteTable">
	<table border="2" width="100%" style="text-align: center;">
<tr>

<th>
	2000
</th>
<th>
	500
</th>
<th>
	200
</th>
<th>
	100
</th>
<th>
	50
</th>
</tr>
<tr>
	<td>
		<?php echo $_SESSION["old_2000"];   ?>
	</td>
	<td>
		<?php echo $_SESSION["old_500"];   ?>
	</td>
	<td>
		<?php echo $_SESSION["old_200"];   ?>
	</td>
	<td>
		<?php echo $_SESSION["old_100"];   ?>
	</td>
	<td>
		<?php echo $_SESSION["old_50"];     ?>
	</td>
</tr>

</table>
</div>




</div>


