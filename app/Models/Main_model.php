<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;
class Main_model extends Model {

    protected $table = 'item';
    protected $id = 'id_item';
    protected $allowedFields = ['item', 'created_at'];

    // Return all datas from database.
    function getAll()
    {
        $db = db_connect();
        $builder = $db->table($this->table);
        $dados = $builder->get()->getResultObject();
        return $dados;
    }

    // Completed task.
    public function taskComplete($id_item = null)
    {
        $data = [
            'id_item' => $id_item
        ];

        $db = db_connect();
        $db->query("UPDATE item SET finished_at = NOW() WHERE id_item = :id_item:", $data);
        $db->close();
    }

    // Create task.
    public function createTask()
    {
        $request = \Config\Services::request();
        $myTime = new Time('now', 'America/Sao_Paulo', 'pt_BR');
        $items = $request->getPost('task');

        $data = [
            'item'=> $items,
            'created_at'=> $myTime
        ];
       
        // Validation insert
        if(!empty($items)){
            $this->insert($data);

        }else {
            return redirect()->to(site_url('/'));

        }
    }

    // Delete task.
    public function deleteTask($id_item = null)
    {
        $db = db_connect();
        $db->table('item')->where('id_item', $id_item)->delete();
    }
    
}

