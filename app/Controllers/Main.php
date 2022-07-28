<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;

class Main extends Controller
{   

    public function index()
    {
        // Model
        $mainModel = new \App\Models\Main_model();

        // get all items from database   
        $data['items'] = $mainModel->getAll();

        // display the homepage
        return view('home', $data);
    }

    public function create()
    {
        $request = \Config\Services::request();
        $mainModel = new \App\Models\Main_model();
        $myTime = new Time('now', 'America/Sao_Paulo', 'pt_BR');

        $data = [
            'item'=> $request->getPost('task'),
            'created_at'=> $myTime
        ];

        $mainModel->insert($data);

        return redirect('/');
    }

    public function delete($id = null)
    {
        $mainModel = new \App\Models\Main_model();

        if(is_null($id)){
            return redirect('/');
        }else{
            $mainModel->delete($id);
        }
    }  

}
