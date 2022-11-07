<?php

    abstract class conection
    {
        private static $conn;

        public static function getconn(){
            if (self::$conn == null){
                self::$conn = new PDO('mysql: host=localhost; dbname=crudmvc;','root','1234');
            }
            return self::$conn;
        }
    }

?>