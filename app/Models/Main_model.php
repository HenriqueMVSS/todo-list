<?php

namespace App\Models;

use CodeIgniter\Model;

class Main_model extends Model {

    protected $table = 'list';
    protected $id = 'id_item';
    protected $allowedFields = ['item'];

    function getAll()
    {
        $db = db_connect();
        $builder = $db->table($this->table);
        $dados = $builder->get()->getResultObject();
        return $dados;
    }
    
}

