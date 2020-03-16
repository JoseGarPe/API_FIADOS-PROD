<?php
class db{
    private $dbHost ='sql3.freemysqlhosting.net';
    private $dbUser ='sql3328213';
    private $dbPass ='6G2gDqSE6N';
    private $dbName='sql3328213';
    
    public function conectDB(){
        $mysqlConnect = "mysql:host=$this->dbHost;dbname=$this->dbName";
        $dbConnection = new PDO($mysqlConnect,$this->dbUser,$this->dbPass);
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $dbConnection;
    }
 
}