<?php 
namespace Run\Model;

class Chat{
    
    public function getSujet(){
        $sql="SELECT id, Subject FROM sujet";
        return $sql;
    }
    public function setSujet($value){
        $sql="INSERT INTO sujet(Subject) VALUE ('".$value."')";
        return $sql;
    }
    public function getSujetMessages($value){
        $sql="SELECT
                message.message,
                message.date,
                message.time,
                USER.username,
                sujet.Subject
            FROM
                message
            JOIN USER ON message.iduser = USER.id
            JOIN sujet ON message.idSujet = sujet.id
            WHERE idSujet =".$value."
            ORDER BY message.date ,message.time ASC";
        return $sql;
    }
    public function setSujetMessages($message,$user,$sujet){
        $sql="INSERT INTO message (message, idSujet, iduser)
        VALUES(
            '".$message."',".$sujet.",
            (   SELECT
                    id
                FROM
                    USER
                WHERE
                    USER.username = '".$user."')
        )";
        return $sql;
    }
}