<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gruposmusculare extends Model
{
    use HasFactory;
    protected $table = 'gruposmusculares';
    protected $primaryKey = 'id_grupoMuscular';
    protected $fillable = ['nome_grupoMuscular'];
    
}
