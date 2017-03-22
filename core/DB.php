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
    	$result = array();
    	if($sql != "")
    	{
    		$resultsCollection = $this->connection->query($sql);
        	$count = $resultsCollection->num_rows;
        	for($i = 0 ;$i < $count; $i++)
                $result[] = $resultsCollection->fetch_assoc();

        }
       
    	return $result;
    }

    public function fetch($sql)
    {
        $result = array();
        if($sql != "")
        {
            $temp = $this->connection->query($sql ." LIMIT 1");
            $result = $temp->fetch_assoc();

        }
        return $result;
    }


}


?>