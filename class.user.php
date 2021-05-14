<?php




require_once 'd.php';


class USER
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	public function lasdID()
	{
		$stmt = $this->conn->lastInsertId();
		return $stmt;
	}
	
	public function register($name,$email)
	{
		try
		{							
			
			$stmt = $this->conn->prepare("INSERT INTO mail(name,email) VALUES(:name, :email)");
			$stmt->bindparam(":name",$name);
			$stmt->bindparam(":email",$email);
			
			$stmt->execute();	
			return $stmt;
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}
	

	function send_mail($email,$message,$subject)
	{						
		require_once('mailer/class.phpmailer.php');
		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->SMTPDebug  = 0;                     
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = "ssl";                 
		//$mail->Host = "smtpout.asia.secureserver.net";      
		
$mail->Host = "p3plcpnl0067.prod.phx3.secureserver.net";
		$mail->Port       = 465;             
		$mail->AddAddress($email);
		//$mail->Username="sender@tinchy.in";  

		$mail->Username="szyypm@zalawadmandalborivali.com";

$mail->Password="Yuvak@123!@#"; 
		//$mail->Password="loveyoudad@9820";            
		//$mail->SetFrom('sender@tinchy.in','Zalawad');
		//$mail->AddReplyTo("sender@tinchy.in","Zalawad");

		$mail->SetFrom('szyypm@zalawadmandalborivali.com','Shree Zalawad Yuvak Yuvati Parichay Milan Team - Borivali');
		$mail->AddReplyTo("szyypm@zalawadmandalborivali.com","Shree Zalawad Yuvak Yuvati Parichay Milan Team - Borivali");

		$mail->Subject    = "Thank you for your Registration";
		$mail->MsgHTML($message);
		$mail->Send();
	}	
}