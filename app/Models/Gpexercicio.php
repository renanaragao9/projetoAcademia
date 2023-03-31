<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gpexercicio extends Model
{
    use HasFactory;
    protected $table = 'gpexercicios';
    protected $primaryKey = 'id_gpexercicios';
    protected $fillable = ['nome_gpexercicios'];
}
