<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personai extends Model
{
    use HasFactory;
    protected $table = 'personais';
    protected $primaryKey = 'id_personal';
    protected $fillable = ['nome_personal', 'datanasc_personal', 'tipo_documento', 'nr_documento', 'sexo_personal', 'restsaude_personal', 'descsaude_personal','telefone_personal', 'bairro_personal', 'rua_personal', 'casa_personal', 'data_inicio','tipo_contrato' ];
}
