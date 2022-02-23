<?php
class Connexion{
    private static $_instance = null;

    public static function getInstance($dsn,$user,$password){
        if(!self::$_instance){
            //si on a pas encore d'objet de connexion
            try {
                self::$_instance = new PDO($dsn, $user, $password);
                print "Connecté";
            }
            catch(PDOException $e){
                print "Erreur de connexion" .$e->getMessage();
            }
        }
        return_self::$instance;
    }
}

//methode statique permet de ne pas l'instancier
//$_  -> toujours private si on voit ca