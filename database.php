<?php  
	/**
	* 
	*/
	class Database 
	{
	    private $conn;
	    public function __construct(){
	        $this->host        = "localhost";
	        $this->username    = "root";
	        $this->password    = "";
	        $this->database    = "cigarette";

	        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database)
	            OR die("There was a problem connecting to the database.");

	        return true;
	    }

	    public function query($query) {
	        $result = mysqli_query($this->conn, $query) or die (mysqli_error($this->conn)); 
	        if (!$result) die('Invalid query: ' . mysqli_error());
	        return $result;
	    }

	    public function __destruct() {
	        mysqli_close($this->conn)
	            OR die("There was a problem disconnecting from the database.");
	    }
	}
?>