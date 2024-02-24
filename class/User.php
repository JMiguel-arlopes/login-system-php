<?php 
    class User {
      private $pdo;
      public string $msgErro;
        
      public function conect($name, $host, $user, $password) {
        global $pdo;
        try{
            $pdo = new PDO("mysql:dbname=".$name."; host=".$host, $user, $password);
        } catch(PDOException $e) {
            global $msgErro;
            $msgErro = $e->getMessage();
        }
      }

      public function register($name, $email, $password) {
        global $pdo;

        $sql = $pdo->prepare("SELECT ID FROM user WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return false;
        } else {
            $sql = $pdo->prepare("INSERT INTO user (name, email, password) VALUES (:n, :e, :p)");
            $sql->bindValue(":n", $name);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":p", $password);
            return true;
        }
      }

      public function login($email, $password) {
        global $pdo;

        $sql = $pdo->prepare("SELECT ID from user WHERE email = :e AND password = :p");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":p", $password);
        $sql->execute();

        
      }
    } 
?>