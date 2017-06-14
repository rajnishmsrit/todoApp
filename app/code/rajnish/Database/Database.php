<?php

//namespace Database;

	class Database{
		private $host;
    private $database;
		private $username;
		private $password;

		public function __construct($database, $username, $password){
      $this->database=$database;
      $this->username=$username;
      $this->password=$password;
      $dsn = 'mysql:dbname='.$this->database.';host=127.0.0.1';
      try{
        $dbh = new PDO($dsn, $username, $password);
      }
      catch(PDOException $e)
      {
        echo 'Connection failed: ' . $e->getMessage();
      }
      return $dbh;
		}

    public function connect(){

    }
	}

?>
