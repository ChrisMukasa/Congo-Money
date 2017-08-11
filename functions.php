<?php

	class SmartBus
	{
		public $con;
		public function __construct()
		{
			$this->Connect();
		}

		public function Connect()
		{
			$server = "192.168.1.150";
			$db     = "congomoney";
			$user   = "chrismukasa";
			$pass   = "chrisM1991";

			$this->con = mysqli_connect($server, $user, $pass) or die("Error While Conneting to a Server :(");
			mysqli_select_db($this->con, $db) or die("Error While Selecting a DB :(");
		}

		public function Save_Client($uid, $first_name, $last_name, $gender, $dob, $phone, $address)
		{
			$sql_save_client = "CALL SP_C_CLIENT('".$uid."', '".$first_name."', '".$last_name."', '".$gender."', '".$dob."', '".$phone."', '".$address."');";
			$sql_s_client = mysqli_query($this->con, $sql_save_client) or die("Saving Client Error " .mysqli_error($this->con));
			if($sql_s_client){echo "Succeeded";}
		}

		public function Update_Client($uid, $first_name, $last_name, $gender, $dob, $phone, $address)
		{
			$sql_update_client = "CALL SP_U_CLIENT('".$uid."', '".$first_name."', '".$last_name."', '".$gender."', '".$dob."', '".$phone."', '".$address."');";
			$sql_u_client = mysqli_query($this->con, $sql_update_client) or die("Updating Client Error " .mysqli_error($this->con));
			if($sql_u_client){echo "Succeeded";}
		}

		public function Delete_Client($uid)
		{
			$sql_delete_client = "CALL SP_D_CLIENT('".$uid."');";
			$sql_d_client = mysqli_query($this->con, $sql_delete_client) or die("Deleting Client Error " .mysqli_error($this->con));
			if($sql_d_client){echo "Succeeded";}
		}

		/*********************************************************************************************************/

		public function Save_Account($id_acc, $balance)
		{
			$sql_save_account = "INSERT INTO account (ID_ACC, BALANCE)
								VALUES('".$id_acc."', '".$balance."');";
			$sql_s_account = mysqli_query($this->con, $sql_save_account) or die("Saving Account Error " .mysqli_error($this->con));
			if($sql_s_account){echo "Succeeded";}
		}

		public function Update_Account($id_acc, $balance)
		{
			$sql_update_account = "UPDATE account SET BALANCE = '".$balance."' WHERE ID_ACC = '".$id_acc."';";
			$sql_u_account = mysqli_query($this->con, $sql_update_account) or die("Updating Account Error " .mysqli_error($this->con));
			if($sql_u_account){echo "Succeeded";}
		}

		public function Delete_Account($id_acc)
		{
			$sql_delete_account = "DELETE FROM account WHERE ID_ACC = '".$id_acc."';";
			$sql_d_account = mysqli_query($this->con, $sql_delete_account) or die("Deleting Account Error " .mysqli_error($this->con));
			if($sql_d_account){echo "Succeeded";}
		}
		/*********************************************************************************************************/

		public function Save_Retrait($uid_ret_cl, $id_ret_acc, $amount_ret)
		{
			$sql_save_retrait = "CALL SP_C_RETRAIT('".$uid_ret_cl."', '".$id_ret_acc."', '".$amount_ret."');";
			$sql_s_retrait = mysqli_query($this->con, $sql_save_retrait) or die("Saving Retrait Error " .mysqli_error($this->con));
			if($sql_s_retrait){echo "Succeeded";}
		}

		public function Update_Retrait($id_ret, $uid_ret_cl, $id_ret_acc, $amount_ret)
		{
			$sql_update_retrait = "CALL SP_U_RETRAIT('".$uid_ret_cl."', '".$id_ret_acc."', '".$amount_ret."');";
			$sql_u_retrait = mysqli_query($this->con, $sql_update_retrait) or die("Updating Retrait Error " .mysqli_error($this->con));
			if($sql_u_retrait){echo "Succeeded";}
		}

		public function Delete_Retrait($id_ret)
		{
			$sql_delete_retrait = "CALL SP_D_RETRAIT('".$uid_ret_cl."');";
			$sql_d_retrait = mysqli_query($this->con, $sql_delete_retrait) or die("Deleting Retrait Error " .mysqli_error($this->con));
			if($sql_d_retrait){echo "Succeeded";}
		}

		/*********************************************************************************************************/

		public function Save_Depot($uid_dep_cl, $id_dep_acc, $amount_dep)
		{
			$sql_save_depot = "CALL SP_C_DEPOT('".$uid_dep_cl."', '".$id_dep_acc."', '".$amount_dep."');";
			$sql_s_depot = mysqli_query($this->con, $sql_save_depot) or die("Saving Depot Error " .mysqli_error($this->con));
			if($sql_s_depot){echo "Succeeded";}
		}

		public function Update_Depot($id_dep, $uid_dep_cl, $id_dep_acc, $amount_dep)
		{
			$sql_update_depot = "CALL SP_U_DEPOT('".$uid_dep_cl."', '".$id_dep_acc."', '".$amount_dep."');";
			$sql_u_depot = mysqli_query($this->con, $sql_update_depot) or die("Updating Depot Error " .mysqli_error($this->con));
			if($sql_u_depot){echo "Succeeded";}
		}

		public function Delete_Depot($id_dep)
		{
			$sql_delete_depot = "CALL SP_D_DEPOT('".$uid_dep_cl."');";
			$sql_d_depot = mysqli_query($this->con, $sql_delete_depot) or die("Deleting Depot Error " .mysqli_error($this->con));
			if($sql_d_depot){echo "Succeeded";}
		}		
	}
?>