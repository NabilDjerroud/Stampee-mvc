<?php

namespace App\Controllers;

use App\Models\Enchere;
use App\Models\Timbre;
use App\Providers\View;
use App\Providers\Validator;
use App\Providers\Auth;


class EnchereController
{
    public function __construct(){
        Auth::session();
    }
    public function index()
    {
        if (Auth::session()) {
            $enchere = new Enchere;
            $select = $enchere->select();
            if ($select) {
                return View::render('enchere/index', ['encheres' => $select]);
            } else {
                return View::render('error');
            }
        }
    }

    public function show($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {
            $enchere = new Enchere;
            $selectId = $enchere->selectId($data['id']);
            if ($selectId) {
                return View::render('enchere/show', ['enchere' => $selectId]);
            } else {
                return View::render('error');
            }
        } else {
            return View::render('error', ['message' => 'Could not find this data']);
        }
    }

    public function create()
    {
        return View::render('enchere/create');
    }

    public function store($data)
{
    $validator = new Validator;
    $validator->field('coup_de_coeur', $data['coup_de_coeur'])->required()->min(2)->max(25);
    $validator->field('date_mise', $data['date_mise'])->required()->max(45);
    $validator->field('mise_encours', $data['mise_encours'])->required()->max(10);
    $validator->field('timbre_id', $data['timbre_id'])->required()->max(20);

    if ($validator->isSuccess()) {
        $timbre = new Timbre;
        $timbreExists = $timbre->selectId($data['timbre_id']);
        if (!$timbreExists) {
            $errors['timbre_id'] = "n tem esse timbre.";
            return View::render('enchere/create', ['errors' => $errors, 'enchere' => $data]);
        }

        $enchere = new Enchere;
        $insert = $enchere->insert($data);
        if ($insert) {
            return View::redirect('enchere');
        } else {
            return View::render('error');
        }
    } else {
        $errors = $validator->getErrors();
        return View::render('enchere/create', ['errors' => $errors, 'enchere' => $data]);
    }
}

    public function edit($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {
            $enchere = new Enchere;
            $selectId = $enchere->selectId($data['id']);
            if ($selectId) {
                return View::render('enchere/edit', ['enchere' => $selectId]);
            } else {
                return View::render('error');
            }
        } else {
            return View::render('error', ['message' => 'Could not find this data']);
        }
    }
    
    public function update($data, $get)
    {
        $validator = new Validator;
        $validator->field('coup_de_coeur', $data['coup_de_coeur'])->required()->min(2)->max(25);
        $validator->field('date_mise', $data['date_mise'])->required()->max(45);
        $validator->field('mise_encours', $data['mise_encours'])->required()->max(10);

        if ($validator->isSuccess()) {
            $enchere = new Enchere;
            $update = $enchere->update($data, $get['id']);

            if ($update) {
                return View::redirect('enchere/show?id=' . $get['id']);
            } else {
                return View::render('error');
            }
        } else {
            $errors = $validator->getErrors();
            return View::render('enchere/edit', ['errors' => $errors, 'enchere' => $data]);
        }
    }

    public function delete($data)
    {
        $enchere = new  Enchere;
        $delete = $enchere->delete($data['id']);
        if ($delete) {
            return View::redirect('enchere');
        } else {
            return View::render('error');
        }
    }
}