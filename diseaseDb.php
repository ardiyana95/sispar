<?php  
  /**
  * 
  */
  require_once('database.php');

  class Diseases 
  {
    public $Id;
    public $Value;
    public $Disease;
    public $Description;
    private $db;
    
    public function __construct(){
      $this->db = new Database();
    }

    public function Save() {
      $this->db->query("INSERT INTO diseases (ID, Value, Disease, Description) 
                        VALUES('$this->Id', '$this->Value', '$this->Disease', '$this->Description')");

      return true;
    }

    public function Delete($Id) {
      $this->db->query("DELETE FROM diseases WHERE ID = '$Id'");
    }

    public function GetAll() {
      return $this->db->query("SELECT * FROM diseases");
    }

    public function GetById($Id) {
      return $this->db->query("SELECT * FROM diseases WHERE ID = '$Id'");
    }

    public function GetByValue($value) {
      return $this->db->query("SELECT * FROM diseases WHERE $value >= Value");
    }
  }
?>