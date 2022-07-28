<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends Controller
{
    public function index()
    {
        // get all items from database

        $data['list'] = $this->getAllItems();

        // display the homepage
        return view('home', $data);
    }

    public function newItem(){
        
    }

    public function getAllItems(){
      
        $db = db_connect();
        $dados = $db->query("SELECT * FROM list")->getResultObject();
        $db->close();

        return $dados;
        
    }
}
