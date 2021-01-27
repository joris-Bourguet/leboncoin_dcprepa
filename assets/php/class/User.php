<?php
require_once "Database.php";

class User
{
    public function __construct()
    {
    }

    /**
     * @param string $pseudo
     * @param string $email
     * @param string $password
     * @param string $firstname
     */
    public function addUser(string $pseudo, string $email, string $password, string $firstname)
    {

        $dbh = new Database();
        $stmt = $dbh->getConnect();

        $sql = $stmt->prepare("INSERT INTO user (pseudo, email, password, firstname) VALUES (:pseudo, :email, :password, :firstname)");
        $sql->bindParam(':pseudo', $pseudo);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':password', $password);
        $sql->bindParam(':firstname', $firstname);

        $sql->execute();
        echo "<br> User executed";
    }
}