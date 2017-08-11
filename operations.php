<?php

	include_once("functions.php");	       
	     
	  
	if(($flag = $_GET['flag']) !== null)
	{
		$smart = new SmartBus();
		switch ($flag) 
		{
			case 'insert_client':

				if( ($uid       = $_GET['uid'])       !== null && ($first_name = $_GET['first_name']) !== null && 
					($last_name = $_GET['last_name']) !== null && ($gender     = $_GET['gender'])     !== null && 
					($dob       = $_GET['dob'])       !== null && ($phone      = $_GET['phone'])      !== null && 
					($address   = $_GET['address'])   !== null)
				{
					$smart->Save_Client($uid, $first_name, $last_name, $gender, $dob, $phone, $address);
				}
			 	
				break;

			case 'insert_account':
				if(($id_acc = $_GET['id_acc']) !== null && ($balance = $_GET['balance']) !== null)
				{
					$smart->Save_Account($id_acc, $balance);
				}
				
				break;

			case 'insert_retrait':
				if(($uid_ret_cl = $_GET['uid_ret_cl']) !== null && ($id_ret_acc = $_GET['uid_ret_cl']) !== null && ($amount_ret = $_GET['amount_ret']) !== null)
				{
					$smart->Save_Retrait($uid_ret_cl, $id_ret_acc, $amount_ret);
				}
				
				break;

			case 'insert_depot':
				if(($uid_dep_cl = $_GET['uid_dep_cl']) !== null && ($id_dep_acc = $_GET['uid_dep_cl']) !== null && ($amount_dep = $_GET['amount_dep']) !== null)
				{
					$smart->Save_Depot($uid_dep_cl, $id_dep_acc, $amount_dep);
				}
				
				break;
		    /*********************************************************************************************************/

			case 'update_client':
				if( ($uid       = $_GET['uid'])       !== null && ($first_name = $_GET['first_name']) !== null && 
					($last_name = $_GET['last_name']) !== null && ($gender     = $_GET['gender'])     !== null && 
					($dob       = $_GET['dob'])       !== null && ($phone      = $_GET['phone'])      !== null && 
					($address   = $_GET['address'])   !== null)
				{
					$smart->Update_Client($uid, $first_name, $last_name, $gender, $dob, $phone, $address);
				}

				break;


			case 'update_account':
				if(($id_acc = $_GET['id_acc']) !== null && ($balance = $_GET['balance']) !== null)
				{
					$smart->Update_Account($id_acc, $balance);
				}
				
				break;

			case 'update_retrait':
				if(($id_ret = $_GET['id_ret']) !== null && ($uid_ret_cl = $_GET['uid_ret_cl']) !== null && ($id_ret_acc = $_GET['uid_ret_cl']) !== null && ($amount_ret = $_GET['amount_ret']) !== null)
				{
					$smart->Update_Retrait($id_ret, $uid_ret_cl, $id_ret_acc, $amount_ret);
				}
				
				break;

			case 'update_depot':
				if(($id_dep = $_GET['id_dep']) !== null && ($uid_dep_cl = $_GET['uid_dep_cl']) !== null && ($id_dep_acc = $_GET['uid_dep_cl']) !== null && ($amount_dep = $_GET['amount_dep']) !== null)
				{
					$smart->Update_Depot($id_dep, $uid_dep_cl, $id_dep_acc, $amount_dep);
				}
				
				break;

			/*********************************************************************************************************/

			case 'delete_client':

				if(($uid = $_GET['uid']) !== null)
				{
					$smart->Delete_Client($uid);
				}
				
				break;
			case 'delete_account':

				if(($id_acc = $_GET['id_acc']) !== null)
				{
					$smart->Delete_Account($id_acc);
				}
				
				break;

			case 'delete_retrait':

				if(($id_dep = $_GET['id_dep']) !== null)
				{
					$smart->Delete_Retrait($id_dep);
				}
				
				break;
			case 'delete_depot':

				if(($uid = $_GET['uid']) !== null)
				{
					$smart->Delete_Depot($uid);
				}
				
				break;				
		}
	}			
?>