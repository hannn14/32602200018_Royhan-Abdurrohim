<?php
namespace App\Models;

use CodeIgniter\Model;

class TodoModel extends Model
{
    protected $table = 'todo';
    protected $returnType = 'array';
    protected $primaryKey = "id";
    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'nama',
        'selesai'
    ];
}