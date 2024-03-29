<?php
namespace App\Models;

use App\Models\CRUD;

class Utilisateur extends CRUD {
    protected $table = "utilisateur";
    protected $primaryKey = "id";
    protected $fillable = ['nom', 'email', 'mot_de_passe', 'nom_utilisateur', 'adresse', 'privilege_id'];

    public function hashPassword($password, $cost = 12){
        return  password_hash($password, PASSWORD_BCRYPT, ['cost' => $cost]);
    }

    public function checkUser($username, $password){
        $user = $this->unique('nom_utilisateur', $username);
        // var_dump($password);
        // var_dump($user['mot_de_passe']);
        $hash = $user['mot_de_passe'];
        if($user){
            if(password_verify((string) $password, (string) $hash)){
                session_regenerate_id();
                $_SESSION['id']= $user['id'];
                $_SESSION['nom_utilisateur']= $user['nom_utilisateur'];
                $_SESSION['privilege_id']= $user['privilege_id'];
                $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);
                return true;
            } else {
                    return false;
            }
        } else {
            return false;     
        }
    }
    
}
