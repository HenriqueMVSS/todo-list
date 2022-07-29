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
        $items = $request->getPost('task');

        $data = [
            'item'=> $items,
            'created_at'=> $myTime
        ];
       
        // Validation insert
        if(!empty($items)){
            $mainModel->insert($data);

        }else {
            return redirect()->to(site_url('/'));

        }

        return redirect()->to(site_url('/'));

    }

    public function delete($id = null)
    {
        $db = db_connect();
        $db->table('item')->where('id_item', $id)->delete();

        return redirect()->to(site_url('/'));
    }  

    public function taskComplete($id_item = null)
    {
        $data = [
            'id_item' => $id_item
        ];

        $db = db_connect();
        $db->query("UPDATE item SET finished_at = NOW() WHERE id_item = :id_item:", $data);
        $db->close();

        return redirect()->to(site_url('/'));
    }

}
