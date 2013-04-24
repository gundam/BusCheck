<?php 
	require 'class/database.php';
	require 'log/log.php';
	/**
	* 
	*/
	class Db extends Database
	{
		private $result;
        private $log;
		function __construct()
		{
			new Database();
           $this->log = new log();
		}

		public function query($str)
		{

            $this->log->addLog($str);
           return mysql_query($str);


		}



		public function insert($table,$data)
  		{ 

    
  			foreach ($data as $key => $value) {
      			$this->feilds .="$key,";
      			$this->values .="'$value',";
   				 }

    		$feilds=substr($this->feilds, 0,-1);
    
    			$values=substr($this->values, 0,-1);
    			 $this->log->addLog('数据库操作  '."insert into $table ($feilds) values ($values)");
   				$sql=$this->query("insert into $table ($feilds) values ($values)");


    			if ($sql) {
      			return $this->result=true;
    			}else{

      			return $this->result=true;
   		 		}


  		}		

	}




 ?>