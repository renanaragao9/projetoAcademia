<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $table = 'avaliacaos';
    protected $primaryKey = 'id_avaliacao';
    protected $fillable = ['id_user', 'objetivo', 'observacao', 'dataInicio', 'prazo', 'altura', 'peso', 'braco', 'antebraco', 'ombro', 'peitoral', 'cintura', 'abdomen', 'quadril', 'coxa', 'panturrilha', 'gordura', 'massa', 'imc', 'ic'];
}
