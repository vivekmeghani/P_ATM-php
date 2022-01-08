<link rel="stylesheet" type="text/css" href="style.css">

<div class="main">


<form method="POST" action="">

	<button name="Withdrowl">Withdrowl</button>
	<button name="AddMoney">Add Money</button>
	<button name="changePin">Change Pin</button>
	<button name="Transection">Transection</button>

</form>
</div>

<?php 

 if(isset($_POST['Withdrowl']))
 {
 	header('Location:withdrowl/2wl_card_chek.php');
	exit;
 
 }
if(isset($_POST['AddMoney']))
 {
 	header("Location:add money/2ad_user_chek.php");
	exit;
 
 }
if(isset($_POST['changePin']))
 {
 	header("Location:pin change/1card_chek.php");
	exit;
 
 }
?>