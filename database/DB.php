<?php
class DB{
    static public function connect(){
        $db= new PDO("mysql:host=localhost;dbname=mvc","root","");
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        return $db;
    }
}

