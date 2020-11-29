<?php
namespace App\Models;
//use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class HalamansModel extends Model {
    protected $table = 'halamans';

    protected $allowedFields = ['id','judulhalaman','author','isihalaman','tglposting'];
}

?>