<?php 


//connection class

class connection
{
		public $con;

	protected $row;

	protected $old_2000;
	protected $old_500;
	protected $old_200;
	protected $old_100;
	protected $old_50;

		 function __construct()
		{
			 $this->con=mysqli_connect('localhost','root','','atm');

					if(!$this->con){
		
						die("canection fail".mysqli_connect_error());
			
					}else{
		
						//echo "connected...!!";

					}


		$result=mysqli_query($this->con,"SELECT * FROM atm_note WHERE n_id=1");
		$this->row=mysqli_fetch_assoc($result);

		//for transfer available note data via session

		$_SESSION["old_2000"]=$this->row['n_2000'];
		$_SESSION["old_500"]=$this->row['n_500'];
		$_SESSION["old_200"]=$this->row['n_100'];
		$_SESSION["old_100"]=$this->row['n_200'];
		$_SESSION["old_50"]=$this->row['n_50'];

		//settion not working for add / insert thts new variable 

		$this->old_2000=$this->row['n_2000'];
		$this->old_500=$this->row['n_500'];
		$this->old_200=$this->row['n_200'];
		$this->old_100=$this->row['n_100'];
		$this->old_50=$this->row['n_50'];		
		}
	
}

//cannection called.....

						$connect=new connection;

//add money 

class add_money extends connection
{
	protected $note_2000;
	protected $note_500;
	protected $note_200;
	protected $note_100;
	protected $note_50;

	

	public function get_money()
	{
		$this->note_2000=$_POST['note_2000'];
		$this->note_500=$_POST['note_500'];
		$this->note_200=$_POST['note_200'];
		$this->note_100=$_POST['note_100'];
		$this->note_50=$_POST['note_50'];

	}

	//get old note data


	public function insert_money()
	{

		//insert ->old + new <-

		$insert=mysqli_query($this->con,"UPDATE  atm_note set
			n_2000='$this->note_2000'+'$this->old_2000',
			n_500='$this->note_500'+'$this->old_500',
			n_200='$this->note_200'+'$this->old_200',
			n_100='$this->note_100'+'$this->old_100',
			n_50='$this->note_50'+'$this->old_50'
				where n_id=1");


		if ($insert) {

			header("Location:4ad_done.php");

		}else{
			echo "string";
		}
	}
}


class admin extends connection
{
	protected $username;
	protected $password;
	
	protected $data;
	public function admin_chek()
	{
		$this->username=$_POST['username'];
		$this->password=$_POST['password'];

		if($this->username != "" && $this->password != "" ){
		
				$chek=mysqli_query($this->con,"SELECT a_username , a_password FROM atm_user");	
				$this->data=mysqli_fetch_assoc($chek);
				
						if($this->data['a_username'] != $this->username 
						   && $this->data['a_password'] != $this->password)
						{
								echo "no match";
						}else{

							header("Location:3ad_add_value.php");

						}
		
		}
	}
}



if (isset($_POST['confirm_add'])) {
	$add_money= new add_money();

	$add_money->get_money();
	
	$add_money->insert_money();
}



if(isset($_POST['user_chek'])){
	$admin_var=new admin();
	$admin_var->admin_chek();	
}


?>