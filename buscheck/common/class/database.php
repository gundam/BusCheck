<?php 

	/**
	* 
	*/
	class Database 
	{
		private $Db_host='localhost';
		private $Db_user='root';
		private $Db_pwd='861120';
		private $Db_db='NJGJCX';
		function __construct()
		{
			$ConDb=mysql_connect($this->Db_host,$this->Db_user,$this->Db_pwd);
			if (!$ConDb) {
				# code...
				echo 'connectFaild';
			}else{

				// echo 'connectSuccess';

				mysql_select_db($this->Db_db);
				 mysql_set_charset("utf-8");

			}
		}
	}

	

 ?>