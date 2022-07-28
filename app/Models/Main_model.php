<?php

namespace App\Models;

use CodeIgniter\Model;

class Main_model extends Model {

    function getAll()
    {
        $db = db_connect();
        $builder = $db->table('list');
        $dados = $builder->get()->getResultObject();
        return $dados;
    }


}

