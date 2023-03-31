<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $table = 'alunos';
    protected $primaryKey = 'id_aluno';
    protected $fillable = ['nome_aluno', 'datanasc_aluno', 'tipo_documento', 'nr_documento', 'sexo_aluno', 'restsaude_aluno', 'descsaude_aluno','telefone_aluno', 'tipo_parentesco', 'nome_parentesco', 'bairro_aluno', 'rua_aluno', 'casa_aluno', 'data_deposito','plano' ];
}
