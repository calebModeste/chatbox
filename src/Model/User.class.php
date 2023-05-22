<?php 
namespace Run\Model;


 class User{

    public function createUser($nom,$prenom,$username,$password){
        $sql="INSERT INTO user(
            nom,
            prenom,
            username,
            password
        )
        VALUES(
            '".md5($nom) ."',
            '".md5($prenom)."',
            '".$username."',
            '".md5($password)."'
        )";
        return $sql;
    }
    public function getAllUser(){
        $sql="SELECT  username, password FROM user";
        return $sql;
    }

}