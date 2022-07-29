<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends Controller
{   

    public function index()
    {
    
        $mainModel = new \App\Models\Main_model();
  
        $data['items'] = $mainModel->getAll();

        // display the homepage
        return view('home', $data);
    }

    public function create()
    {   
  
        $mainModel = new \App\Models\Main_model();

        $mainModel->createTask();
        
        return redirect()->to(site_url('/'));

    }

    public function delete($id_item = null)
    {
        $mainModel = new \App\Models\Main_model();

        $mainModel->deleteTask($id_item);

        return redirect()->to(site_url('/'));
    }  

    public function taskComplete($id_item = null)
    {
        $mainModel = new \App\Models\Main_model();

        $mainModel->taskComplete($id_item);

        return redirect()->to(site_url('/'));
    }

}
