<?php 
    class User {
      private $pdo;
      public string $msgErro = "";
        
      public function conect($name, $host, $user, $password) {
        try {
            $this->pdo = new PDO("mysql:dbname=".$name."; host=".$host, $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            $this->msgErro = $e->getMessage();
        }
    }

      public function register($name, $email, $password) {
        $sql = $this->pdo->prepare("SELECT ID FROM user WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $this->msgErro = "Usuário já cadastrado";
            return false;
        } else {
            $sql = $this->pdo->prepare("INSERT INTO user (name, email, password) VALUES (:n, :e, :p)");
            $sql->bindValue(":n", $name);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":p", $password);
            $sql->execute();
            return true;
        }
    }

      public function login($email, $password) {
        global $pdo;

        $sql = $pdo->prepare("SELECT ID from user WHERE email = :e AND password = :p");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":p", $password);
        $sql->execute();

        if($sql->rowCount() > 0) {
            // função "Fetch" ali retorna um objeto com a key e o valor
            $data = $sql->fetch();
            session_start();
            $_SESSION['id_user'] = $data['ID'];
            return true;
        } else {
            return false;
        }
      }
    } 
?>