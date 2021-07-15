<?php
class Conection{
    private $objectConnect;
    private static $dataAccess;

    private function connectOk(){

        try {
            $this->$objectConnect =  new PDO("localhost","root","","users",array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (Exception $e) {
                echo $e->getMessage("Error al conectarse");
            } 
                 return $conexion;
}

    public static function getInstance(){
        if(!isset(self::$dataAccess)){
            self::$dataAccess = new accessData();
        }
        return self::$dataAccess;
    }

    public static function consult($SqlConsult){
        return $this->$objectConnect->prepare($SqlConsult);

    }

}

?>