<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;
    protected $table = 'fichas';
    protected $primaryKey = 'id_fichas';
    protected $fillable = ['id_users', 'id_creator', 'id_exercicio', 'id_gpexercicios', 'serie', 'repeticao', 'peso', 'descanso', 'desc', 'updated_at', 'created_at' ];
}
