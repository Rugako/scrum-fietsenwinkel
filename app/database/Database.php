<?php

class Database
{

    private static $connection;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        try {
            self::$connection = new PDO(
                'mysql:host=' . Config::$db_host . ';port=3306;dbname=' . Config::$db_base . ';',
                Config::$db_user,
                Config::$db_pass
            );
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }


    public static function query(string $query)
    {
        if (empty($query)) {
            return array("Geen query meegegeven.");
        } else {
            try {
                $stm = self::$connection->query($query);
                return $stm;
            } catch (Exception $ex){
                return array($ex->getMessage());
            }
        }
    }


}

?>