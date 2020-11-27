<?php
namespace App\Models;
//use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class BeritasModel extends Model {
    protected $table = 'beritas';

    protected $allowedFields = ['id','judulberita','author','tglposting','foto','isiberita'];
}

?>