<?php

namespace Brief\utils;

use PDO;
use PDOException;

class Helper
{
    private static  $pdo;
    private static $hostname ='127.0.0.1';
    private static $dbname = 'Brief_mvc';
    private static $usernane = 'root';
    private static $password = 'qwerty';
    public static  function getDatabaseConnexion(){
        if (self::$pdo==null){
            try {
                self::$pdo = new PDO('mysql:host='.self::$hostname.';dbname='.self::$dbname,self::$usernane,self::$password);
            }catch (PDOException $exception){
                echo 'Erreur de connexion à la base de donnee'.$exception->getMessage();
            }
        }
        return self::$pdo;
    }


}


// function getDatabaseConnexion() {
//     try {
//         $user = "root";
//         $pass = "qwerty";
//         $pdo = new PDO('mysql:host=localhost;dbname=GieNousLesFemmes',$user, $pass);
//         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         return $pdo;

//     } catch (PDOException $e) {
//         print "Erreur !: " . $e->getMessage() . "<br/>";
//         die();
//     }
// }