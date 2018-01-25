<?php
class Database{
    public $host = DB_HOST;
    public $username = DB_USER;
    public $password = DB_PASS;
    public $db_name = DB_NAME;

    public $link;
    public $error;


    /*
    * Class Consturctor
    */

    public function __construct($host, $username, $password, $db_name){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;
        //Call Connect Function
        $this->connect();

    }

    /*
    * Connect
    */

    private function connect(){
        $this->link= new mysqli($this->host,$this->username, $this->password, $this->db_name);

        if(!$this->link){
            $this->error = "Connection Failed: ".$this->link->connect_error;
            return false;
        }
    }
}

?>