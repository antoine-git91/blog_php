<?php

namespace App\Entity;

use App\Table;
use \PDO;

class User extends Table {

    protected static $table = "users";

    public function getUrl()
    {
        return "index.php?p=user&id=" . $this->id;
    }

    public function getUrlDelete()
    {
        return "index.php?p=delete_user&id=" . $this->id;
    }

/*    static function getUsers() :array
    {
        $query_users = (new User)->initialize()->query("SELECT * FROM users");
        $allUsers = $query_users->fetchAll(PDO::FETCH_OBJ);
        return $allUsers;
    }

    public function getUser($user_id)
    {
        $query_user = self::initialize()->prepare("SELECT * FROM users WHERE users.id = :user_id");
        $query_user->execute(array(
            ':user_id'=>$user_id
        ));
        $query_user->setFetchMode(PDO::FETCH_CLASS, __CLASS__);
        $oneUser = $query_user->fetch();
        return $oneUser;
    }

    public function addUser()
    {
        if($_POST['firstname'] &&
        $_POST['lastname'] &&
$_POST['email'] &&
$_POST['company'] &&
$_POST['job'] &&
$_POST['address'] &&
$_POST['city'] &&
$_POST['country'] &&
$_POST['phone'] &&
$_POST['avatar']){
            $new_user = self::initialize()->prepare("INSERT INTO users(firstname, lastname, email, company, job, address, city, country, phone, avatar) VALUES(:firstname, :lastname, :email, :company, :job, :address, :city, :country, :phone, :avatar)");
            $new_user->execute(array(
                ":firstname"=>$_POST['firstname'],
                ":lastname"=>$_POST['lastname'],
                ":email"=>$_POST['email'],
                ":company"=>$_POST['company'],
                ":job"=>$_POST['job'],
                ":address"=>$_POST['address'],
                ":city"=>$_POST['city'],
                ":country"=>$_POST['country'],
                ":phone"=>$_POST['phone'],
                ":avatar"=>$_POST['avatar']
            ));
        }

    }

    public function deleteUser($id) :void
    {
        if($_POST){
            $delete_post = self::initialize()->prepare('DELETE FROM users WHERE users.id = :id');
            $delete_post->execute(array(
                ':id'=>$id
            ));
            header('Location: http://localhost:8888/ecf_php/public/index.php');
            exit;
        }
    }*/

}