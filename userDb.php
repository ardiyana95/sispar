<?php  
  /**
  * 
  */
  require_once('database.php');

  class User 
  {
    public $Id;
    public $Name;
    public $Email;
    private $db;
    
    public function __construct(){
      $this->db = new Database();
    }

    public function Save() {
      $this->db->query("INSERT INTO users (ID, Name, Email) VALUES('$this->Id', '$this->Name', '$this->Email')");

      return true;
    }

    public function Delete($Id) {
      $this->db->query("DELETE FROM users WHERE ID = '$Id'");
    }

    public function GetAll() {
      return $this->db->query("SELECT * FROM users");
    }

    public function GetById($Id) {
      return $this->db->query("SELECT * FROM users WHERE ID = '$Id'");
    }
  }
?>