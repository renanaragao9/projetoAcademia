<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    protected $table = 'exercicios';
    protected $primaryKey = 'id_exercicio';
    protected $fillable = ['nome_exercicio', 'id_grupoMuscular', 'image_exercicio'];
}
