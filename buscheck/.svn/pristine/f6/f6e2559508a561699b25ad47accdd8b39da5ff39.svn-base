<?php 

	/**
	* 		
	*/
	class log 
	{
		private $fp;
		function __construct()
		{
			$this->fp = fopen("log.txt", "a+",true);
		}

		public function addLog($content)
		{
			fwrite($this->fp, "\n".$content);
		}
	}
 ?>