<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_type extends Model
{
    use HasFactory;

    protected $connection = 'pgsql'; // Definindo a conexão PostgreSQL
    protected $table = 'funcao'; // Nome da tabela no PostgreSQL
    protected $fillable = ['funcao'];

}
