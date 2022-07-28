<?php

namespace App\Controllers;

use CodeIgniter\Controller;

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

    public function create(){
        $request = \Config\Services::request();
        $mainModel = new \App\Models\Main_model();

        $sql = $mainModel->set('item', $request->getPost('task'));
       
        $mainModel->insert();

        return redirect('/');
    }

    


}
