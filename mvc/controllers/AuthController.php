<?php
namespace App\Controllers;

use App\Models\Utilisateur;
use App\Providers\View;
use App\Providers\Validator;


class AuthController {

    public function index(){
        return View::render('auth/index');
    }
    public function store($data){
        $validator = new Validator;
        $validator->field('nom_utilisateur', $data['nom_utilisateur'])->min(2)->max(50)->email();
        $validator->field('mot_de_passe', $data['mot_de_passe'])->min(6)->max(255);
        
        // var_dump($data['nom_utilisateur']);
        // var_dump($data['mot_de_passe']);

        if($validator->isSuccess()){
            $user = new Utilisateur;

            $checkuser = $user->checkUser($data['nom_utilisateur'], $data['mot_de_passe']);
            // var_dump($checkuser);
            if($checkuser){
                return View::redirect('');
            }else{
                $errors['message'] = "Please check your credentials";
                return View::render('auth/index', ['errors' => $errors, 'utilisateur'=>$data]);
            }
        }else{
            $errors = $validator->getErrors();
            return View::render('auth/index', ['errors' => $errors, 'utilisateur'=>$data]);
        }
    }
    
    
    public function delete(){
        session_destroy();
        return View::redirect('login');
    }
}