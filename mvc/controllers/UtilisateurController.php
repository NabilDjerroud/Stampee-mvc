<?php
namespace App\Controllers;

use App\Models\Utilisateur;
use App\Models\Privilege;
use App\Providers\View;
use App\Providers\Validator;

class UtilisateurController{


    public function create(){
        
            $privilege = new Privilege;
            $privileges = $privilege->select('privilege');
            return View::render('utilisateur/create', ['privileges' => $privileges]);
        
    }

    public function store($data){
        $validator = new Validator;
        $validator->field('nom', $data['nom'])->min(2)->max(50);
        $validator->field('nom_utilisateur', $data['nom_utilisateur'])->min(2)->max(50)->email()->unique('Utilisateur');
        $validator->field('mot_de_passe', $data['mot_de_passe'])->required()->min(5)->max(255);
        $validator->field('email', $data['email'])->required()->max(100)->email()->unique('Utilisateur');
        $validator->field('adresse', $data['adresse'])->min(2)->max(50);
        
        if($validator->isSuccess()){
            $user = new Utilisateur;
            
            $data['mot_de_passe'] = $user->hashPassword($data['mot_de_passe']);
            $insert = $user->insert($data);
    
            if($insert){
                return View::redirect('login');
            }else{
                return View::render('error');
            }
        }else{
            $errors = $validator->getErrors();
            $privilege = new Privilege;
            $privileges = $privilege->select('privilege');
            return View::render('utilisateur/create', ['errors'=>$errors, 'user'=>$data, 'privileges' => $privileges]);
        }
    }
    
    
    
    
}