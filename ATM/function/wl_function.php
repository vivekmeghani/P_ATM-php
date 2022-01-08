<?php 


//connection class

class connection
{
		public $con;

		 function __construct()
		{
			 $this->con=mysqli_connect('localhost','root','','atm');

					if(!$this->con){
		
						die("canection fail".mysqli_connect_error());
							$_SESSION['con']=$this->con;
					}else{
		
						//echo "connected...!!";
					$_SESSION['con']=$this->con;
					}

		}
	
}

//cannection called.....

						$connect=new connection;


//when card data not match msg show session

$_SESSION["card_status"]=""; //dta go to 2wl_card_chek.php
$_SESSION['card_number1']="";
//chek on database

class card_chek extends connection
{	
	protected $card_date;
	protected $card_number;
	protected $card_cvv;
	protected $result; 

		function card_cheking()
		{
			$this->card_number=$_POST['card_number'];
			$this->card_cvv=$_POST['card_cvv'];
			$this->card_date=$_POST['card_date'];
	
			$chek_var=mysqli_query($this->con,"select card_id from atm_card where 
				card_number='$this->card_number' 
				and card_cvv='$this->card_cvv'
				and card_date='$this->card_date'");

			
					$this->result=mysqli_fetch_assoc($chek_var);

									session_start();
									$_SESSION["card_ids"]=$this->result['card_id'];
									$_SESSION['card_number1']=$this->card_number;
									$_SESSION['cvv1']=$this->card_cvv;
									$_SESSION['card_date1']=$this->card_date;
								

							if($this->result['card_id']){
								

										header("location:3wl_amount_ask.php");
							}
							else{
							
								$_SESSION["card_status"]="Card Not Matching...!!
														  <br> TRY AGAIN";

							}
					
			
		}
	}


/**
 pin cheking on database 


class pin_chek extends card_chek
{
	public $pin;
	public $card_ids;
	protected $result_pin;
	function __construct()
	{
		$this->pin=$_POST['pin'];
		$this->card_ids=$this->result['card_id'];
	
	}
	public function pin_cheking()
	{
		$ok=mysqli_query($_SESSION['con'],"SELECT pin FROM atm_pin where 
			pin_id=$_SESSION['card_id'];");

		$this->result_pin=mysqli_fetch_assoc($ok);

		if ($this->result_pin['pin']) {
			echo "okl";
		}
	}
}

 */
class withdrowl_amount_chek extends card_chek
{
	protected $note_2000;
	protected $note_500;
	protected $note_200;
	protected $note_100;
	protected $note_50;

	protected $note_total;

	protected $note_total_2000;
	protected $note_total_500;
	protected $note_total_200;
	protected $note_total_100;
	protected $note_total_50;


	public $main_total_amount;


	public function withdrowl_amount_const()
	{
		//get note value in variable
		$this->note_2000=$_POST['note_2000'];
		$this->note_500= $_POST['note_500'];
		$this->note_200= $_POST['note_200'];
		$this->note_100= $_POST['note_100'];
		$this->note_50=  $_POST['note_50'];	

		//total note number
		$this->note_total=
		$this->note_2000+
		$this->note_500+
		$this->note_200+
		$this->note_100+
		$this->note_50;

		//note one by one count
		$this->note_total_2000=$this->note_2000 * 2000;
		$this->note_total_500=$this->note_500 * 500;
		$this->note_total_200=$this->note_200 * 200;
		$this->note_total_100=$this->note_100 * 100;
		$this->note_total_50=$this->note_50 * 50;

		//total main amount
		$this->main_total_amount=	
		$this->note_total_2000+
		$this->note_total_500+
		$this->note_total_200+
		$this->note_total_100+
		$this->note_total_50;	

								//session for pass main amount
 		session_start();
		$_SESSION["amount"]=$this->main_total_amount;

		$insert=mysqli_query($_SESSION['con'],"INSERT INTO atm_transection VALUES
							(null,'$this->main_total_amount')");

				if ($insert) {
					//echo "inserted";
				}
				else {
					echo "no inserted";
				}

	}

	public function pass()
	{
		header("location:4wl_final.php?");
	}
}


//function calling from hear 

								//------------------//

if (isset($_POST['chek'])) {
 	
 	$cheking=new card_chek;
 	$cheking->card_cheking();
 }
/*
if (isset($_POST['confirm_pin'])) {
	$pincheking=new pin_chek;
	$pincheking->pin_cheking();
}
*/
if (isset($_POST['confirm_amount'])) {
	
 	 $withdrowl_amount_chek_var; 
	 $withdrowl_amount_chek_var=new withdrowl_amount_chek;
	 $withdrowl_amount_chek_var->withdrowl_amount_const();
	 $withdrowl_amount_chek_var->pass();
			
	
}
if (isset($_POST['confirm_type'])) {
	
		header("location:5wl_done.php");
	
	

}




?>