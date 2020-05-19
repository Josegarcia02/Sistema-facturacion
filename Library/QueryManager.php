<?php
class QueryManager {
    
    private $pdo;

    function __construct($USER,$PASS,$DB) {
        try {
            $this->pdo= new PDO('mysql:host=localhost;dbname='.$DB.';charser=utf8',
            $USER, $PASS,
            [
                PDO::ATTR_EMULATE_PREPARES=> false,
                PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION
            ]
        
        );
        } catch (PDOException $e) {
            print "¡Error!:". $e->getMessage();
        }
    }
}

?>