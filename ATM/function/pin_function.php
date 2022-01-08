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
			
					}else{
		
						//echo "connected...!!";

					}

			$_SESSION['connection']=$this->con;
		}
	
}

//cannection called.....

						$connect=new connection;

//chek on database


class card_chek extends connection
{	
		protected $result;

		public function card_cheking()
		{
			$card_number=$_POST['card_number'];
			$card_cvv=$_POST['card_cvv'];
			$card_date=$_POST['card_date'];
	
			$chek_var=mysqli_query($this->con,"select card_id from atm_card where 
				card_number='$card_number' 
				and card_cvv='$card_cvv'
				and card_date='$card_date'");

			
					$this->result=mysqli_fetch_assoc($chek_var);
					
					
					

							if($this->result['card_id']){
					
									//echo "matched";
										header("location:2pin_ask.php");
							}
							else{
								echo "not matched try again..!!";
							}
			
		}
	}

//when two new pin not match pass info var

$_SESSION["pin_status"]="";

//pin cheking class

class pin_chek extends connection
{
	protected $old_pin;
	protected $new_pin;
	protected $rnew_pin;

	protected $get_id;

	public function __construct()
	{
		$this->old_pin=$_POST['old_pin'];
		$this->new_pin=$_POST['new_pin'];
		$this->rnew_pin=$_POST['rnew_pin'];


			$_SESSION['card_id']="1";

			$this->get_id=$_SESSION['card_id'];

		

		if ($this->new_pin != $this->rnew_pin) {
			$_SESSION["pin_status"]="NEW PIN & RE_NEW PIN NOT MATCH";
		}

		//echo $this->new_pin;

	}

	public function chek_pin(){

		//echo $_SESSION['card_id'];
		$get=mysqli_query($_SESSION['connection'],"UPDATE atm_pin set pin='$this->new_pin'
						  where pin_id=1");
		if ($get) {
			header("location:3pin_done.php");
		}
		else{
			echo "not update";
		}



	}
}
 














if (isset($_POST['chek'])) {
 	
 	$cheking=new card_chek;
 	$cheking->card_cheking();
 }

if (isset($_POST['confirm_pin'])) {
	
	$new_pin=new pin_chek();
	$new_pin->chek_pin();
	
}

 ?>