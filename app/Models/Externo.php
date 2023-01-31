<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Externo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
        'nro',
        'titulo',
        'institucion_remitente',
        'persona_firmante',
        'asunto',
        'fecha_documento',
        'tipo_documento',
        'cite',
        'via',
        'responsable',
        'imagen',
        'fecha_ingreso',
        'observaciones',
        'derivado',
        'usuario_id',
    ];

    public function personal(){
        return $this->belongsTo(User::class);
    }
    public function deriva(){
        return $this->hasMany(Deriva::class);
    }
}
