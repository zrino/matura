<?php 


class DB 
{
	private $connection;

	private function __construct()
	{
		$this->connection = mysqli_connect(DATAHOST,USER,PASSWORD,DATABASE);
	}


	public static function instance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new DB();
        }
        return $inst;
    }

    public function fetchAll($sql)
    {
    	$res = array();
    	if($sql != "")
    	{
    		$result = $this->connection->query($sql);
        	return $result->fetch_assoc();
        }
       
    	return $result;
    }
}


?>